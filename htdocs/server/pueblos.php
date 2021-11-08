<?php
select_pueblos();
function select_pueblos()
{
   include "./conn/conn.php";
   try {
      $conn =
      new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(
         PDO::ATTR_ERRMODE,
         PDO::ERRMODE_EXCEPTION);
      $conn->exec('SET CHARACTER SET UTF8');
      $stmt = $conn->prepare(
         "SELECT * FROM pueblo ORDER BY nombre ASC"
      );
      $stmt->execute();

      // $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

      while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
         $id = $data['idpueblo'];
         echo "<option value=" . '"' . $id . '"' . ">";
         echo $data['nombre'];
         echo '</option>';

      }

      // while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
      //    $id     = $data['idpueblo'];
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
