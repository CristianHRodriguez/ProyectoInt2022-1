<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inicio de Sesion</title>
  </head>
  <body>
      <?php include("cabypie.php") ?>
      <?php CabeceraPagina(); ?>
      <img src="sesion.png" width="200" height="200"><br>

      <input type="text" placeholder="Correo electrónico"><br>
      <input type="password" class="pass" id="Input" placeholder="Contraseña">
      <input type="submit" value="&#10140;"/><br>

      <?php PiePagina(); ?>

  </body>
</html>
