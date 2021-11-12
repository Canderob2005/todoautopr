<?php
// header('Content-Type: application/json; charset=utf-8');
//  Se incluye en el componente  para los detalles del anuncio
//  NOTA: Necesita documentación  para reutilizar estructura de manera sencilla
//  Aunque ese espera realizar esta funcionalidad con la estructura el JOIN
$GLOBALS['conexion'] = "../conn/conn.php";
// $GLOBALS['conexion'] = "../../conn/conn.php";
function busca_anuncio($idanuncio = "")
{
   // $idmarca  = 1;
   // $idmodelo = 11;
   // header('Content-Type: application/json; charset=utf-8');

   // $idanuncio = $_POST['idanuncio'];
   // $idanuncio = 85;
   // $idanuncio =
   //    json_decode($_GET['idanuncio']);
   // $idmodelo =
   //    json_decode($_GET['idmodelo']);

   include $GLOBALS['conexion'];
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // $conn->exec('SET CHARACTER SET UTF8');
      $conn->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");

      $sql    = "SELECT * FROM anuncio  WHERE anuncio.idanuncio={$idanuncio}";
      $stmt   = $conn->query($sql);
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

      for ($i = 0; $i < count($result); $i++) {

         $result[$i] += ["nombre_categoria" => nombre_categoria($result[$i]["idcategoria"])];
         $result[$i] += ["nombre_marca" => nombre_marca($result[$i]["idmarca"])];
         $result[$i] += ["nombre_modelo" => nombre_modelo($result[$i]["idmodelo"])];
         $result[$i] += ["nombre_clasificacion" => nombre_clasificacion($result[$i]["idclasificacion"])];
         $result[$i] += ["nombre_condicion" => nombre_condicion($result[$i]["idcondicion"])];
         $result[$i] += ["nombre_transmision" => nombre_transmision($result[$i]["idtransmission"])];
         $result[$i] += ["nombre_pueblo" => nombre_pueblo($result[$i]["idpueblo"])];
         // $result[$i] = buscaImagenes_anuncio($result[$i], $result[$i]["idanuncio"]);
         array_push($result[$i], buscaImagenes_anuncio($result[$i]["idanuncio"]));

      }
      // echo json_encode($result);
      // return json_encode($result);
      return $result;

   } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
   }
   $conn = null;

}

function buscaImagenes_anuncio($id)
{

   include $GLOBALS['conexion'];
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // $conn->exec('SET CHARACTER SET UTF8');
      $conn->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");

      $sql  = "SELECT * FROM imagenes WHERE idanuncio={$id}";
      $stmt = $conn->query($sql);
      // $stmt->execute();

      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      // $registro += ["descripcion_imagen" => $result[0]["descripcion_imagen"]];
      // $registro += ["nombre_directorio" => $result[0]["nombre_directorio"]];
      // $registro += ["ruta_imagen" => $result[0]["ruta_imagen"]];

      return $result;

      // descripcion_imagen
      // idanuncio
      // idimagen
      // nombre_directorio
      // numero_imagen
      // ruta_imagen

   } catch (PDOException $e) {
      // NOTA
      // Retorna falso , sin embargo no esta controlada
      // la acción y retorna falso, sera error grave
      // return false;
      echo "Error: " . $e->getMessage();
   }
   $conn = null;
}

function nombre_pueblo($idpueblo)
{
   include $GLOBALS['conexion'];
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // $conn->exec('SET CHARACTER SET UTF8');
      $conn->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");

      $sql    = "SELECT nombre as nombre_pueblo FROM pueblo  WHERE idpueblo={$idpueblo}";
      $stmt   = $conn->query($sql);
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      // echo "<br/>";
      // echo "<br/>";
      // var_dump($result);

      return $result["nombre_pueblo"];
      // echo json_encode($result);

   } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
   }

   $conn = null;
}

function nombre_transmision($idtransmission)
{
   include $GLOBALS['conexion'];
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $conn->exec('SET CHARACTER SET UTF8');
      // $conn->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");

      $sql    = "SELECT nombre as nombre_trasmission FROM transmission  WHERE idtransmission={$idtransmission}";
      $stmt   = $conn->query($sql);
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      // echo "<br/>";
      // echo "<br/>";
      // var_dump($result);

      // return $result;
      return $result["nombre_trasmission"];
      // echo json_encode($result);

   } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
   }

   $conn = null;
}
function nombre_condicion($idcondicion)
{
   include $GLOBALS['conexion'];
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // $conn->exec('SET CHARACTER SET UTF8');
      $conn->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");

      $sql    = "SELECT nombre as nombre_condicion FROM condicion  WHERE idcondicion={$idcondicion}";
      $stmt   = $conn->query($sql);
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      // echo "<br/>";
      // echo "<br/>";
      // var_dump($result);

      // return $result;
      return $result["nombre_condicion"];
      // echo json_encode($result);

   } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
   }

   $conn = null;
}

