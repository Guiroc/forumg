<?php
	require_once(APP."Controller.php");
	session_start();
	
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
			$nouveau = new sujet(null,$_POST['titre'], null, $_SESSION['id']);
			$bool = $nouveau->create();
			echo $bool;
			$_GET['nouveau'] = $_POST['nouveau'];
			header('Location: '.WEBROOT.'');
			
		}
	}
?>