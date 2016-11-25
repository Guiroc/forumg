<?php
	abstract class model{
		
		//variable
		private $table;
		private $pk;
		private $autoincrement;
		private $atttech;
		private $fk;
		
		//constructeur
		public function __construct($table, $pk, $autoincrement, $fk){
			$this -> table = $table;
			$this -> pk = $pk;
			$this -> autoincrement = $autoincrement;
			$this -> atttech = array("table", "pk", "atttech", "autoincrement","fk");
			$this -> fk = $fk;
		}
		
		//connexion base
		protected function connexion(){
			$adresse = "localhost";
			$identifiant = "postgres";
			$mdp = "pgadmin";
			$base = "forum";
		
			try{
				$connexion=new PDO('pgsql:host='.$adresse.';dbname='.$base,$identifiant,$mdp);
			}
			catch(PDOException $e){
				die();
			}
			return($connexion);
		}
		
		//supprime la ligne corespondant à "$id", "table" dans la base
		public function delete($id){
			$sql = "delete from {$this->table} where {$this->pk}={$id}";
			//echo $sql;
			$connexion = $this->connexion();
			$sql = $connexion->exec($sql);
		}
		
		//lit et renvoie une liste associatif correspondant à "$id", "table" dans la base
		public function read($id){
			$sql = "select * from {$this->table} where {$this->pk}={$id}";
			//echo $sql;
			$connexion = $this->connexion();
			$sql = $connexion->query($sql);
			$connexion = null;
			$sql = $sql->fetch(PDO::FETCH_ASSOC);//afficher seulement le tableau associatif
			//print_r($sql);
			
			foreach($sql as $key=>$val){
				$this->$key = $val;
			}
			if($this->fk != null){
				$this->doBelongsToAssoc();
			}
		}
		
		//lit est envoie une liste assiciatif correspondant à $condition et "table" dans la base
		public function find($condition){
			$sql = "select * from {$this->table} where";
			foreach($condition as $key => $val){
				$sql = "$sql $condition and";
			}
			$sql = $sql.substr($lesvaleurs, 0, -4);
			//echo $sql;
			$connexion = $this->connexion();
			$sql = $connexion->query($sql);
			$connexion = null;
			$tmp = "";
			//echo"entrée dans la fonction";
			
			while($res = $sql->fetch(PDO::FETCH_ASSOC)){
				//echo"entrée dans le while";
				//print_r($res);
				$tmp[] = $res;
			}
			return $tmp;
		}
		
		/*public function create($tableau){
			$sql = "insert into {$this->table} (";
			
			foreach ($tableau as $colonne=>$value){
				$sql = "$sql$colonne,";
			}
			$sql = substr($sql, 0, -1);
			$sql = "$sql) values (";
			
			foreach ($tableau as $colonne=>$value){
				$sql = "$sql'$value',";
			}
			$sql = substr($sql, 0, -1);
			$sql = "$sql)";
			//echo $sql;
			$connexion = $this->connexion();
			$sql = $connexion->exec($sql);
			$connexion = null;
		}*/
		
		//créer une nouvelle ligne correspondant à "table" dans la base
		public function create(){
			//print_r($this);
			$sql = "insert into {$this->table} (";
			$lescolonnes = "";
			$lesvaleurs = "";
			//print_r ($this->lescles);
			
			if (!in_array($this->pk,$this->atttech) && $this->autoincrement){
				$this->atttech[] = $this->pk;
			}
			
			foreach ($this as $colonne=>$value){
				
				if(!in_array($colonne,$this->atttech)){
						$lescolonnes = "$lescolonnes$colonne,";
						$lesvaleurs = "$lesvaleurs'$value',";
				}	
			}
			//echo $lescolonnes;
			$sql = $sql.substr($lescolonnes, 0, -1);
			$sql = "$sql) values (";
			$sql = $sql.substr($lesvaleurs, 0, -1);
			$sql = "$sql)";
			//echo "</br>".$sql;
			$connexion = $this->connexion();
			$sql = $connexion->exec($sql);
			$connexion = null;
		}
	
		//modifie les valeurs de la ligne correspondant à "table" et "pk" dans la base
		public function update(){
			//print_r($this);
			$sql = "update {$this->table} set ";
			$att = $this->atttech;
			$att[] = $this->pk;
			
			foreach ($this as $colonne=>$value){
				//echo "</br>".$value;
				
				if(!in_array($colonne,$this->atttech)){
					$sql = "$sql $colonne = '$value',";
				}
			}
			$sql = substr($sql, 0, -1);
			$sql = "$sql where {$this->pk} = '{$this->{$this->pk}}'";
			//echo "</br>".$sql;
			$connexion = $this->connexion();
			$sql = $connexion->exec($sql);	
		}
		
		private function doBelongsToAssoc(){
			foreach($this->fk as $cle=>$valeur){
				$id = $this->$valeur;
				//echo $this->$valeur;
				$this->$valeur = new $cle();
				$this->$valeur->read($id);
			}
		}
	}
?>