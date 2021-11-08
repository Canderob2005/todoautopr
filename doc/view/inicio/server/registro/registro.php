 <?php

function verificaUsuario($nombre_usuario)
{
   include "../conn.php";
   try {

      $conn = new PDO(
         "mysql:host=$servername;dbname=$dbname",
         $username,
         $password
      );

      $conn->setAttribute(PDO::ATTR_ERRMODE,
         PDO::ERRMODE_EXCEPTION);

      $sql = $conn->prepare(
         "SELECT *
         FROM usuario
         WHERE nombre_usuario=
         :nombre_usuario");

      $sql->bindParam(':nombre_usuario', $nombre_usuario);

      $sql->execute();

      $cantidad = $sql->rowCount();

      if ($cantidad == 0) {

         return true;

      } elseif ($cantidad == 1) {

         return false;

      } else {

         //  error grave
      }

   } catch (PDOException $e) {

      echo $e->getMessage();
   }

   $conn = null;
}

function verificaEmail($email)
{
   include "../conn.php";
   try {

      $conn = new PDO("mysql:host=$servername;dbname=$dbname",
         $username,
         $password
      );

      $conn->setAttribute(PDO::ATTR_ERRMODE,
         PDO::ERRMODE_EXCEPTION);

      $sql = $conn->prepare(
         "SELECT *
         FROM usuario
         WHERE email=
         :email");

      $sql->bindParam(':email', $email,
         PDO::PARAM_STR);

      $sql->execute();

      $cantidad = $sql->rowCount();

      if ($cantidad == 0) {

         return true;

      } elseif ($cantidad == 1) {

         return false;

      } else {

         //  error grave
      }

   } catch (PDOException $e) {

      echo $sql . "<br>" . $e->getMessage();
   }

   $conn = null;
}
// Implementar hash de token
// https://stackoverflow.com/questions/18910814/best-practice-to-generate-random-token-for-forgot-password
function altaUsuario($nombre, $nombre_usuario, $email, $pass, $token)
{

   include "../conn.php";
   $user_pass = password_hash($pass, PASSWORD_DEFAULT);
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $conn->prepare(
         "INSERT INTO usuario (nombre,nombre_usuario,email,pass,token)
         VALUES (:nombre,:nombre_usuario, :email,:pass,:token)");

      $sql->bindParam(':nombre', $nombre,
         PDO::PARAM_STR);
      $sql->bindParam(':nombre_usuario', $nombre_usuario,
         PDO::PARAM_STR);
      $sql->bindParam(':email', $email,
         PDO::PARAM_STR);
      $sql->bindParam(':pass', $user_pass,
         PDO::PARAM_STR);
      $sql->bindParam(':token', $token,
         PDO::PARAM_STR);

      $sql->execute();

      $cantidad = $sql->rowCount();

      if ($cantidad == 0) {

         return false;

      } elseif ($cantidad == 1) {

         return true;

      } else {

         //  error grave
      }

   } catch (PDOException $e) {
      echo $e->getMessage();
   }

   $conn = null;

}

function getIdusuario($nombre_usuario)
{
   include "../conn.php";
   // $user_pass = password_hash($pass, PASSWORD_DEFAULT);
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $conn->prepare(
         "SELECT idusuario from usuario WHERE nombre_usuario=:nombre_usuario LIMIT 1");

      $sql->bindParam(':nombre_usuario', $nombre_usuario,
         PDO::PARAM_STR);
      $sql->execute();
      $result = $sql->fetch(PDO::FETCH_ASSOC);
      return $result["idusuario"];
   } catch (PDOException $e) {
      echo $e->getMessage();
   }

   $conn = null;
}

function gestionRegistro($nombre, $nombre_usuario, $email, $pass, $token)
{

   if (verificaUsuario($nombre_usuario) &&
      verificaEmail($email)) {

      if (altaUsuario($nombre, $nombre_usuario, $email, $pass, $token)) {

         // echo "Record insertado";

         $id           = getIdusuario($nombre_usuario);
         $localhost    = "http://localhost/Proyecto/TODOAUTOPR/todoautopr_/htdocs";
         $domain       = "http://clasificadostodoautoflorida.com/";
         $destinatario = "caleman9791@gmail.com";
         $url          = "<a href='{$localhost}/activar.php?id={$id}&val={$token}' target='_blank'> Activar </a>";

         include "server/eviar_correo.php";
         // if (envia_Correo($destinatario, $asunto, $mensaje)) {
         //    echo "se ha enviado coreo de confirmacion a : {$email}";
         // }

         echo $url;

      } else {

         echo "Error";
      }

   } else {

      echo "Usuario o email existen";
   }

}

if ((isset($_POST['nombre'])) &&
   (isset($_POST['nombre_usuario'])) &&
   (isset($_POST['email'])) &&
   (isset($_POST['password']))) {

   $nombre         = $_POST['nombre'];
   $nombre_usuario = $_POST['nombre_usuario'];
   $email          = $_POST['email'];
   $pass           = $_POST['password'];

   // gestionRegistro($nombre, $nombre_usuario, $email, $pass);

   $length = 78;
   $token  = bin2hex(random_bytes($length));
   gestionRegistro($nombre, $nombre_usuario, $email, $pass, $token);
} else {

   header("location: ../../../index.php");
}

//     idusuario    nombre    apellido    nombre_usuario    email    pass    telefono    id_rol_usuaro
