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
          Ordenar por:
          <select>
            <option>Menor a mayor precio</option>
            <option>Mayor a menor precio</option>
            <option>Menor a mayor tamaño</option>
            <option>Mayor a menor tamaño</option>
          </select>
        </form>
        <form>
            Filtrar por:
            <select>
              <option>Espacios</option>
              <option>Aromas</option>
              <option>Fechas especiales</option>
            </select>
          </form>
      </div>
      <div class="button-container">
        <img src="vela1.jpg" width="200" height="200"><a href="#" alt="Añadir al carrito"><img src="addcarrito.png" width="25" height="25"></a>
        <img src="vela2.jpg" width="200" height="200"><a href="#" alt="Añadir al carrito"><img src="addcarrito.png" width="25" height="25"></a>
        <img src="vela3.jpg" width="200" height="200"><a href="#" alt="Añadir al carrito"><img src="addcarrito.png" width="25" height="25"></a>
        <img src="vela4.jpg" width="200" height="200"><a href="#" alt="Añadir al carrito"><img src="addcarrito.png" width="25" height="25"></a>
        <img src="vela5.jpg" width="200" height="200"><a href="#" alt="Añadir al carrito"><img src="addcarrito.png" width="25" height="25"></a>
        <img src="vela6.jpg" width="200" height="200"><a href="#" alt="Añadir al carrito"><img src="addcarrito.png" width="25" height="25"></a>
      </div>




      <?php PiePagina(); ?>

  </body>
</html>
