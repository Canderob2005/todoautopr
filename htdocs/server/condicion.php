<?php
//  Muestra todas las opciones para el select condición
select_condicion();
function select_condicion()
{

   include "../server/conn.php";
   try {
      $conn =
      new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(
         PDO::ATTR_ERRMODE,
         PDO::ERRMODE_EXCEPTION);

      $stmt = $conn->prepare(
         "SELECT * FROM condicion
            ORDER BY nombre ASC"
      );
      $stmt->execute();

      while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
         $id = $data['idcondicion'];
         echo "<option value=" . '"' . $id . '"' . ">";
         echo $data['nombre'];
         echo '</option>';

      }

      // while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
      //    $id     = $data['idcondicion'];
      //    $nombre = $data['nombre'];
      //    echo "<option value=" . '"' . $nombre . '"' . ">";
      //    echo $nombre;
      //    echo '</option>';

      // }
   } catch (PDOException $e) {

      //  NOTA se debe trabajar el error en caso de que ocurra.
   }
   $conn = null;
}
