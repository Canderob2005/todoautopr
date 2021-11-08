<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8"/>
      <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
      <title>
         Document
      </title>
   </head>
   <body>

      <?php

$respuesta = anuncio();

if ($respuesta == false) {

   $respuesta = array("respuesta" => "error");

   echo json_encode($respuesta);

} else {

   insertar_imagenes(
      $_FILES,
      $respuesta["idanuncio"],
      $respuesta["pagado"]);

}

function anuncio()
{

   if (
      (isset($_POST['nombre']) && $_POST['nombre'] != "") &&
      (isset($_POST['pagado']) && $_POST['pagado'] != "") &&
      (isset($_POST['idpueblo']) && $_POST['idpueblo'] != "") &&
      (isset($_POST['year']) && $_POST['year'] != "") &&
      (isset($_POST['telefono']) && $_POST['telefono'] != "") &&
      (isset($_POST['correo']) && $_POST['correo'] != "") &&
      (isset($_POST['idcategoria']) && $_POST['idcategoria'] != "") &&
      (isset($_POST['idmarca']) && $_POST['idmarca'] != "") &&
      (isset($_POST['idmodelo']) && $_POST['idmodelo'] != "") &&
      (isset($_POST['idclasificacion']) && $_POST['idclasificacion'] != "") &&
      (isset($_POST['idcondicion']) && $_POST['idcondicion'] != "") &&
      (isset($_POST['idtransmission']) && $_POST['idtransmission'] != "") &&
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
      $idpueblo        = intval($_POST['idpueblo']);
      $year            = intval($_POST['year']);
      $telefono        = $_POST['telefono'];
      $correo          = "'" . $_POST['correo'] . "'";
      $idcategoria     = intval($_POST['idcategoria']);
      $idmarca         = intval($_POST['idmarca']);
      $idmodelo        = intval($_POST['idmodelo']);
      $idclasificacion = intval($_POST['idclasificacion']);
      $idcondicion     = intval($_POST['idcondicion']);
      $idtransmission  = intval($_POST['idtransmission']);
      $licencia        = "'" . $_POST['licencia'] . "'";
      $full_lablel     = "'" . $_POST['full_lablel'] . "'";
      $multas          = "'" . $_POST['multas'] . "'";
      $millaje         = intval($_POST['millaje']);
      $precio          = bcadd($_POST['precio'], 0);
      // $precio_final    = "'" . $_POST['precio_final'] . "'";
      $precio_final = "'" . $_POST['statusprecio'] . "'";
      $descripcion  = "'" . $_POST['descripcion'] . "'";

      $imagen1 = "";
      $imagen2 = "";
      $imagen3 = "";
      $imagen4 = "";

      try {
         include '../../conn/conn.php';
         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
         // set the PDO error mode to exception
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

         $sql =
            "INSERT INTO anuncio
            (nombre,
            pagado,
            idpueblo,
            telefono,
            email,
            idcategoria,
            idmarca,
            idmodelo,
            idclasificacion,
            idcondicion,
            idtransmission,
            licencia,
            full_lablel,
            multas,
            millage,
            precio,
            mejoroferta,
            descripcion,
            year)
            VALUES
            ($nombre,
            $pagado,
            $idpueblo,
            $telefono,
            $correo,
            $idcategoria,
            $idmarca,
            $idmodelo,
            $idclasificacion,
            $idcondicion,
            $idtransmission,
            $licencia,
            $full_lablel,
            $multas,
            $millaje,
            $precio,
            $precio_final,
            $descripcion,
            $year);";

         $conn->exec($sql);

         $idanuncio = $conn->lastInsertId();

         $respuesta =
         array(
            "idanuncio" => $idanuncio,
            "pagado"    => $_POST['pagado'],
         );

         return $respuesta;

      } catch (PDOException $e) {

         return false;
      }

   } else {

      return false;
   }

   $conn = null;
}

