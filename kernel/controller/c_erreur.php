<?php
	require_once(APP."Controller.php");
	
	class Erreur extends Controller{
		
		protected $models;
		
		public function __construct(){
			$this->models = array();
			parent::__construct($this->models);
		}
		
		public function e404(){
			$this->render("e404");
		}
	}
?>