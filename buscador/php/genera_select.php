<?php

function genera_select($p_nombre)
{
   include "conn.php";

   try {
      $conn =
      new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(
         PDO::ATTR_ERRMODE,
         PDO::ERRMODE_EXCEPTION);

      $stmt = $conn->prepare(
         "SELECT DISTINCT $p_nombre FROM clientes ORDER BY $p_nombre ASC;"
      );

      $stmt->execute();

      while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {

         echo "<option value='{$data[$p_nombre]}'>";
         echo $data[$p_nombre];
         echo '</option>';

      }

   } catch (PDOException $e) {

      //  NOTA se debe trabajar el error en caso de que ocurra.
   }
   $conn = null;
}
