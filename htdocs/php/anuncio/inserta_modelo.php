<?php

// echo $_POST['fun'];
// echo $_POST['marca'];

// $result = array(
//    "respuesta" => "nada",
//    "fun"       => $_POST['fun'],
//    "marca"     => $_POST['marca'],
// );
// echo json_encode($result);
$nombre_modelo = trim($_POST['nombre_modelo']);
$id_marca      = trim($_POST['id_marca']);
$id_categoria  = trim($_POST['id_categoria']);

// $result = array(
//    "respuesta"     => "datos",
//    "nombre_modelo" => $nombre_modelo,
//    "id_marca"      => $id_marca,
//    "id_categoria"  => $id_categoria,

// );
// echo json_encode($result);

// InsertaModelo($nombre_modelo, $id_marca, $id_categoria);

if (marcaNoExiste($nombre_modelo)) {

   InsertaModelo($nombre_modelo, $id_marca, $id_categoria);

} else {

   $result = array(
      "respuesta" => "error",

   );
   echo json_encode($result);
}

// InsertaMarca();

function InsertaModelo($nombre_modelo, $id_marca, $id_categoria)
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
         "INSERT INTO modelo (nombre, idmarca, idcategoria)
            VALUES ('{$nombre_modelo}','{$id_marca}','{$id_categoria}')";
      //  Nota revisar prepare sentencia
      $conn->exec($sql);

      $result = array(
         "respuesta" => "exito",

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

function marcaNoExiste($modelo)
{

   include "../../conn/conn.php";
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare(
         "SELECT * From modelo WHERE nombre=:nombremodelo"
      );
      $stmt->bindParam(':nombremodelo', $modelo);
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
