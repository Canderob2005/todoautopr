 <?php

function get_cantidades()
{
   include "../../../../conn/conn.php";
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "SELECT  (
            SELECT COUNT(*) FROM anuncio) AS anuncio_cantidad,
               (SELECT COUNT(*) FROM marca) AS marca_cantidad,
               (SELECT COUNT(*) FROM modelo) AS modelo_cantidad";
      $res   = $conn->query($sql);
      $count = $res->fetch(PDO::FETCH_ASSOC);

      echo json_encode($count);

   } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
   }
   $conn = null;
}
get_cantidades();