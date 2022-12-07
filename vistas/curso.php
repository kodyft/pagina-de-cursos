<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php require_once "menu.php"; ?>
</head>	

<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<h1> CREAR CURSO</h1>
			<form class="form-control" method="POST" action="../procesos/crearCurso.php">
			<div class="groud control">
				<label >Nombre de curso</label>
				<input class="form-control" type="text" name="nombre">
				<label>Descripcion</label>
				<input  class="form-control" type="text" name="descripcion">

				<br>
				<button type="submit" name="add_c" class="btn btn-danger">Guardar curso</button>
				
			</div>
			</form>
		</div>
	</div>
</div>

</body>
</html>