<?php

namespace app\controllers;

use app\forms\PersonListForm;
use app\transfer\User;
use app\transfer\Result;

class PersonListCtrl{
	private $form;
	private $records;
	
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new PersonListForm();
	}
	
	public function getParams(){
		// 1. pobranie parametrów
		$this->form->searchbar = getFromRequest('searchbar');
	}

    public function action_personShowAll()
    {
		try{
			$this->records = getDB()->select("user", [
					"Iduser",
					"username",
					"mail",
				]);
			// $privilege = getDB()->select("User_has_role", "*",[
			// 		"User_UserID" => $this->records['UserID']
			// 	]);
		} catch (PDOException $e){
			getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			if (getConf()->debug) getMessages()->addError($e->getMessage());			
		} 

        $this->generateView();
    }

	public function action_personShowLike()
    {
        $this->getParams();

		try{
			$this->records = getDB()->select("user", "*");
		} catch (PDOException $e){
			getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			if (getConf()->debug) getMessages()->addError($e->getMessage());			
		}       

        $this->generateView();
    }

	public function generateView(){
		
		getSmarty()->assign('user',unserialize($_SESSION['user']));

		getSmarty()->assign('page_title','Strona Użytkowników');
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('users',$this->records); 
		getSmarty()->display('PersonListView.tpl');
	
    }

}