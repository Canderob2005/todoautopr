<?php

//  Genera los valores del select para las categorías
select_categoria();
function select_categoria()
{

   include "../server/conn.php";
   try {
      $conn =
      new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(
         PDO::ATTR_ERRMODE,
         PDO::ERRMODE_EXCEPTION);

      $stmt = $conn->prepare(
         "SELECT * FROM categoria
            ORDER BY nombre ASC"
      );

      $stmt->execute();

      while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
         $id = $data['idcategoria'];
         echo "<option value=" . '"' . $id . '"' . ">";
         echo $data['nombre'];
         echo '</option>';

      }

      // while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
      //    $id     = $data['idcategoria'];
      //    $nombre = $data['nombre'];
      //    echo "<option value=" . '"' . $nombre . '"' . ">";
      //    echo $nombre;
      //    echo '</option>';

      // }

   } catch (PDOException $e) {

      //  NOTA se debe trabajar el error en caso de que ocurra.
   }
   $conn = null;
}

// try {
//    $conn =
//    new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//    $conn->setAttribute(
//       PDO::ATTR_ERRMODE,
//       PDO::ERRMODE_EXCEPTION);

//    $stmt = $conn->prepare(
//       "SELECT * FROM categoria
//             ORDER BY nombre ASC"
//    );

//    $stmt->execute();

//    while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
//       $id = $data['idcategoria'];
//       echo "<option value=" . '"' . $id . '"' . ">";
//       echo $data['nombre'];
//       echo '</option>';

//    }

// } catch (PDOException $e) {

//    //  NOTA se debe trabajar el error en caso de que ocurra.
// }
// $conn = null;
