<?php
include '../conn/conn.php';

if (isset($_POST["fun"]) && $_POST['fun'] == "marcaNoesiste") {

   marcaNoesiste($servername, $username, $password, $dbname);

}

function marcaNoesiste($servername, $username, $password, $dbname)
{
   try {
      $conn =
      new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(
         PDO::ATTR_ERRMODE,
         PDO::ERRMODE_EXCEPTION);
      $marca = $_POST["marca"];
      $sql   = "SELECT * FROM marca WHERE nombre = :nombre";
      // =================================================================

      // TRabajar con las consultas multiples

      $stmt = $conn->prepare($sql);
      $stmt->bindParam(":nombre", $marca, PDO::PARAM_STR);

      /* Create a second PDOStatement object */
      $sql2 = "INSERT INTO marca (nombre)
                VALUES (:nombre)";
      $stmt2 = $conn->prepare($sql2);
      $stmt2->bindParam(":nombre", $marca, PDO::PARAM_STR);

      if ($stmt->execute()) {

         if ($resultado = $stmt->fetchColumn() > 0) {

            $result = array(
               "respuesta" => "no",
            );
            echo json_encode($result);
         } else {

            $stmt2->execute();

            $idmarca = $stmt2->fetch(PDO::FETCH_ASSOC);

            $result = array(
               "respuesta" => "si",
               "idmarca"   => $idmarca['idmarca'],

            );
            echo json_encode($result);
         }
      } else {
         $result = array(
            "respuesta" => "nada",
         );
         echo json_encode($result);
      }

   } catch (PDOException $e) {

      echo "Error: " . $e->getMessage();
   }
   $conn = null;
}
