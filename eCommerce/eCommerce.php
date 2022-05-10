<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>eCommerce para emprendedores</title>
  </head>
  <body>

      <?php include("cabypie.php") ?>
      <?php CabeceraPagina(); ?>

      <div id="header">
        <form>
          <select name="Ordenar por: ">
            <option>Menor a mayor precio</option>
            <option>Mayor a menor precio</option>
            <option>Menor a mayor tamaño</option>
            <option>Mayor a menor tamaño</option>
          </select>
        </form>
      </div>
      <div id="header">
        <form>
          <select name="Filtrar por: ">
            <option>Espacios</option>
            <option>Aromas</option>
            <option>Fechas especiales</option>
          </select>
        </form>
      </div>

      <?php PiePagina(); ?>

  </body>
</html>
