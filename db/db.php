<?php 
 class Db{

 	private $conn;

 	private $host 	=	'localhost';
 	private $dbname	=	'package';
 	private $dbuser	=	'root';
 	private $dbpass	=	'';


 	public function Conexion(){
 		try{
 			$this->conn = new PDO('mysql:host='.$this->host.';dbname'.$this->dbname,$this->dbuser,$this->dbpass);
 			$this->conn->exec('set name utf8');
 			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 			return $this->conn;
 		}catch (PDOException $e){
 			echo $e->GetMessage();
 		}
 	}
 }
?>