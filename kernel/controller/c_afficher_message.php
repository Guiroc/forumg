<?php
	require_once(APP."Controller.php");
	class afficher_message extends Controller{
		
		protected $models;
		
		public function __construct(){
			$this->models = array("message", "sujet","utilisateur");
			parent::__construct($this->models);
		}
		
		
		public function view($id,$bool=null){
			$a = "message_sujet_id=".$id;
			$b = $this->sujet->read($id);
			$b = $this->sujet->totable();
			$d = $this->message->find($a);
			//echo $bool;
			if ($bool == 1){
				$this->set(array($d, $b,"Message envoyé"));		
			}else{
				$this->set(array($d, $b,""));
			}
			$this->render("listemessage");
		}
		
		public function viewajout($id){
			print_r($_POST);
			$nouveau = new message(null, null, $_POST['nouveau'], '2016-12-16', null, $id, 1);
			$bool = $nouveau->create();
			$this->view($id,$bool);
		}
	}
?>