<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>eCommerce para emprendedores</title>
  </head>
  <body>
    <?php
      function CabeceraPagina(){
    ?>
      <h1>Velas Velásquez</h1>
      <a href="#">Inicio</a>
      <a href="#">Iniciar Sesión</a>
      <br><br>
      <div class="flexsearch">
        <div class="flexsearch--wrapper">
          <form class="flexsearch--form" action="#" method="post">
            <div class="flexsearch--input-wrapper">
              <input class="flexsearch--input" type="search" placeholder="Buscar producto">
              <input class="flexsearch--submit" type="submit" value="&#10140;"/>
            </div>
          </form>
        </div>
      </div>
      <br><br>
    <?php
      }
      function PiePagina(){
    ?>
        <font size="-1">eCommerce para emprendedores Grupo 6<br>
          Jeisson Ducuara         José Madera         Oswaldo Rincón          Cristian Rodríguez          Vanessa Sandoval          Angela Riveros
        </font><br>
          <?php
      }
      ?>
  </body>
</html>
