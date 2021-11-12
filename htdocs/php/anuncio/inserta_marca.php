<?php

// echo $_POST['fun'];
// echo $_POST['marca'];

// $result = array(
//    "respuesta" => "nada",
//    "fun"       => $_POST['fun'],
//    "marca"     => $_POST['marca'],
// );
// echo json_encode($result);
$nombreMarca = trim($_POST['marca']);

if (marcaNoExiste($nombreMarca)) {
   InsertaMarca($nombreMarca);
} else {

   $result = array(
      "respuesta" => "error",

   );
   echo json_encode($result);
}

// InsertaMarca();

function InsertaMarca($nombremarca)
{
   include "../../conn/conn.php";
   try {
      $conn = new PDO(
         "mysql:host=$servername;dbname=$dbname",
         $username,
         $password
      );

      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql =
         "INSERT INTO marca (nombre)
            VALUES ('{$nombremarca}')";

      $conn->exec($sql);
      $idmarca = $conn->lastInsertId();

      $result = array(
         "respuesta" => "exito",
         "id"        => $idmarca,

      );
      echo json_encode($result);

   } catch (PDOException $e) {

      $result = array(
         "respuesta" => "error",

      );
      echo json_encode($result);
   }

   $conn = null;
}

function marcaNoExiste($marca)
{

   include "../../conn/conn.php";
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare(
         "SELECT * From marca WHERE nombre=:nombremarca"
      );
      $stmt->bindParam(':nombremarca', $marca);
      $stmt->execute();

      $count = $stmt->rowCount();

      if ($count == 0) {

         return true;

      } else {

         return false;

      }

   } catch (PDOException $e) {

      return false;
   }

   $conn = null;
}
