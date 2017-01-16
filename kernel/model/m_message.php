<?php
	require_once(APP.'Model.php');

	class message extends model{
		
		//variable
		protected $message_id;
		protected $message_titre;
		protected $message_contenu;
		protected $message_date_creation;
		protected $message_date_edite;
		protected $message_sujet_id;
		protected $message_utilisateur_id;
		
		//constructeur
		public function __construct($id=null, $titre=null, $contenu=null, $date_creation=null, $date_edite=null, $sujet_id=null, $utilisateur_id=null){
			parent::__construct("message", "message_id", true, array('sujet' => 'message_sujet_id', 'utilisateur' => 'message_utilisateur_id'));
			$this->message_id=$id;
			$this->message_titre=$titre;
			$this->message_contenu=$contenu;
			$this->message_date_creation=$date_creation;
			$this->message_date_edite=$date_edite;
			$this->message_sujet_id=$sujet_id;
			$this->message_utilisateur_id=$utilisateur_id;
		}
		
		//get
		public function get_message_id(){
			return $this->message_id;
		}
		
		public function  get_message_titre(){
			return $this->message_titre;
		}
		
		public function get_message_contenu(){
			return $this->message_contenu;
		}
		
		public function get_message_date_creation(){
			return $this->message_date_creation;
		}
		
		public function get_message_date_edite(){
			return $this->message_date_edite;
		}
		
		public function get_message_sujet_id(){
			return $this->message_sujet_id;
		}
		
		public function get_message_utilisateur_id(){
			return $this->message_utilisateur_id;
		}
		
		//set
		public function set_message_id($id){
			$this->message_id = $id;
		}
		
		public function set_message_titre($titre){
			$this->message_titre = $titre;
		}
		
		public function set_message_contenu($contenu){
			$this->message_contenu = $contenu;
		}
		
		public function set_message_date_creation($date_creation){
			$this->message_date_creation = $date_creation;
		}
		
		public function set_message_date_edite($date_edite){
			$this->message_date_edite = $date_edite;
		}
		
		public function set_message_sujet_id($sujet_id){
			$this->message_sujet_id = $sujet_id;
		}
		
		public function set_message_utilisateur_id($utilisateur_id){
			$this->message_utilisateur_id = $utilisateur_id;
		}
	}
?>