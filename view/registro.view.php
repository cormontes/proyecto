<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registro</title>
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/estilos.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<script>
  		/* No volver a pagina anterior*/
  		javascript:window.history.forward(1);
  	</script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 registro  border border-white">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" name="form-registro" class="form-horizontal">
					<h2>Registro de Usuarios</h2>
					<div class="form-group row">
						<label for="form-registro" class="col-sm-2 col-form-label">Nombre :</label>
						<input type="text" name="nombre" class="form-control col-sm-6" placeholder="Nombre">
					</div>
					<div class="form-group row">
						<label for="form-registro" class="col-sm-2 col-form-label">Apellido :</label>
						<input type="text" name="apellido" class="form-control col-sm-6" placeholder="Apellido">
					</div>
					<div class="form-group row">
						<label for="form-registro" class="col-sm-2 col-form-label">Correo :</label>
						<input type="text" name="correo" class="form-control col-sm-6" placeholder="Correo Electronico">
					</div>
					<?php if (!empty($error)): ?>
						<p><?php echo $error; ?></p>
					<?php endif ?>
					
					<div class="form-group row">
						<input type="submit" class="form-control btn btn-primary col-sm-2" name="submit" value="Enviar">
					</div>
				</form>
			</div>
		</div>
	</div>

	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>