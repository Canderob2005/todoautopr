<?php

if (!isset($_COOKIE['user'])) {

   header("Location: inicio_index.php");

} else {
   ?>
<!DOCTYPE html>
<html lang="es">
  <?php include_once './comp/anuncio/head/head.php';?>
  <body>
    <?php include_once './comp/nav.php';?>
    <div class="w3-container">
      <br/>
      <?php include "./comp/slide_show/comp.php";?>
      <?php include "./comp/anuncio/body/comp.php";?>
      <?php include "./comp/anuncio/modal/comp.php";?>
    </div>
    <script src="./js/anuncio/inicio.js" type="text/javascript">
    </script>
  </body>
</html>
<?php }?>
