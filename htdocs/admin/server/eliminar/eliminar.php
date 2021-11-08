 <?php
// $GLOBALS['conexion'] = "../../../../conn/conn.php";
// /home/code/Escritorio/Proyecto/todoautopr_/htdocs/conn/conn.php
// /home/code/Escritorio/Proyecto/todoautopr_/htdocs/view/admin/server/eliminar/eliminar.php

$id = $_POST['idanuncio'];

function eliminar($id = '')
{
   include "../../../../conn/conn.php";
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql1 = $conn->prepare("DELETE FROM anuncio WHERE idanuncio={$id}");

      $sql2 = $conn->prepare("DELETE FROM imagenes WHERE idanuncio={$id}");

      $sql1->execute();
      $count_anuncio = $sql1->rowCount();
      $sql1->closeCursor();
      $sql2->execute();
      $count_imagenes = $sql2->rowCount();

      // echo $count_anuncio;
      // echo "<br/>";
      // echo $count_imagenes;

      if ($count_anuncio == 1 && $count_imagenes == 1) {

         echo "Eliminado conexito";

      } else {

         echo "No se elimino ningun registro";
      }

      // /////////////////////////////////////////////
   } catch (PDOException $e) {
      // echo $sql . "<br>" . $e->getMessage();
   }

   $conn = null;
}

// //////////////
eliminar($id);
// //////////////