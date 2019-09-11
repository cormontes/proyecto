<?php 
	
	$error = '';
	$num='';
	if(isset($_POST['submit'])){
		$codigo = $_POST['codigo'];

		if(!empty($codigo)){
			$codigo = trim($codigo);
			$codigo = filter_var($codigo,FILTER_SANITIZE_STRING);

		}else{
			$error.='Por favor ingrese un codigo';
		}

		try{
				$conexion = new PDO('mysql:host=localhost;dbname=package', 'root','');
			}catch (PDOException $e){
				echo "ERROR" . $e->getMessage();
				die();
			}

		$statement = $conexion->prepare('select * from mov_paq where codigo = :codigo');
		$statement->execute(array(':codigo' => $codigo));
		$num = $statement->rowCount();

		if ($num == 0){
			$error.= 'Codigo Incorrecto o Erroneo <br>';
		}

	}
	require 'view/rastreo.view.php';
?>