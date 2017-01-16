<?php
	require_once(APP."controller.php");
	class accueil extends controller{
		
		protected $models;
		
		public function __construct(){
			$this->models = array("sujet");
			parent::__construct($this->models);
		}
		
		
		public function index(){
			$this->render("index");
			$this->render("connexion");
			$this->set($this->sujet->readall());
			$this->render("listesujet");
		}
	}
?>