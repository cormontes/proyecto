<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf8">
	<title>Rastreo</title>
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/estilos.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="col-md-12 conte">

			<div class="row">
				<div class="col-md-4 contenido">	
					<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
						<div class="form-group">
							<h3>Rastreo y seguimiento</h3>
							<input type="text" name="codigo" id="codigo" class="form-control" placeholder="Ingrese Numero" required>
						</div>
						<input type="submit" class="form-control btn btn-primary" name="submit" value="Consultar">
					</form>
				</div>
			</div>
	
			<div class="row">
				<div class="col-md-4 tabla">
					<?php if ($num > 0){ ?>
						<?php foreach($statement as $mostrar): ?>
							<table id='tabla' class="table table-dark table-hover col-md-4">
								<thead>
									<tr>
										<th>Id</th>
										<th>Codigo</th>
										<th>Nombre</th>
										<th>Estado</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><?php echo $mostrar['id']; ?></td>
										<td><?php echo $mostrar['codigo']; ?></td>
										<td><?php echo $mostrar['nombre']; ?></td>
										<td><?php echo $mostrar['estado']; ?></td>
									</tr>
								</tbody>
							</table>
						<?php endforeach;?>
					<?php } ?>	
					<?php if (!empty($error)): ?>
							<p>Codigo Erroneo</p>
						<?php endif ?>	
				</div>
			</div>
		</div>


	</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
					
