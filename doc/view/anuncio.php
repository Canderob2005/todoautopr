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
         JavaScript y hojas de estilos
      -->
    <?php include_once '../comp/head.php';?>
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
        <h3>
          Anuncíate aquí
        </h3>
        <div class="row pt-5 m-1 contenedor_anuncio">
          <!-- ============================================ -->
          <!--  Zona del formulario  -->
          <!--
            NOTA:
              Verificar selección de los elementos select.
              Se implementan en diferentes zonas, son componentes.
              Verificar si sus selección con JavaScript.
              es mejor con selector descendiente padre hijo y aplicar distintos padres para evitar duplicados de selección futuras.
              Conlleva omitir la selección por id
              
              IMPORTANTE : El formulario fue movido a un borrador en el mismo directorio. Tiene la misma estructura y se espera eliminar Boostrap por completo en el futuro.
            -->
          <?php include "../comp/anuncio/comp.php";?>
          <!-- server/anuncio envia los datos al servidor  -->
          <!-- ============================================ -->
        </div>
        <!-- ==================================== -->
        <!--  Pie de pagina -->
        <!-- ==================================== -->
      </div>
      <!-- ===================================== -->
      <!--  Sección para fragmentos modal   -->
      <!-- ===================================== -->
      <!-- ================================================= -->
      <!--  Ficheros modal que se usaran en la aplicación  -->
      <?php include_once "../comp/modal_pagado.php";?>
      <?php include_once "../comp/anuncio/comp.php";?>
      <!--
            El modal error en enviar también despliega mensaje de
            envío satisfactorio. el nombre puede ser modificado en el futuro debido a la convención de nombres.
            Nombre sugerido:
            {modal_mensaje_envio_anuncio.php}
          -->
      <?php include_once "../comp/modal_error_enviar.php";?>
      <!-- ================================================= -->
    </div>
    <?php 
         // include_once '../comp/footer.php';
      ?>
    <script type="text/javascript">
      // =========================================================
      //  Ubicación del la función {anuncio();} en {funciones.js}
      // anuncio();
      // =========================================================
      window.addEventListener('load', (event) => {
      let contenedor_formulario = document.querySelector(".contenedor_formulario");
      contenedor_formulario.style.display = "block";
      let pagado= document.querySelectorAll(".pagado");
      for (var i = 0; i < pagado.length; i++) {
      pagado[i].checked = false;
      }
      let marca_selecionada_defecto=document.getElementById("marca_selecionada_defecto");
      marca_selecionada_defecto.selected = true;
      trabajoConAnuncio();
      });
    </script>
  </body>
</html>
