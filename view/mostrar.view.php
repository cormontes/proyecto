<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mostrar datos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
			<h2>Listado de Clientes</h2>
			<?php if ($num>0): ?>
				<div class="table-responsive">
					<table class="table table-hover">
					<thead>
						<tr>
							<th>Id</th>
							<th>codigo</th>
							<th>Nombre</th>
							<th>Correo</th>
							<th>Estado</th>
						</tr>
					</thead>
					<?php foreach ($consulta as $consulta): ?>
						<tbody>
							<tr>
								<td><?php echo $consulta->id;?></td>
								<td><?php echo $consulta->codigo; ?></td>
								<td><?php echo $consulta->nombre; ?></td>
								<td><?php echo $consulta->correo; ?></td>
								<td><?php echo $consulta->estado; ?></td>
								<td><a href="#"><button class="btn btn-default"><i class="fas fa-pencil-alt"></i> Modificar</button></a></td>
								<td><a href="#"><button class="btn btn-success">Eliminar</button></a></td>
							</tr>
						</tbody>
					<?php endforeach ?>
					</table>	
				</div>
			<input type="submit" name="consultar" value="enviar">
			<?php endif ?>
		</form>
	</div>
</body>
</html>