<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="author" content="">
  <title></title>
   <link href="<?php echo constant('URL');?>Content/css/bootstrap/css/bootstrap.css" rel="stylesheet"> 
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Errores de la web</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo constant('URL');?>home">Inicio
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo constant('URL');?>nuevo">Nuevo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo constant('URL');?>consulta">Ver Errores</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="usuario">Usuario</a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>

</body>

</html>