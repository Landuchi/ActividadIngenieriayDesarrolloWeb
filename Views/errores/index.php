<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="author" content="">
  <title></title>
</head>
<body>
    <?php require 'Views/header.php'?>

    <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
      <h2 class="mt-5"><?php echo $this->mensajeError; ?></h2>
        <p class="lead">ERROR AL CARGAR LA PAGINA</p>
      </div>
    </div>
  </div>

<?php require 'Views/footer.php'?>
</body>

</html>
