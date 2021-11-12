<?php
select_tranmission();
function select_tranmission()
{
   include "../server/conn.php";
   try {
      $conn =
      new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(
         PDO::ATTR_ERRMODE,
         PDO::ERRMODE_EXCEPTION);
      $conn->exec('SET CHARACTER SET UTF8');
      $stmt = $conn->prepare(
         "SELECT * FROM transmission
            ORDER BY nombre ASC"
      );
      $stmt->execute();

      // $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

      while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
         $id = $data['idtransmission'];
         echo "<option value=" . '"' . $id . '"' . ">";
         echo $data['nombre'];
         echo '</option>';

      }

      // while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
      //    $id     = $data['idtransmission'];
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
