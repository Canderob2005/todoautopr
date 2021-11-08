<?php
include 'conn.php';
// echo $_POST['marca'];
insertaMarca();
function insertaMarca()
{
   if (isset($_POST["fun"]) && $_POST['fun'] == "insertaMarca") {
      // header("Content-Type: application/json");
      include '../conn/conn.php';
      try {
         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $marca = $_POST['marca'];
         // $modelo      = $_POST['modelo'];
         $stmt_existe = $conn->prepare("SELECT * FROM marca WHERE nombre = :nombre");
         $stmt_existe->bindParam(':nombre', $marca);
         $stmt_existe->execute();
         $result_stmt_existe = $stmt_existe->fetch(PDO::FETCH_ASSOC);

         if ($result_stmt_existe) {
            // $resultado = array(
            //    "respuesta" => "existe");
            echo "existe";
         } else {
            $stmt_existe->closeCursor();
            $stmt_marca = $conn->prepare("INSERT INTO marca (nombre) VALUES (:nombre)");
            // $stmt_select_marca = $conn->prepare("SELECT * FROM marca ORDER BY idmarca DESC LIMIT 1");
            // $stmt_modelo       = $conn->prepare("INSERT INTO modelo (nombre , idmarca) VALUES (:nombre , :idmarca)");

            $stmt_marca->bindParam(':nombre', $marca);
            // $stmt_modelo->bindParam(':nombre', $modelo);

            $stmt_marca->execute();
            $stmt_marca->closeCursor();

            // $stmt_select_marca->execute();
            // $result_stmt_select_marca = $stmt_select_marca->fetch(PDO::FETCH_ASSOC);
            // $idmarca                  = $result_stmt_select_marca['idmarca'];

            // $stmt_modelo->bindParam(':idmarca', $idmarca);
            // $stmt_select_marca->closeCursor();

            // $stmt_modelo->execute();
            // $resultado = array(
            //    "respuesta" => 'si',
            //    "id"        => $idmarca);

            echo "si";
         }

      } catch (PDOException $e) {
         // $resultado = array(
         //    "respuesta" => "error");
         // echo json_encode($resultado);
         // echo "Error: " . $e->getMessage();
      }
      $conn = null;

   }
}
