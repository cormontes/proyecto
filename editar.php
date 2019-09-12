<?php 
	

	$consulta = $_GET['codigo'];
	
	if(isset($_POST['submit'])){

	}
	try {
		$conn = new PDO('mysql:host=localhost;dbname=package','root','');
	} catch (PDOException $e) {
		echo 'ERROR' . $e.getMessage();
		die();
	}
	


	require 'view/editar.view.php';
?>