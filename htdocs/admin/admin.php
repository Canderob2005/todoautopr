<!DOCTYPE html>
<html>
<head>
   <title>
      Admin
   </title>
   <meta charset="utf-8"/>
   <meta content="width=device-width, initial-scale=1" name="viewport"/>
   <!--
   <link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet"/>
   -->
   <!--
   <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"/>
   -->
   <link href="../css/w3.css" rel="stylesheet"/>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
   <!--
   <style>
   html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
   </style>
   -->
   <script src="../js/jquery-3.5.1.min.js" type="text/javascript">
   </script>
   <script src="../js/admin/vista_previa.js" type="text/javascript">
   </script>
</head>


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
                  Tablero del administrador inicio
               </b>
            </h5>
         </header>
         <?php include './comp/admin/vista_previa/comp.php';?>
      </div>
      <?php include "./comp/admin/javaScript/pie_pagina.php";?>
   </body>
</html>

