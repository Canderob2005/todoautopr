
<!--
Fichero se ejecutara en el futuro en le [index.php]
POr esta razón el comentario pues las URL de los ficheros externos JS y CSS deben revisarse. También las involuciones de PHP deben revisarse.
 -->


<!--
Nota:
La estructurara de este debe ser similar a  la del fichero anuncio
Al momento de implementar MVC en este proyecto debe estar debidamente
organizado para incluir en las llamadas los ficheros correspondientes a la llamada.
debe tomarse en consideración las peticiones POST que se hacen en la aplicación para le poseso
 -->
<?php

if (!isset($_COOKIE['user'])) {

   header("Location: inicio_index.php");

} else {?>

 <!DOCTYPE html>
<html lang="es">
   <?php include_once './comp/head/buscador/head.php';?>
   <body>
      <?php include_once './comp/nav.php';?>
      <br/>
      <!-- <?php // include "./comp/buscador/buscador.php";;;;;;;;;?> -->
      <?php include "./comp/buscador/comp.php";?>
      <!--
      <script src="./js/buscador.js" type="text/javascript">
      </script>
      -->
      <!-- ================================================================ -->
      <!--
      Se cambo de ubicacion en flichero  de funcionalidad el buscador
       -->
      <script src="./js/buscador/buscador_get_html.js" type="text/javascript">
      </script>
      <!--
      <script src="./js/js/buscador/buscador.js" type="text/javascript">
      </script>
      -->
      <!-- ================================================================ -->
   </body>
</html>

<?php }?>


