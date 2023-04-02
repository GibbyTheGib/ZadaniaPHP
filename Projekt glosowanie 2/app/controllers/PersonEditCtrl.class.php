<?php

namespace app\controllers;

use app\forms\PersonEditForm;
use app\transfer\User;
use app\transfer\Result;

class PersonEditCtrl{
	private $form;
	private $privileges;
	private $user;
	
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new PersonEditForm();
	}
	
	public function getParams(){
		// 1. pobranie parametrów
		try {
			$this->privileges = getDB()->select("Role", "*");
		} catch (PDOException $e){
			getMessages()->addError('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
			if (getConf()->debug) getMessages()->addError($e->getMessage());			
		}
		$this->user = unserialize($_SESSION['user']);
		$this->form->id = getFromRequest('id');
		$this->form->name = getFromRequest('name');
		$this->form->surname = getFromRequest('surname');
		$this->form->mail = getFromRequest('mail');
		$this->form->pass = getFromRequest('pass');
		$this->form->pass2 = getFromRequest('pass2');
		$this->form->privilege = getFromRequest('privilege');
	}

	public function validateLoad()
	{
		$this->form->id = getFromRequest('id',true,'Błędne wywołanie aplikacji');
		return ! getMessages()->isError();
	}
	
	public function validate() {

		// sprawdzenie, czy parametry zostały przekazane
		if ($this->user->id == $this->form->id) {
			if(!isset($this->form->name))   { getMessages()->addError ( 'Nie podano imienia' ); }
			if(!isset($this->form->mail))   { getMessages()->addError ( 'Nie podano maila' ); }
			if(!isset($this->form->pass))   { getMessages()->addError ( 'Nie podano hasła' ); }
			if(!isset($this->form->pass2))  { getMessages()->addError ( 'Nie podano ponownie hasła' ); }
		}
		// nie ma sensu walidować dalej, gdy brak parametrów
		if (! getMessages()->isError ()) {
			
			// sprawdzenie, czy potrzebne wartości zostały przekazane
			if ($this->form->id      == "") { getMessages()->addError ( 'Nie podano id' ); }
			if ($this->user ->id == $this->form->id) {
				if ($this->form->name    == "") { getMessages()->addError ( 'Nie podano imienia' ); }
				if ($this->form->mail    == "") { getMessages()->addError ( 'Nie podano maila' ); }
				if ($this->form->pass    == "") { getMessages()->addError ( 'Nie podano hasła' ); }
				if ($this->form->pass2   == "") { getMessages()->addError ( 'Nie podano ponownie hasła' ); }
				if ( !($this->form->pass == $this->form->pass2)) { getMessages()->addError ( 'Hasła muszą być takie same' ); }
				if (!filter_var($this->form->mail, FILTER_VALIDATE_EMAIL)){ getMessages()->addError ("Nie podano poprawnego emaila"); }
				
			}
			//DOROBIĆ REGEXP DO MAILA

		}
		
		// 2. sprawdzenie poprawności przekazanych parametrów

		
		return ! getMessages()->isError();
	}

    public function action_personEdit()
    {
		$this->getParams();
		// 1. walidacja id osoby do edycji
		if ( $this->validateLoad() ){
			try {
				// 2. odczyt z bazy danych osoby o podanym ID (tylko jednego rekordu)
				$this->privileges = getDB()->select("Role", "*");
				
				$currentUser = getDB()->get("user", "*",[
					"Iduser" => $this->form->id
				]);

				// 2.1 jeśli osoba istnieje to wpisz dane do obiektu formularza
				$this->form->id = $currentUser['Iduser'];
				$this->form->name = $currentUser['username'];
				$this->form->mail = $currentUser['mail'];
				$this->form->pass = $currentUser['password'];

				$privilegeUser = getDB()->get("User_has_role", "role_idrole",[
					"user_Iduser" => $this->form->id
				]);
				$this->form->privilege = $privilegeUser;				

			} catch (PDOException $e){
				getMessages()->addError('Wystąpił błąd podczas odczytu rekordu');
				if (getConf()->debug) getMessages()->addError($e->getMessage());			
			}
		}
		// 3. Wygenerowanie widoku
		$this->generateView();	
    }
	
    public function action_personSave()
    {
		$this->getParams();

		if ($this->validate()) {
			// 2. Zapis danych w bazie
			try {
				if ( $this->user ->id == $this->form->id ) {
					//2.1 Edycja rekordu o danym ID
					getDB()->update("user", [
							"mail" => $this->form->mail,
							"username" => $this->form->name,
							"password" => md5($this->form->pass),
							"last_updated" => getdate(),
						], [ 
							"Iduser" => $this->form->id
						]);
				}
				if ( $this->user ->privilege == 'admin' ) {
					//2.2 Edycja roli przez admina
					getDB()->update("User_has_role", [
							"role_idrole" => $this->form->privilege,
							"role_changed_date" => getdate(),
							"assigned_by" => $this->user->id
						], [ 
							"user_Iduser" => $this->form->id
						]);
				}

				getMessages()->addInfo('Pomyślnie zapisano rekord');

			} catch (PDOException $e){
				getMessages()->addError('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
				if (getConf()->debug) getMessages()->addError($e->getMessage());			
			}
			// 3b. Po zapisie przejdź na stronę listy osób (w ramach tego samego żądania http)
			forwardTo('personShowAll');

		} else {
			// 3c. Gdy błąd walidacji to pozostań na stronie
			$this->generateView();
		}
        
    }
	
    public function action_personDelete()
    {
		$this->getParams();

        if($this->validateLoad()){
			try{
				getDB()->update("user_has_role",[
					"role_idrole" => 4
					],["user_Iduser" => $this->form->id
				]);
				getMessages()->addInfo('Pomyślnie zbanowano'.$this->form->id);
            } catch (PDOException $e){
				getMessages()->addError('Wystąpił błąd podczas usuwania rekordu');
				if (getConf()->debug) getMessages()->addError($e->getMessage());			
			}
        }

        forwardTo('personShowAll');
    }
	
	public function generateView(){
		
		getSmarty()->assign('user',unserialize($_SESSION['user']));

		getSmarty()->assign('page_title','Strona Edycji');
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('privileges',$this->privileges);
		getSmarty()->display('PersonEditView.tpl');
	
    }

}