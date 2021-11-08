<!--
Fichero se ejecutara en el futuro en le [index.php]
POr esta razón el comentario pues las URL de los ficheros externos JS y CSS deben revisarse. También las involuciones de PHP deben revisarse.
 -->


<!DOCTYPE html>
<html lang="en">
   <head>
      <title>
         Buscador
      </title>
      <?php include_once "../server/conn.php";?>
      <?php include_once '../comp/head.php';?>
   </head>
   <body>
      <?php include_once '../comp/nav.php';?>
      <div class="w3-container">
         <br/>
         <br/>
         <?php include "../comp/slide_show/comp.php";?>
         <?php include "../comp/detalle_anuncio/comp.php";?>
      </div>
   </body>
</html>