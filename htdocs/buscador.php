<?php

if (!isset($_COOKIE['user'])) {

   header("Location: inicio_index.php");

} else {
   ?>
<!DOCTYPE html>
<html lang="es">
  <!--  Ubicacion de ficheros revizar organizacion del mismo -->
  <!-- // include_once './comp/head/buscador/head.php'; -->
  <?php include_once './comp/buscador/head/head.php';?>
  <body>
    <?php include_once './comp/nav.php';?>
    <div class="w3-container">
      <br/>
      <?php include "./comp/buscador/body/comp.php";?>
    </div>
    <script src="./js/buscador/buscador_get_html.js" type="text/javascript">
    </script>
    <!--
      <script src="./js/js/buscador/buscador.js" type="text/javascript">
      </script>
      -->
  </body>
</html>
<?php }?>
