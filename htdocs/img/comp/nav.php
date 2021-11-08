<div class="w3-bar w3-black">
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
   <a class="w3-bar-item w3-button w3-hide-small" href="../server/buscador/buscador.php" target="_blank">
      buscador
   </a>
   <a class="w3-bar-item w3-button w3-hide-small" href="../server/buscador/buscador2.php" target="_blank">
      buscador2
   </a>
   <a class="w3-bar-item w3-button w3-hide-small" href="../server/buscador/buscador3.php" target="_blank">
      buscador3
   </a>
   <a class="w3-bar-item w3-button w3-hide-small" href="../server/buscador/buscador4.php" target="_blank">
      buscador4
   </a>
   <a class="w3-bar-item w3-button w3-hide-small" href="../server/buscador/test.php" target="_blank">
      test
   </a>
   <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" href="javascript:void(0)" onclick="myFunction()">
      ☰
   </a>
</div>
<div class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium" id="menu_navegacion">
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
   <a class="w3-bar-item w3-button w3-hide-small" href="../server/buscador/buscador.php" target="_blank">
      buscador
   </a>
   <a class="w3-bar-item w3-button w3-hide-small" href="../server/buscador/buscador2.php" target="_blank">
      buscador2
   </a>
   <a class="w3-bar-item w3-button w3-hide-small" href="../server/buscador/buscador3.php" target="_blank">
      buscador3
   </a>
   <a class="w3-bar-item w3-button w3-hide-small" href="../server/buscador/buscador4.php" target="_blank">
      buscador4
   </a>
   <a class="w3-bar-item w3-button w3-hide-small" href="../server/buscador/test.php" target="_blank">
      test
   </a>
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
