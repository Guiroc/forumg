<?php
	require_once(APP."Controller.php");
	class csujet extends Controller{
		
		protected $models;
		
		public function __construct(){
			$this->models = array("sujet");
			parent::__construct($this->models);
		}
		
		public function nouveau(){
			
			$this->render("nouveau_sujet");
		}
		public function ajout(){
			var_dump($_POST);
			$nouveau = new sujet(null,$_POST['titre'], null, null);
			$bool = $nouveau->create();
			echo $bool;
			header('Location: '.WEBROOT.'');
		
		}
	}
?>