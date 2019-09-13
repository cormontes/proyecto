<?php 
	

	$consulta = $_GET['codigo'];

	try {
		$conn = new PDO('mysql:host=localhost;dbname=package','root','');
	} catch (PDOException $e) {
		echo 'ERROR' . $e.getMessage();
		die();
	}
	
	$statement = $conn->prepare('select * from mov_paq where codigo = :consulta');
	$statement->execute(array(':consulta' => $consulta));
	$editar = $statement->fetch(PDO::FETCH_ASSOC);


	require 'view/editar.view.php';
?>