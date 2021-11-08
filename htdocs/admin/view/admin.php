<!DOCTYPE html>
<html>
   <?php include "../comp/admin/head/head.php";?>

   <body class="w3-light-grey">
      <?php include '../comp/nav/nav.php';?>
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
                  Tablero del administrador inicio
               </b>
            </h5>
         </header>
         <?php include '../comp/admin/vista_previa/comp.php';?>
      </div>
      <?php include "../comp/admin/javaScript/pie_pagina.php";?>
   </body>
</html>

