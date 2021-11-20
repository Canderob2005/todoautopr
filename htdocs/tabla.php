<!--
Fichero se ejecutara en el futuro en le [index.php]
POr esta razón el comentario pues las URL de los ficheros externos JS y CSS deben revisarse. También las involuciones de PHP deben revisarse.
 -->

<!DOCTYPE html>
<html lang="en">
   <head>
      <title>
         Tabla
      </title>

      <?php include_once './comp/head.php';?>
      <link href="./css/anuncio.css" rel="stylesheet" type="text/css"/>
   </head>
   <body>
      <?php include_once './comp/nav.php';?>
      <br/>
      <?php include_once "./comp/slide_show/comp.php";?>
      <div class="w3-container w3-padding-large">
         <h2>
            Tabla de datos anuncio
         </h2>
         <p>
         </p>
         <div class="w3-responsive" style="width: 99%;">
            <?php include './php/tabla/tabla.php';?>
         </div>
      </div>
   </body>
</html>
