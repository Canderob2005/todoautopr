<?php
anuncio();
function anuncio()
{

   // var_dump($_POST);
   // echo "\n";
   // var_dump($_FILES);

   if (
      (isset($_POST['nombre']) && $_POST['nombre'] != "") &&
      (isset($_POST['pagado']) && $_POST['pagado'] != "") &&
      (isset($_POST['pueblo']) && $_POST['pueblo'] != "") &&
      (isset($_POST['year']) && $_POST['year'] != "") &&
      (isset($_POST['telefono']) && $_POST['telefono'] != "") &&
      (isset($_POST['correo']) && $_POST['correo'] != "") &&
      (isset($_POST['categoria']) && $_POST['categoria'] != "") &&
      (isset($_POST['marca']) && $_POST['marca'] != "") &&
      (isset($_POST['modelo']) && $_POST['modelo'] != "") &&
      (isset($_POST['clasificacion']) && $_POST['clasificacion'] != "") &&
      (isset($_POST['condicion']) && $_POST['condicion'] != "") &&
      (isset($_POST['transmision']) && $_POST['transmision'] != "") &&
      (isset($_POST['licencia']) && $_POST['licencia'] != "") &&
      (isset($_POST['full_lablel']) && $_POST['full_lablel'] != "") &&
      (isset($_POST['multas']) && $_POST['multas'] != "") &&
      (isset($_POST['millaje']) && $_POST['millaje'] != "") &&
      (isset($_POST['precio']) && $_POST['precio'] != "") &&
      (isset($_POST['statusprecio']) && $_POST['statusprecio'] != "") &&
      (isset($_POST['descripcion']) && $_POST['descripcion'] != "")
   ) {

      $nombre = "'" . $_POST['nombre'] . "'";
      $pagado = "'" . $_POST['pagado'] . "'";
      // $direccion       = "'" . $_POST['direccion'] . "'";
      $idpueblo      = "'" . $_POST['pueblo'] . "'";
      $year          = $_POST['year'];
      $telefono      = $_POST['telefono'];
      $correo        = "'" . $_POST['correo'] . "'";
      $categoria     = "'" . $_POST['categoria'] . "'";
      $marca         = "'" . $_POST['marca'] . "'";
      $modelo        = "'" . $_POST['modelo'] . "'";
      $clasificacion = "'" . $_POST['clasificacion'] . "'";
      $condicion     = "'" . $_POST['condicion'] . "'";
      $transmission  = "'" . $_POST['transmision'] . "'";
      $licencia      = "'" . $_POST['licencia'] . "'";
      $full_lablel   = "'" . $_POST['full_lablel'] . "'";
      $multas        = "'" . $_POST['multas'] . "'";
      $millaje       = intval($_POST['millaje']);
      $precio        = bcadd($_POST['precio'], 0);
      // $precio_final    = "'" . $_POST['precio_final'] . "'";
      $precio_final = "'" . $_POST['statusprecio'] . "'";
      $descripcion  = "'" . $_POST['descripcion'] . "'";

      // $imagen1 = "";
      // $imagen2 = "";
      // $imagen3 = "";
      // $imagen4 = "";

      try {
         include '../conn/conn.php';
         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
         // set the PDO error mode to exception
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

         $sql =
            "INSERT INTO `anuncio`(`nombre`, `pagado`, `telefono`, `email`, `categoria`, `marca`, `modelo`, `year`, `clasificacion`, `condicion`, `transmission`, `licencia`, `multas`, `millage`, `descripcion`, `full_lablel`, `idpueblo`, `precio`, `mejoroferta`)
            VALUES
            ($nombre, $pagado,  $telefono, $correo, $categoria, $marca, $modelo, $year, $clasificacion, $condicion, $transmission, $licencia, $multas, $millaje, $descripcion, $full_lablel, $idpueblo, $precio, $precio_final);";

         // use exec() because no results are returned
         $conn->exec($sql);

         $idanuncio = $conn->lastInsertId();
         echo "\n";

         var_dump($_POST);
         echo "\n";
         var_dump($_FILES);

         $respuesta =
         array(
            "idanuncio" => $idanuncio,
            "pagado"    => $_POST['pagado'],
         );

         // return $respuesta;
         echo "ok";
         echo "\n";
         // echo $respuesta;
         var_dump($respuesta);
      } catch (PDOException $e) {
         echo "Error: " . $e->getMessage();
         // return false;
         echo "coneccion";
      }

   } else {

      // return false;
      echo "variables";
   }

   $conn = null;
}
