<?php

if (isset($_GET["fun"]) && $_GET['fun'] == "getmodelo") {
   // $id     = $_GET["id"];
   // $result = array(
   //     "respuesta" => $id)
   // echo json_encode($result);
   $idmarca     = intval($_GET["id"]);
   $idcategoria = intval($_GET["idcategoria"]);
   damemodelos($idmarca, $idcategoria);

}

function damemodelos($idmarca, $idcategoria)
{
   include '../conn/conn.php';
   header('Content-Type: application/json; charset=utf-8');
   try {
      $conn =
      new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(
         PDO::ATTR_ERRMODE,
         PDO::ERRMODE_EXCEPTION);

      $stmt_modelo = $conn->prepare(
         "SELECT * FROM modelo WHERE idmarca = :idmarca AND idcategoria = :idcategoria");
      $stmt_modelo->bindParam(':idmarca', $idmarca);
      $stmt_modelo->bindParam(':idcategoria', $idcategoria);

      $stmt_modelo->execute();

      $result = $stmt_modelo->fetchAll(PDO::FETCH_ASSOC);

      echo json_encode($result);

   } catch (PDOException $e) {

      echo "Error: " . $e->getMessage();
   }
   $conn = null;

}
