<?php
$GLOBALS['conexion'] = "../../../conn/conn.php";
// /home/code/Escritorio/Proyecto/todoautopr/htdocs/view/admin/server/marcas_modelos/get_marcas.php
function select_marcas()
{

   include $GLOBALS['conexion'];

   try {
      $conn =
      new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(
         PDO::ATTR_ERRMODE,
         PDO::ERRMODE_EXCEPTION);

      $stmt = $conn->prepare(
         "SELECT * FROM marca
            ORDER BY nombre ASC"
      );
      $stmt->execute();

      $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $data;

   } catch (PDOException $e) {

      // echo "Error: " . $e->getMessage();
   }
   $conn = null;
}
