<?php

function getPueblo($id_serv = '')
{
   include "conn.php";
   try {
      $conn =
      new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(
         PDO::ATTR_ERRMODE,
         PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare(
         "SELECT DISTINCT pueblo
          FROM clientes Where id_serv='{$id_serv}' ORDER BY pueblo ASC;"
      );

      $stmt->execute();

      $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
      echo json_encode($data);

   } catch (PDOException $e) {

      //  NOTA se debe trabajar el error en caso de que ocurra.
   }
   $conn = null;
}

getPueblo($_POST['id_serv']);
