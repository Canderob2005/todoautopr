<?php

// echo "id = {$id} y val = {$val}";

function ActivaCuenta($id, $token)
{
   include "../../conn/conn.php";
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare(
         "SELECT * FROM usuario
         WHERE idusuario= {$id} and token= '{$token}'");
      $stmt->execute();
      $count = $stmt->rowCount();
      if ($count == 1) {
         Activacion($id);
      } else {
         echo "Su cuenta no se pudo activar";
      }
   } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
   }
   $conn = null;

}

function Activacion($id)
{
   include "../../conn/conn.php";
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = "UPDATE usuario SET activacion=1 WHERE  idusuario={$id}";

      // Prepare statement
      $stmt = $conn->prepare($sql);

      // execute the query
      $stmt->execute();

      if ($stmt->rowCount() == 1) {
         echo '<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>';
         echo "<h1>Cuenta activada</h1>";

         echo '<a class="w3-btn w3-black" href="../../inicio_index.php">Link Button</a>';
         // header("Location: ../inicio_index.php");
      } else {
         echo "Su cuenta ya se activo anteriormente";
      }
   } catch (PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
   }

   $conn = null;
}

$id  = $_GET['id'];
$val = $_GET['val'];

ActivaCuenta($id, $val);
