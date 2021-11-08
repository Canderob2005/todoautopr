<?php
select_marcas();
function select_marcas()
{

   include "./conn/conn.php";
   try {
      $conn =
      new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(
         PDO::ATTR_ERRMODE,
         PDO::ERRMODE_EXCEPTION);

      $stmt = $conn->prepare(
         "SELECT * FROM marca
            ORDER BY nombre ASC"
      );
      $stmt->execute();

      // $result = $stmt->fetch(PDO::FETCH_ASSOC);

      while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
         $id = $data['idmarca'];
         echo "<option value=" . '"' . $id . '"' . ">";
         echo $data['nombre'];
         echo '</option>';

      }

      // while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
      //    $id     = $data['idmarca'];
      //    $nombre = $data['nombre'];
      //    echo "<option value=" . '"' . $nombre . '"' . ">";
      //    echo $nombre;
      //    echo '</option>';

      // }

      // echo json_encode($result);

   } catch (PDOException $e) {

      // echo "Error: " . $e->getMessage();
   }
   $conn = null;
}
