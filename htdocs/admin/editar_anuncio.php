<!--
Fichero destinado para trabajar con la edición del anuncio.
El fichero JavaScruipt que se incluye al final del maqueado
presenta inconvenientes para enviar los datos debido a la
funcionalidad múltiple de actualización y eliminación de anuncio.
Se trabajar usando el objeto formData y se eliminaran las etiquetas
de formulario por lo que se ara submit al objeto en en si lo cual
tendrá los valores correspondientes
 -->
<!DOCTYPE html>
<html>
   <?php include "./comp/admin/head/head.php";?>
   <body class="w3-light-grey">
      <?php include './comp/nav/nav.php';?>
      <!-- Overlay effect when opening sidebar on small screens -->
      <!-- ========================================= -->
      <div class="w3-overlay w3-hide-large w3-animate-opacity" id="myOverlay" onclick="w3_close()" style="cursor:pointer" title="close side menu">
      </div>
      <div class="w3-main" style="margin-left:300px;margin-top:43px;">
         <header class="w3-container" style="padding-top:22px">
            <h5>
               <b>
                  <i class="fa fa-dashboard">
                  </i>
                  Tablero del administrador detalles del anuncio
               </b>
            </h5>
         </header>
         <!--  Componente con todo lo necesario para la acción  -->
         <?php include './comp/editar_anuncio/comp.php';?>
      </div>
          <?php include "./comp/admin/javaScript/pie_pagina.php";?>
      <?php include "./comp/editar_anuncio/javaScript.php";?>
   </body>
</html>