<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="author" content="">
  <title></title>
  <link href="Content/css/bootstrap/css/bootstrap.css" rel="stylesheet">
</head>
<body>
  
  <?php require 'views/header.php'?>
  <!-- CONTENIDO -->
  
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center" style="margin-top:40px;">
        <h2 class="mt-5" style="margin-bottom:20px;" >Errores Registrados</h2>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Origen</th>
              <th scope="col">Código</th>
              <th scope="col">Descripción</th>
              <th scope="col">Fecha</th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
          <?php 
          include_once 'Models/errorweb.php';
            foreach($this->erroresweb as $row){
              $eweb = new errorweb();
              $eweb = $row; 
          ?>
            <tr>
              <td><?php echo $eweb->origen;   ?></td>
              <td><?php echo $eweb->codigo;   ?></td>
              <td><?php echo $eweb->descripcion;   ?></td>
              <td><?php echo $eweb->fecha;   ?></td>
              <td><a href="<?php echo constant ('URL'). 'consulta/verErrorweb/'. $eweb->iderror; ?>">Editar</a></td>
              <td><a href="<?php echo constant ('URL'). 'consulta/eliminarErrorweb/'. $eweb->iderror; ?>">Eliminar</a></td>
            </tr>
            <?php 
            }
          ?>

          </tbody>
        </table>

        
     
      </div>
    </div>
  </div>

  <?php require 'views/footer.php'?>

</body>

</html>