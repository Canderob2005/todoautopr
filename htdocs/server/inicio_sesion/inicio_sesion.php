<?php

function InicioSesion($user, $pass)
{
   include "../../conn/conn.php";
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare(
         "SELECT * FROM usuario
      	WHERE nombre_usuario='{$user}'
        AND activacion =1");
      $stmt->execute();

      if ($stmt->rowCount() == 1) {

         $result = $stmt->fetch(PDO::FETCH_ASSOC);
         if (password_verify($pass, $result['pass'])) {

            $cookie_name  = "user";
            $cookie_value = "{$user}";
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

            header("Location: ../cooke/cooke.php");

         } else {

            echo 'La contraseña no es válida.';
         }

      }

   } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
   }

   $conn = null;

}

$user = $_POST['usuario'];
$pass = $_POST['password'];
InicioSesion($user, $pass);
