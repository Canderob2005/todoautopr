<?php

function select_marcas()
{

   include "../../conn/conn.php";

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

      $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $data;

   } catch (PDOException $e) {

      // echo "Error: " . $e->getMessage();
   }
   $conn = null;
}