function insertar_imagenes($imagenes, $idanuncio, $pagado)
{

   $descripcion_de_la_imagenes = genera_descripcion();

   $cantidad_imagenes = count($imagenes['imagenes']['name']);

   if ($descripcion_de_la_imagenes) {
      $ruta_directorio = crea_directorio($idanuncio);

      if ($ruta_directorio) {
         for ($i = 0; $i < $cantidad_imagenes; $i++) {

            $tmp_name      = $imagenes["imagenes"]["tmp_name"][$i];
            $name          = "";
            $numero_imagen = $i + 1;
            $name .= basename($imagenes["imagenes"]["name"][$i]);

            move_uploaded_file($tmp_name, "{$ruta_directorio}/{$name}");

            regustra_imagenes(
               $idanuncio,
               $name,
               $descripcion_de_la_imagenes,
               $ruta_directorio, $numero_imagen);

         }

         $respuesta = array("respuesta" => "exito");

         echo json_encode($respuesta);

      } else {

         $respuesta = array("respuesta" => "error");

         echo json_encode($respuesta);
      }

   } else {
      $respuesta = array("respuesta" => "error");

      echo json_encode($respuesta);
   }

}

function crea_directorio($idanuncio)
{
   $nombre_directorio = "../img/{$idanuncio}";

   if (!file_exists($nombre_directorio)) {

      if (!mkdir($nombre_directorio, 0777, true)) {

         return false;

      } else {

         return $nombre_directorio;
      }

   } else {

      return $nombre_directorio;
   }

}

// =====================================================================
//  Busca el nombre de la marca y el id de la marca y encuera los nombres
function genera_descripcion()
{

   if (isset($_POST['idmarca']) && $_POST['idmarca'] != "" &&
      isset($_POST['idmodelo']) && $_POST['idmodelo'] != "") {
      $idmarca  = intval($_POST['idmarca']);
      $idmodelo = intval($_POST['idmodelo']);

      try {

         include '../../conn/conn.php';
         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $stmt = $conn->prepare(
            "SELECT nombre  FROM marca WHERE idmarca=:idmarca");
         $stmt2 = $conn->prepare(
            "SELECT nombre  FROM modelo WHERE idmodelo=:idmodelo");

         $stmt->bindParam(":idmarca", $idmarca);
         $stmt2->bindParam(":idmodelo", $idmodelo);
         $stmt->execute();
         $result1 = $stmt->fetch(PDO::FETCH_ASSOC);
         $stmt->closeCursor();
         $stmt2->execute();
         $result2 = $stmt2->fetch(PDO::FETCH_ASSOC);
         return "{$result1["nombre"]} {$result2["nombre"]}";

      } catch (PDOException $e) {

         return false;

         // echo "Error: " . $e->getMessage();
      }
      $conn = null;

   } else {

      return false;
   }

}
// =====================================================================

// =====================================================================
function regustra_imagenes($idanuncio, $ruta_imagen, $descripcion_imagen, $nombre_directorio, $numero_imagen)
{

   try {
      include 'conn.php';

      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare(
         "INSERT INTO imagenes
            (idanuncio, ruta_imagen, descripcion_imagen, nombre_directorio,numero_imagen)
            VALUES
            (:idanuncio, :ruta_imagen, :descripcion_imagen, :nombre_directorio,:numero_imagen)");

      $stmt->bindParam(':idanuncio', $idanuncio);
      $stmt->bindParam(':ruta_imagen', $ruta_imagen);
      $stmt->bindParam(':descripcion_imagen', $descripcion_imagen);
      $stmt->bindParam(':nombre_directorio', $nombre_directorio);
      $stmt->bindParam(':numero_imagen', $numero_imagen);

      $idanuncio          = $idanuncio;
      $ruta_imagen        = $ruta_imagen;
      $descripcion_imagen = $descripcion_imagen;
      $nombre_directorio  = $nombre_directorio;
      $numero_imagen      = $numero_imagen;
      $stmt->execute();

   } catch (PDOException $e) {

   }

}; // =====================================================================

?>
   </body>
</html>