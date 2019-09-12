<?php
	$error = '';
	$num = '';




		try {
			$conn = new PDO('mysql:host=localhost;dbname=package','root','');
		} catch (PDOException $e) {
			echo 'Error'.$e->getMessage();
			die();
		}	

		$statement = $conn->prepare('select * from mov_paq');
		$statement->execute();
		/*$objeto = $statement->fetchAll();*/
		$consulta = $statement->fetchAll(PDO::FETCH_OBJ);
		$num = $statement->rowCount();
	

	require 'view/mostrar.view.php';
?>