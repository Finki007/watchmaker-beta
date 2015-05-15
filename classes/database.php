<?php
	class clsDBAccess{
				
		private $db_username = '';
		private $db_password = '';
		private $db_servername = '';
		
		function __construct($username, $password, $servername){
			$this->db_username = $username;
			$this->db_password = $password;
			$this->db_servername = $servername;
		}
		
		public function GetData($dataName, $strSQL){
			//Öffne Connection
			$link = mysqli_connect($this->db_servername, $this->db_username, $this->db_password);
			
			//Prüfe
			if(!$link){
				exit('ERROR 108');
			}
			
			//Verbindung herstellen
			$db_selected = mysqli_select_db($link, $dataName);
			
			//SQL
			$data = mysqli_query($link, $strSQL);
			
			return $data;
		}
	}	
?>