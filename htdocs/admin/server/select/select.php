<?php
function genera_select($p_id, $p_nombre_id, $p_tabla)
{
   include "../conn/conn.php";

   try {
      $conn =
      new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(
         PDO::ATTR_ERRMODE,
         PDO::ERRMODE_EXCEPTION);

      $stmt = $conn->prepare(
         "SELECT * FROM $p_tabla"
      );

      $stmt->execute();

      while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
         $id = $data[$p_nombre_id];

         if ($id == $p_id) {
            echo "<option value=" . '"' . $id . '"' . " selected>";
            echo $data['nombre'];
            echo '</option>';
         } else {
            echo "<option value=" . '"' . $id . '"' . ">";
            echo $data['nombre'];
            echo '</option>';
         }

      }

   } catch (PDOException $e) {

      //  NOTA se debe trabajar el error en caso de que ocurra.
   }
   $conn = null;
}
