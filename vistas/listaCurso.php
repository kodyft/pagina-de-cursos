<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php require_once "menu.php"; ?>
	<div class="container">
		<div>
			<h1>Lista de cursos</h1>

			<table class="table">
				<TR>
					<td>ID CURSOS</td>
					<td>NOMBRE DE CURSO</td>
					<td>DESCRIPCION</td>
				</TR>	
				
					<?PHP
					 include('../clases/Conexion.php');
					 $query="SELECT * FROM curso";
					 $res=$conexion->query($query);
 
  
 
					 while ($row=$res->fetch_assoc()) {
						 ?>
							 <tr>
								 <td> <?php     echo $row['Id_Curso']; ?> </td>
								 <td> <?php     echo $row['Nombre']; ?> </td>
								 <td> <?php     echo $row['Descripcion']; ?> </td>
							 </tr>    
					 <?php            
						 }
					  ?>
				
			</table>
		</div>
	</div>

</body>
</html>