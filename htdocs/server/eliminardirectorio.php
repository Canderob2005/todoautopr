<?php

// rmdir('../img/35');
// rmdir('../img/36');

// =================================
function delTree($dir)
{

   if (is_dir($dir)) {

      $files = array_diff(scandir($dir), array('.', '..'));

      foreach ($files as $file) {
         (is_dir("$dir/$file")) ? delTree("$dir/$file") : unlink("$dir/$file");
      }
      return rmdir($dir);

   } else {

      return false;
   }

}
// =================================

function busca_imagenes_anuncio()
{

   // echo "<br/>";
   // echo $idanuncio;
   // echo "<br/>";
   // w3-quarter
   try {
      include "../conn/conn.php";
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("SELECT * FROM imagenes GROUP BY nombre_directorio");
      $stmt->execute();

      // set the resulting array to associative
      // $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

      // $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
      // // $resultado = $stmt->fetchAll();
      // var_dump($resultado);
      while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
         $dir = $data['nombre_directorio'];
         echo $data['nombre_directorio'];
         echo "<br/>";
         delTree($dir);

      }
   } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
   }
}

// busca_imagenes_anuncio();
// $resultado = delTree("../img/59");
// $resultado = delTree("../img/43");
// $resultado = delTree("../img/44");
// $resultado = delTree("../img/45");
// $resultado = delTree("../img/46");
// $resultado = delTree("../img/47");
