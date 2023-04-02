<?php

namespace app\controllers;

use app\forms\VotesListForm;
use app\transfer\User;
use app\transfer\Result;

class VotesListCtrl{
	private $form;
	private $questionnaire;
	private $answer;
	private $user;
	
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new VotesListForm();
	}
	
	public function getParams(){
		// 1. pobranie parametrów
		$this->user = unserialize($_SESSION['user']);
		$this->form->title = getFromRequest('title');
		$this->form->id = getFromRequest('id');
	}
	
	public function validate() {
		
		return true;

	}

    public function action_Vote()
    {

        $this->getParams();

        try {
			$check = getDB()->get('votes','*',[
				"questionnaire_idquestionnaire" => $this->form->id,
				"user_Iduser" => $this->user->id
			]);

			if ($check) {

				getDB()->update('Votes',[
						"Vote_description" => $this->form->title,
					],[
						"questionnaire_idquestionnaire" => $this->form->id,
						"user_Iduser" => $this->user->id
				]);

			}else{
				getDB()->insert('Votes',[
					"Vote_description" => $this->form->title,
					"questionnaire_idquestionnaire" => $this->form->id,
					"user_Iduser" => $this->user->id
				]);
			}
			forwardTo('VotesShowAll');
		}catch (PDOException $e){
			getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			if (getConf()->debug) getMessages()->addError($e->getMessage());			
		}

        $this->generateView();

    }

    public function action_VotesShowAll()
    {
		
        $this->getParams();

		try {

			$select = getDB()->select('questionnaire','*');
			
			$this->questionnaire = [];
			$answers = [];

			foreach ($select as $key => $value){
				$temp = explode("|", $value['questionnaire_description']);
				$this->questionnaire[$key] = [$value['idquestionnaire'],$temp];
			}
			
		} catch (PDOException $e){
			    getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			    if (getConf()->debug) getMessages()->addError($e->getMessage());			
		    }
		
        $this->generateView();

    }
	
	public function generateView(){
		
		getSmarty()->assign('user',unserialize($_SESSION['user']));
		
		getSmarty()->assign('page_title','Strona Główna');
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('questionnaires',$this->questionnaire );
		// getSmarty()->assign('answers',$this->answers       );
		getSmarty()->display('VotesListView.tpl');
	
    }

}