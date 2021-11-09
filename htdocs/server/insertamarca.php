<?php

// Debería trabajarse con mas calma. La intención es consultar si existe la marca y no insertarla y de no existir insertarla y si hubo error no insertar, si se inserto notificar y si existe notificar. Se debe verificar que el javascript reciba las respuestas correctas y que las trabaje correctamente.
if (isset($_POST["fun"]) && $_POST['fun'] == "marcaNoesiste") {

   // echo "entro";
   marcaNoesiste();

} else {
   echo "no entro";
}

function marcaNoesiste()
{
   include '../conn/conn.php';
   try {
      $conn =
      new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(
         PDO::ATTR_ERRMODE,
         PDO::ERRMODE_EXCEPTION);

      $marca = $_POST["marca"];
      $sql   = "SELECT * FROM marca WHERE nombre = :nombre";
      // =================================================================

      // Trabajar con las consultas múltiples

      $stmt = $conn->prepare($sql);
      $stmt->bindParam(":nombre", $marca, PDO::PARAM_STR);

      $sql2 = "INSERT INTO marca (nombre) VALUES (:nombre)";

      $stmt2 = $conn->prepare($sql2);
      $stmt2->bindParam(":nombre", $marca, PDO::PARAM_STR);

      if ($stmt->execute()) {

         $count = $stmt->rowCount();

         if ($count > 0) {

            $result = array(
               "respuesta" => "no",
            );

            echo json_encode($result);

         } else {
            $stmt->closeCursor();
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
