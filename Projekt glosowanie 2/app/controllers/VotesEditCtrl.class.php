<?php

namespace app\controllers;

use app\forms\VotesEditForm;
use app\transfer\User;
use app\transfer\Result;

class VotesEditCtrl{
	private $form;
	private $user;
	
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new VotesEditForm();
	}
	
	public function getParams(){
		// 1. pobranie parametrów
		// $this->user = new User(unserialize($_SESSION['user']));
		$this->form->id = getFromRequest('id');
		$this->form->title = getFromRequest('title');
		$this->form->description = getFromRequest('description');
	}
	
	public function validate() {

		// sprawdzenie, czy parametry zostały przekazane
			if(!isset($this->form->id))     { getMessages()->addError ( 'Nie podano id' ); }
			if(!isset($this->form->title))   { getMessages()->addError ( 'Nie podano tytułu' ); }
			if(!isset($this->form->description)){ getMessages()->addError ( 'Nie podano zawartości' ); }
		
		// nie ma sensu walidować dalej, gdy brak parametrów
		if (! getMessages()->isError ()) {
			
			// sprawdzenie, czy potrzebne wartości zostały przekazane
				if ($this->form->title    == "") { getMessages()->addError ( 'Nie podano tytułu' ); }
				if ($this->form->description == "") { getMessages()->addError ( 'Nie podano zawartości' ); }
		}
		
		// 2. sprawdzenie poprawności przekazanych parametrów

		return ! getMessages()->isError();
	}

    public function action_VotesNew()
    {

        $this->generateView();

    }

    public function action_VotesEdit()
    {

        $this->getParams();

        $select = getDB()->get('questionnaire',"*",[
			"idquestionnaire" => $this->form->id
		]);

		$this->form->title = $select['questionnaire_name'];
		$this->form->description = $select['questionnaire_description'];


        $this->generateView();
    }
	
    public function action_VotesSave()
    {
        # code...
        $this->getParams();

        if($this->validate()){

			if ($this->form->id == "") {
				
				try {
					
					getDB()->insert('questionnaire',[
						'questionnaire_name' => $this->form->title,
						'questionnaire_description' => $this->form->description,
						'questionnaire_date_created' => getdate(),
						'questionnaire_state' => 0,
						'questionnaire_created_by' => 1
					]);

				}catch (PDOException $e){
			    	getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			    	if (getConf()->debug) getMessages()->addError($e->getMessage());			
		    	}

			} else {
				
				try {
					
					getDB()->update('questionnaire',[
						'questionnaire_name' => $this->form->title,
						'questionnaire_description' => $this->form->description,
						'questionnaire_date_created' => getdate(),
						'questionnaire_state' => 0,
						'questionnaire_created_by' => 1
					],[
						"idquestionnaire" => $this->form->id
					]);

				}catch (PDOException $e){
			    	getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			    	if (getConf()->debug) getMessages()->addError($e->getMessage());			
		    	}
			}
        }

        $this->generateView();
    }
	
    // public function action_VotesDelete()
    // {
    //     # code...
    //     $this->getParams();

    //     if($this->validate()){
    //         //
    //     } else {
    //         //
    //     }

    //     $this->generateView();
    // }
	
	public function generateView(){
		
		getSmarty()->assign('user',unserialize($_SESSION['user']));
		
		getSmarty()->assign('page_title','Strona Edycji');
		getSmarty()->assign('form',$this->form);
		getSmarty()->display('VotesEditView.tpl');
	
    }

}