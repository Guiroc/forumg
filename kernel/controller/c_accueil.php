<?php
	require_once(APP."controller.php");
	session_start();
	class accueil extends controller{
		
		protected $models;
		
		public function __construct(){
			$this->models = array("sujet","utilisateur");
			parent::__construct($this->models);
		}
		
		
		public function index(){
			$this->render("index");
			if(isset($_SESSION['connect']) and $_SESSION['connect']){
				$this->render("connect");
			}
			else{
				$this->render("connexion");
			}
			$this->set($this->sujet->readall());
			$this->render("listesujet");
		}
		
		public function enregistrer(){
			$this->render("enregistrer");
		}
		
		public function nouveau_utilisateur(){
			var_dump($_POST);
			$nouveau = new utilisateur(null, $_POST['pseudo'], $_POST['e_mail'], $_POST['mdp']);
			$bool = $nouveau->create();
			header('Location: '.WEBROOT.'/accueil/connexion');
		}
		
		public function connexion(){
			var_dump($_POST);
			$nouveau = new utilisateur(null, $_POST['pseudo'], null, $_POST['mdp']);
			$condition = "utilisateur_pseudo = '".$_POST['pseudo']."' and utilisateur_mot_passe = '".$_POST['mdp']."'";
			echo $condition;
			$bool = $nouveau->find($condition);
			var_dump($bool);
			if (!$bool[0][0] == null){
				$_SESSION['id'] = $bool[0]['utilisateur_id'];
				$_SESSION['pseudo'] = $bool[0]['utilisateur_pseudo'];
				$_SESSION['connect']= true;
			}
			else{
				session_destroy();
			}
			header('Location: '.WEBROOT);
		}
		
		public function deconnexion(){
			session_destroy();
			header('Location: '.WEBROOT);
		}
	}
?>