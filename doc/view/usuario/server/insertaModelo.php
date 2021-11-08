<?php
include 'conn.php';

if (isset($_POST["fun"]) && $_POST['fun'] == "insertaModelo") {

   // $marca  = $_POST["marca"];
   // $modelo = $_POST["modelo"];
   // echo " La marca es : {$marca} y el modelo es : {$modelo}";

   insertaModelo();

}

function insertaModelo()
{
   include '../conn/conn.php';
   try {
      $conn =
      new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(
         PDO::ATTR_ERRMODE,
         PDO::ERRMODE_EXCEPTION);
      $idmarca = intval($_POST["marca"]);
      $modelo  = $_POST["modelo"];

      $sql = "INSERT INTO modelo (idmarca, nombre)
                VALUES (:idmarca, :modelo)";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(":idmarca", $idmarca, PDO::PARAM_INT);
      $stmt->bindParam(":modelo", $modelo, PDO::PARAM_STR);

      if ($stmt->execute()) {

         if ($resultado = $stmt->fetchColumn() > 0) {

            echo "no";

         } else {

            $stmt->execute();

            $idmarca = $stmt->fetch(PDO::FETCH_ASSOC);

            echo "si";
         }
      } else {

         echo "nada";
      }

   } catch (PDOException $e) {

      echo "Error: " . $e->getMessage();
   }
   $conn = null;
}
