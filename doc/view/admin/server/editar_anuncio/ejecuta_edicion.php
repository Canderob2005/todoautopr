
<?php

// NOTA : Crearar una funcion y validar los datos

function ejecuta_edicion($value = '')
{
   include "../../../../conn/conn.php";
   try {

      $idanuncio   = intval($_POST['idanuncio']);
      $nombre      = $_POST['nombre'];
      $pagado      = $_POST['pagado'];
      $telefono    = $_POST['telefono'];
      $email       = $_POST['email'];
      $licencia    = $_POST['licencia'];
      $full_lablel = $_POST['full_lablel'];
      $multas      = $_POST['multas'];
      $mejoroferta = $_POST['mejoroferta'];
      $descripcion = $_POST['descripcion'];
      $aprobado    = $_POST['aprobado'];

      $idpueblo        = intval($_POST['idpueblo']);
      $year            = intval($_POST['year']);
      $idcategoria     = intval($_POST['idcategoria']);
      $idmarca         = intval($_POST['idmarca']);
      $idmodelo        = intval($_POST['idmodelo']);
      $idclasificacion = intval($_POST['idclasificacion']);
      $idcondicion     = intval($_POST['idcondicion']);
      $idtransmission  = intval($_POST['idtransmission']);
      $millage         = intval($_POST['millage']);
      $precio          = bcadd($_POST['precio'], 0);

      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = "UPDATE `anuncio`
      SET `nombre`='$nombre',
      `pagado`='$pagado',
      `telefono`='$telefono',
      `email`='$email',
      `idcategoria`='$idcategoria',
      `idmarca`='$idmarca',
      `idmodelo`='$idmodelo',
      `year`='$year',
      `idclasificacion`='$idclasificacion',
      `idcondicion`='$idcondicion',
      `idtransmission`='$idtransmission',
      `licencia`='$licencia',
      `multas`='$multas',
      `millage`='$millage',
      `descripcion`='$descripcion',
      `full_lablel`='$full_lablel',
      `idpueblo`='$idpueblo',
      `precio`='$precio',
      `mejoroferta`='$mejoroferta',
       `aprobado`='$aprobado'
      WHERE idanuncio=$idanuncio";

      // Prepare statement
      $stmt = $conn->prepare($sql);

      // execute the query
      $stmt->execute();

      // echo a message to say the UPDATE succeeded
      echo $stmt->rowCount() . " records UPDATED successfully";
   } catch (PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
   }

   $conn = null;
}

// ////////////////
ejecuta_edicion();
// ////////////////