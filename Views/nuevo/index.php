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
      <div class="col-lg-8 " style="margin-top:50px;">
        <h2 class="mt-5" style="margin-bottom:20px;">Registrar Nuevo Error</h2>
            <div ><?php echo $this->mensaje; ?></div>
          <form action="<?php echo constant('URL'); ?>/nuevo/registrarError" method="POST">
              <div class="form-group">
                <label for="origen">Origen</label><br>
                <input type="text" name ="origen" class="form-control" required></input>
              </div>
              <div class="form-group">
                <label for="codigo">Código</label><br>
                <input type="text" name ="codigo" class="form-control" required></input>
              </div>
              <div class="form-group">
                <label for="descripcion">Descripcion</label><br>
                <textarea type="text" name ="descripcion" class="form-control" rows ="5" required></textarea>
              </div>
              <div class="form-group">
                <label for="fecha">Fecha</label><br>
                <input type="date" name ="fecha" class="form-control"></input>
              </div>
              <div class="form-group">
               <input type="submit" value="Registrar Error" class="btn btn-primary btn-lg mb-2"> 
              </div>
          </form>
        
      </div>
    </div>
  </div>

  <?php require 'views/footer.php'?>

</body>

</html>