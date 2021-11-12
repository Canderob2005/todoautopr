<?php
//  Eliminara anuncio y datos al resivir el id
$idanuncio = $_POST['idanuncio'];
// $idanuncio = 48;
// delTree("../img/48");
// elimina_imagenes_anuncio($idanuncio);
try {
   include 'conn.php';
   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "DELETE FROM anuncio WHERE idanuncio=$idanuncio";
   elimina_imagenes_anuncio($idanuncio);
   // use exec() because no results are returned
   $conn->exec($sql);

} catch (PDOException $e) {
   echo "Error: " . $e->getMessage();
}

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
function elimina_imagenes_anuncio($idanuncio)
{

   // echo "<br/>";
   // echo $idanuncio;
   // echo "<br/>";
   // w3-quarter
   try {
      include "../conn/conn.php";
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("SELECT * FROM imagenes WHERE idanuncio = $idanuncio");
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

// elimina_imagenes_anuncio();
