<?php

function getProveedores($id_serv = '', $pueblo = '')
{
   include "./php/conn.php";
   try {
      $conn =
      new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(
         PDO::ATTR_ERRMODE,
         PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare(
         "SELECT *
          FROM clientes Where id_serv='{$id_serv}' AND pueblo='{$pueblo}' ORDER BY pueblo ASC;"
      );

      $stmt->execute();

      $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
      // echo json_encode($data);

      for ($i = 0; $i < count($data); $i++) {
         // echo "<br/>";
         // echo $data[$i]["nombreCliente"];
         echo "<br/>";
         echo $data[$i]["nombreNegocio"];
         echo "<br/>";
         echo $data[$i]["pueblo"];
         echo "<br/>";

         echo $data[$i]["id_serv"];
         echo "<br/>";
         echo "=========================";
      }

   } catch (PDOException $e) {

      //  NOTA se debe trabajar el error en caso de que ocurra.
   }
   $conn = null;
}

if (isset($_POST['id_serv']) && isset($_POST['pueblo'])) {
   getProveedores($_POST['id_serv'], $_POST['pueblo']);
}

// nombreNegocio
// pueblo
// id_serv
