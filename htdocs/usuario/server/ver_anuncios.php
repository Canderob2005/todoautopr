<?php
echo '<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>';
try {
   include 'conn.php';
   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $stmt = $conn->prepare("SELECT * FROM anuncio");
   $stmt->execute();

   // set the resulting array to associative
   // $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

   $resultado = $stmt->fetchAll();
   // print_r($resultado);
   echo "<br/>";
   echo "<br/>";

   // echo count($resultado);
   echo "<br/>";
   echo "<br/>";

   for ($i = 0; $i < count($resultado); $i++) {
      // echo $resultado[$i]['idanuncio'];
      // echo "<br/>";
      // echo "<br/>";
      genera_anuncio($resultado[$i]);
   }

} catch (PDOException $e) {
   echo "Error: " . $e->getMessage();
}

function genera_anuncio($anuncio)
{

   // echo "<br/>";
   // echo $anuncio["idanuncio"];
   // echo "<br/>";

   busca_imagenes_anuncio($anuncio["idanuncio"], $anuncio);

}

function busca_imagenes_anuncio($idanuncio, $anuncio)
{

   try {
      include 'conn.php';
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("SELECT * FROM imagenes  WHERE idanuncio ='$idanuncio'");
      $stmt->execute();

      // set the resulting array to associative
      // $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

      // for ($i = 0; $i < count($resultado); $i++) {
      //    // echo $i;
      //    $directorio    = $resultado[$i]['nombre_directorio'];
      //    $nombre_imagen = $resultado[$i]['ruta_imagen'];

      //    $ruta = "{$directorio}/{$nombre_imagen}";
      //    echo "<img src='$ruta' alt='Snow' style='width:150px'>";
      // }
      // for ($i = 0; $i < count($resultado); $i++) {
      // echo $i;
      // var_dump($resultado[0]['nombre_directorio']);
      $resultado = $stmt->fetchAll();
      if (array_key_exists(0, $resultado) == 1) {

         // print_r($resultado);
         echo '<div class="w3-row">';
         echo '<div class="w3-half">';
         echo '<div class="w3-row">';
         echo '<div class="w3-half">';
         $directorio    = $resultado[0]['nombre_directorio'];
         $nombre_imagen = $resultado[0]['ruta_imagen'];
         $ruta          = "{$directorio}/{$nombre_imagen}";
         echo "<img src='$ruta' alt='Snow' style='width:150px'>";
         echo '</div>';
         echo '<div class="w3-half">';
         echo "<p> {$anuncio['nombre']}</p>";
         echo "<p> {$anuncio['telefono']}</p>";
         echo "<p> {$anuncio['email']}</p>";
         echo "<p> {$anuncio['precio']}</p>";
         // echo "<p> {$anuncio['nombre']}</p>";
         // echo "<p> {$anuncio['telefono']}</p>";
         // echo "<p> {$anuncio['nombre']}</p>";
         // echo "<p> {$anuncio['telefono']}</p>";
         echo "<input type='submit'>";
         echo '</div>';
         echo '</div>';
         echo '</div>';

         echo '<div class="w3-half">';

         // echo "<p> {$anuncio['nombre']}</p>";
         // echo "<p> {$anuncio['nombre']}</p>";
         // echo "<p> {$anuncio['nombre']}</p>";

         echo '</div>';
      }

   } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
   }
}
