<!--
La navegación móvil esta funcionando.
Se necesita extraer el CSS de esta sección
e incorporar un fichero en la cabeza del
documento que erutara esta componente.
Se recomienda analizar la selección para
no afectar otros elementos con los selectores CSS
-->
<style type="text/css">
   .navegacion_top_bar a{
padding: 15px !important;
/*height: 50px;*/
}
.navegacion_top_bar{
/*height: 100%;*/
height: 50px;
}
#menu_navegacion{
background-color: rgba(0, 0, 0, 0.4);
color: #ffffff;
}
</style>
<div class="w3-top">
   <div class="w3-bar w3-black navegacion_top_bar">
      <a class="w3-bar-item w3-button" href="#">
         Prototipo de aplicación
      </a>
      <a class="w3-bar-item w3-button w3-hide-small" href="anuncio.php">
         Anuncio
      </a>
      <a class="w3-bar-item w3-button w3-hide-small" href="tabla.php">
         Tabla
      </a>
      <a class="w3-bar-item w3-button w3-hide-small" href="buscador.php">
         Buscador
      </a>
      <a class="w3-bar-item w3-button w3-hide-small" href="ver_anuncios.php">
         Ver Anuncios
      </a>
      <a class="w3-bar-item w3-button w3-hide-small" href="../admin/index.php">
         Tablero del administrador
      </a>
      <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" href="javascript:void(0)" onclick="myFunction()">
         ☰
      </a>
   </div>
   <div class="w3-bar-block w3-hide w3-hide-large w3-hide-medium" id="menu_navegacion">
      <a class="w3-bar-item w3-button" href="anuncio.php">
         Anuncio
      </a>
      <a class="w3-bar-item w3-button" href="tabla.php">
         Tabla
      </a>
      <a class="w3-bar-item w3-button" href="buscador.php">
         Buscador
      </a>
      <a class="w3-bar-item w3-button" href="ver_anuncios.php">
         Ver Anuncios
      </a>
      <a class="w3-bar-item w3-button" href="../admin/index.php">
         Tablero del administrador
      </a>
      <a class="w3-bar-item w3-button" href="#">
         xxxxxxxxxxxxxxx
      </a>
      <a class="w3-bar-item w3-button" href="#">
         xxxxxxxxxxxxxxx
      </a>
      <a class="w3-bar-item w3-button" href="#">
         xxxxxxxxxxxxxxx
      </a>
      <a class="w3-bar-item w3-button" href="#">
         xxxxxxxxxxxxxxx
      </a>
      <a class="w3-bar-item w3-button" href="#">
         xxxxxxxxxxxxxxx
      </a>
   </div>
</div>
<script>
   function myFunction() {
  var x = document.getElementById("menu_navegacion");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
