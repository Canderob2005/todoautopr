<?php

function get_anuncio($id = '')
{
   // include "../../conn/conn.php";
   include "../conn/conn.php";

   try {
      $conn =
      new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(
         PDO::ATTR_ERRMODE,
         PDO::ERRMODE_EXCEPTION);

      $stmt = $conn->prepare(
         "SELECT * FROM anuncio
           WHERE idanuncio=$id"
      );
      $stmt->execute();

      $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $data[0];

   } catch (PDOException $e) {

      // echo "Error: " . $e->getMessage();
   }
   $conn = null;
}

//  Nota: deve validarce el datro $_GET

$data = get_anuncio($_GET['idanuncio']);

$idanuncio       = $data['idanuncio'];
$nombre          = $data['nombre'];
$pagado          = $data['pagado'];
$direccion       = $data['direccion'];
$telefono        = $data['telefono'];
$email           = $data['email'];
$idcategoria     = $data['idcategoria'];
$idmarca         = $data['idmarca'];
$idmodelo        = $data['idmodelo'];
$year            = $data['year'];
$idclasificacion = $data['idclasificacion'];
$idcondicion     = $data['idcondicion'];
$licencia        = $data['licencia'];
$idtransmission  = $data['idtransmission'];
$multas          = $data['multas'];
$millage         = $data['millage'];
$descripcion     = $data['descripcion'];
$imagen          = $data['imagen'];

$full_lablel = $data['full_lablel'];
$idpueblo    = $data['idpueblo'];
$mejoroferta = $data['mejoroferta'];
$precio      = $data['precio'];
$aprobado    = $data['aprobado'];
