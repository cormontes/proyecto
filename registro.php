<?php
	// variable almacenara los errores
	$error = '';
	
	if (isset($_POST['submit'])){

		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$correo = $_POST['correo'];

		if(!empty($nombre)){
			$nombre = trim($nombre);
			$nombre = filter_var($nombre,FILTER_SANITIZE_STRING);
		}else{
			$error.= 'Por favor ingrese un Nombre <br>';
		}

		if(!empty($apellido)){
			$apellido = trim($apellido);
			$apellido = filter_var($apellido,FILTER_SANITIZE_STRING);
		}else{
			$error.= 'Por favor ingrese un Apellido <br>';
		}


		if(!empty($correo)){
			$correo = filter_var($correo,FILTER_SANITIZE_EMAIL);

			if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
				$error.='Por favor Ingrese un correo valido <br>';
			}
		}else{
			$error.='Por favor ingrese un correo';
		}
		/*********************************/
		// Conexion a Bases de Datos
		try{
			$conn = new PDO('mysql:host=localhost;dbname=package', 'root', '');
		}catch(PDOException $e){
			echo 'Error'.$e->getMessage();
			die();
		}
		/**********************************/
		
		$statement = $conn->prepare('select max(id) as max_id from mov_paq');
		$statement->execute();

		/** cuenta las filas de la consulta   **/
		$num = $statement->rowCount();

		if($num > 0){

			foreach ($statement as $valor) {
				$mayor = $valor['max_id'];
			}

			$cod = $mayor + 1;
			$codigo = 'pd'.$cod;

		}else{
			$cod = $num + 1;
			$codigo = 'pd'.$cod;
		}
		
		if(!$error){
			$statement = $conn->prepare('insert into mov_paq (codigo, nombre,correo) values (:codigo, :nombre, :correo)');
		 	$statement->execute(array(
		 			':codigo' => $codigo,
		 			':nombre' => $nombre,
		 			':correo' => $correo));
		 	$enviado=true;

		 	$asunto = 'Codigo de Rastreo';
		 	$mensaje = $codigo;
		 	mail($correo,$asunto,$mensaje);

		 	/* Evita que al actualizar la pagina guarde denuevo los registros*/
		 	header('Location: registro.php');
		}
		 

	}

	require 'view/registro.view.php';
?>