function nombre_clasificacion($idclasificacion)
{
   include $GLOBALS['conexion'];
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // $conn->exec('SET CHARACTER SET UTF8');
      $conn->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");

      $sql    = "SELECT nombre as nombre_clasificacion FROM clasificacion  WHERE idclasificacion={$idclasificacion}";
      $stmt   = $conn->query($sql);
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      // echo "<br/>";
      // echo "<br/>";
      // var_dump($result);

      // return $result;
      return $result["nombre_clasificacion"];
      // echo json_encode($result);

   } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
   }

   $conn = null;
}
function nombre_modelo($idmodelo)
{
   include $GLOBALS['conexion'];
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // $conn->exec('SET CHARACTER SET UTF8');
      $conn->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");

      $sql    = "SELECT nombre as nombre_modelo FROM modelo  WHERE idmodelo={$idmodelo}";
      $stmt   = $conn->query($sql);
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      // echo "<br/>";
      // echo "<br/>";
      // var_dump($result);

      // return $result;
      return $result["nombre_modelo"];
      // echo json_encode($result);

   } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
   }

   $conn = null;
}

function nombre_categoria($idcategoria)
{

   include $GLOBALS['conexion'];
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // $conn->exec('SET CHARACTER SET UTF8');
      $conn->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");

      $sql    = "SELECT nombre as nombre_categoria FROM categoria  WHERE idcategoria={$idcategoria}";
      $stmt   = $conn->query($sql);
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      // echo "<br/>";
      // echo "<br/>";
      // var_dump($result);

      return $result["nombre_categoria"];
      // echo json_encode($result);

   } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
   }

   $conn = null;
}

function nombre_marca($idmarca)
{
   include $GLOBALS['conexion'];
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // $conn->exec('SET CHARACTER SET UTF8');
      $conn->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");

      $sql    = "SELECT nombre as nombre_marca FROM marca  WHERE idmarca={$idmarca}";
      $stmt   = $conn->query($sql);
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      // echo "<br/>";
      // echo "<br/>";
      // var_dump($result);

      // return $result;
      return $result["nombre_marca"];
      // echo json_encode($result);

   } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
   }

   $conn = null;
}

$datos = busca_anuncio($_GET['idanuncio']);
// $datos = busca_anuncio(95);
//  Variables se usan dentro de una estructura HML ubicada en los componentes
// htdocs/comp/detalles_enuncio/detalles.php
$nombre =
   $datos[0]["nombre"];

$telefono =
   $datos[0]["telefono"];

$email =
   $datos[0]["email"];

$nombre_marca =
   $datos[0]["nombre_marca"];

$nombre_modelo =
   $datos[0]["nombre_modelo"];

$nombre_clasificacion =
   $datos[0]["nombre_clasificacion"];

$nombre_condicion =
   $datos[0]["nombre_condicion"];

$nombre_transmision =
   $datos[0]["nombre_transmision"];

$nombre_pueblo =
   $datos[0]["nombre_pueblo"];

$licencia =
   $datos[0]["licencia"];

$multas =
   $datos[0]["multas"];

$year =
   $datos[0]["year"];

$descripcion =
   $datos[0]["descripcion"];

$full_lablel =
   $datos[0]["full_lablel"];

$precio =
   $datos[0]["precio"];

$mejoroferta =
   $datos[0]["mejoroferta"];

$millaje =
   $datos[0]["millage"];

if ($mejoroferta == "si") {
   $mejoroferta = "Se aceptan ofertas al precio";
} else {
   $mejoroferta = "Precio fijo";
}

// ========================================================
// NOTA:
// Se necesita controlar cunado son dos imágenes solamente.
// no ha dado error  pero debe controlarse todo tipo de error
// en esto ya sea rellenar imagen por defecto eliminado el
// elemento o de alguna forma debe controlarse.
// ========================================================
$imagen1 =
   "{$datos[0][0][0]['nombre_directorio']}" .
   "/{$datos[0][0][0]['ruta_imagen']}";
$imagen2 =
   "{$datos[0][0][1]['nombre_directorio']}" .
   "/{$datos[0][0][1]['ruta_imagen']}";
$imagen3 =
   "{$datos[0][0][2]['nombre_directorio']}" .
   "/{$datos[0][0][2]['ruta_imagen']}";
$imagen4 =
   "{$datos[0][0][3]['nombre_directorio']}" .
   "/{$datos[0][0][3]['ruta_imagen']}";
//  crear funcion  y kkarla en el htnml
$descripcion_imagen1 =
   "{$datos[0][0][0]['descripcion_imagen']}";
$descripcion_imagen2 =
   "{$datos[0][0][1]['descripcion_imagen']}";
$descripcion_imagen3 =
   "{$datos[0][0][2]['descripcion_imagen']}";
$descripcion_imagen4 =
   "{$datos[0][0][3]['descripcion_imagen']}";
