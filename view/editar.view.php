<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="col-md-8">
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
				<h2>Editar Registros</h2>
				<div class="form-group">
					<label for="">Codigo: </label>
					<input type="text" name="codigo" id="codigo" value="<?php echo $editar['codigo']; ?>">
				</div>
				<div class="form-group">
					<label for="">Nombre: </label>
					<input type="text" name="nombre" id="nombre" value="<?php echo $editar['nombre']; ?>">
				</div>
				<div class="form-group">
					<label for="">Correo: </label>
					<input type="text" name="correo" id="correo" value="<?php echo $editar['correo']; ?>">
				</div>
				<div class="form-group">
					<label for="">Estado: </label>
					<input type="text" name="estado" id="estado" value="<?php echo $editar['estado']; ?>">
				</div>
				<button onclick="">Guardar</button><button type="">Atras</button>
			</form>
		</div>
	</div>
</body>
</html>