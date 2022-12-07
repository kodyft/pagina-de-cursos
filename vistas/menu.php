
<?php require_once "dependencias.php" ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <!-- Begin Navbar -->
  <div id="nav">
    <div class="navbar navbar-inverse navbar-fixed-top" data-spy="affix" data-offset-top="100">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        <div id="navbar" class="collapse navbar-collapse">

          <ul class="nav navbar-nav navbar-right">

            <li class="active"><a href="inicio.php"><span class="glyphicon glyphicon-home"></span> Inicio</a>
            </li>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list-alt"></span> Estudiantes <span class="caret"></span></a>
            <ul class="dropdown-menu">

             <li><a href="RegistroEstudiantes.php">menu1</a></li>
             <li><a href="#">menu2</a></li>
             <li><a href="#">menu3</a></li>
            <li><a href="#">menu4</a></li>
           </ul>
      </li>
      <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list-alt"></span> Cursos <span class="caret"></span></a>
            <ul class="dropdown-menu">

             <li><a href="curso.php">Crear Cursos</a></li>
             <li><a href="listaCurso.php">Lista de Cursos</a></li>
           </ul>
      </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list-alt"></span> Reportes<span class="caret"></span></a>
            <ul class="dropdown-menu">
          <li><a href="#">Menu Reportes</a></li>
             <li><a href="#">Lista Usuarios</a></li>
             <li><a href="#">Categorias</a></li>
           </ul>
      </li>
         <li><a href="#"><span class="glyphicon glyphicon-user"></span> Administrar usuarios</a>
         </li>
       

         <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Otros</a>
         </li>

         <li class="dropdown" >
          <a href="#" style="color: red"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Usuario: <?php // echo $_SESSION['usuario']; ?>  <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li> <a style="color: red" href="../procesos/salir.php"><span class="glyphicon glyphicon-off"></span> Salir</a></li>

          </ul>
        </li>
      </ul>
    </div>
    <!--/.nav-collapse -->
  </div>
  <!--/.contatiner -->
</div>
</div>
<!-- Main jumbotron for a primary marketing message or call to action -->
<!-- /container -->        
</body>
</html>

<script type="text/javascript">
  $(window).scroll(function() {
    if ($(document).scrollTop() > 150) {
      $('.logo').height(200);

    }
    else {
      $('.logo').height(100);
    }
  });
</script>