<!--
Fichero se ejecutara en el futuro en le [index.php]
POr esta razón el comentario pues las URL de los ficheros externos JS y CSS deben revisarse. También las involuciones de PHP deben revisarse.
 -->
<!-- ================================== -->
<!--  Se incluye la conexión  -->
<?php include "../server/conn.php";?>
<!-- ================================== -->
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>
      Anuncio
    </title>
    <!-- ==================================== -->
    <!--
         Cabecera con enlaces a librerías
         javascript y hojas de estilos
      -->
    <?php include_once '../comp/head.php';?>
    <style type="text/css">
    .targeta .w3-card-4{
    background-color: #d6eaf8;
    transform: scale(1);
    transition: transform 0.7s;
    }
    .targeta .w3-card-4:hover{
    transform: scale(1.06);
    }
    .targeta .w3-card-4 img{
    margin-top: 20px;
    height:150px;
    width:75%;
    }
    .targeta{
    margin-top: 15px;
    }
    </style>
    <style>
    .cabecera_targeta p, .descripcion_targeta>p{
    padding: 0px !important;
    margin: 0px !important;
    }
    </style>
    <!-- ==================================== -->
    <link href="../css/anuncio.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
    <!-- ================================== -->
    <!--  Menú de navegación -->
    <?php include_once '../comp/nav.php';?>
    <!-- ================================== -->
    <div class="w3-container">
      <br/>
      <!-- =============================================== -->
      <!--
         Zona para el componente de slideshow
         aquí se puede modificar fácilmente en
         le fichero que lo contiene
         -->
      <?php include "../comp/slide_show/comp.php";?>
      <!-- /home/code/Escritorio/Proyecto/todoautopr/htdocs/comp/slide_show/automatic-slideshow.php -->
      <!-- =============================================== -->
      <!-- <div class="container-fluid"> -->
      <div class="w3-container w3-stretch">
        <div class="row pt-5 m-1 contenedor_anuncio">
          <!-- ============================================ -->
          <?php include "../comp/ver_anuncios/comp.php";?>
          <!-- ============================================ -->
        </div>
        <!-- ==================================== -->
        <!--  Pie de pagina -->
        <!-- ==================================== -->
      </div>
    </div>
    <?php

// include_once '../comp/footer.php';
;?>
  </body>
</html>
