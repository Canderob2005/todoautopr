<?php

if (isset($_GET["fun"]) && $_GET['fun'] == "getmarcas") {

   devuelveMarcas();

}
function devuelveMarcas()
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

      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

      echo json_encode($result);

   } catch (PDOException $e) {

      echo "Error: " . $e->getMessage();
   }
   $conn = null;

}
