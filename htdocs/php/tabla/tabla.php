<?php
include './conn/conn.php';
try {
   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $stmt = $conn->prepare("SELECT * FROM anuncio");
   $stmt->execute();

   // set the resulting array to associative
   echo '<table class="w3-table-all w3-tiny">';
   echo '<thead>';
   echo '<tr>';
   echo '<th>';
   echo 'idanuncio';
   echo '</th>';

   echo '<th>';
   echo 'nombre';
   echo '</th>';

   echo '<th>';
   echo 'pagado';
   echo '</th>';

   echo '<th>';
   echo 'telefono';
   echo '</th>';

   echo '<th>';
   echo 'email';
   echo '</th>';

   echo '<th>';
   echo 'idcategoria';
   echo '</th>';

   echo '<th>';
   echo 'idmarca';
   echo '</th>';

   echo '<th>';
   echo 'idmodelo';
   echo '</th>';

   echo '<th>';
   echo 'year';
   echo '</th>';

   echo '<th>';
   echo 'idclasificacion';
   echo '</th>';

   echo '<th>';
   echo 'idcondicion';
   echo '</th>';

   echo '<th>';
   echo 'idtransmission';
   echo '</th>';

   echo '<th>';
   echo 'licencia';
   echo '</th>';

   echo '<th>';
   echo 'multas';
   echo '</th>';

   echo '<th>';
   echo 'millage';
   echo '</th>';

   echo '<th>';
   echo 'descripcion';
   echo '</th>';

   echo '<th>';
   echo 'imagen';
   echo '</th>';

   echo '<th>';
   echo 'full_lablel';
   echo '</th>';

   echo '<th>';
   echo 'idpueblo';
   echo '</th>';

   echo '<th>';
   echo 'precio';
   echo '</th>';

   echo '<th>';
   echo 'mejoroferta';
   echo '</th>';

   echo '</tr>';
   echo '</thead>';
   echo '<tbody>';
   while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $idanuncio       = $data['idanuncio'];
      $nombre          = $data['nombre'];
      $pagado          = $data['pagado'];
      $telefono        = $data['telefono'];
      $email           = $data['email'];
      $idcategoria     = $data['idcategoria'];
      $idmarca         = $data['idmarca'];
      $idmodelo        = $data['idmodelo'];
      $year            = $data['year'];
      $idclasificacion = $data['idclasificacion'];
      $idcondicion     = $data['idcondicion'];
      $idtransmission  = $data['idtransmission'];
      $licencia        = $data['licencia'];
      $multas          = $data['multas'];
      $millage         = $data['millage'];
      $descripcion     = $data['descripcion'];
      $imagen          = $data['imagen'];
      $full_lablel     = $data['full_lablel'];
      $idpueblo        = $data['idpueblo'];
      $precio          = $data['precio'];
      $mejoroferta     = $data['mejoroferta'];

      echo '<tr>';

      echo '<td>';
      echo $idanuncio;
      echo '</td>';

      echo '<td>';
      echo $nombre;
      echo '</td>';

      echo '<td>';
      echo $pagado;
      echo '</td>';

      echo '<td>';
      echo $telefono;
      echo '</td>';

      echo '<td>';
      echo $email;
      echo '</td>';

      echo '<td>';
      echo $idcategoria;
      echo '</td>';

      echo '<td>';
      echo $idmarca;
      echo '</td>';

      echo '<td>';
      echo $idmodelo;
      echo '</td>';

      echo '<td>';
      echo $year;
      echo '</td>';

      echo '<td>';
      echo $idclasificacion;
      echo '</td>';

      echo '<td>';
      echo $idcondicion;
      echo '</td>';

      echo '<td>';
      echo $idtransmission;
      echo '</td>';

      echo '<td>';
      echo $licencia;
      echo '</td>';

      echo '<td>';
      echo $multas;
      echo '</td>';

      echo '<td>';
      echo $millage;
      echo '</td>';

      echo '<td>';
      echo $descripcion;
      echo '</td>';

      echo '<td>';
      echo $imagen;
      echo '</td>';

      echo '<td>';
      echo $full_lablel;
      echo '</td>';

      echo '<td>';
      echo $idpueblo;
      echo '</td>';

      echo '<td>';
      echo $precio;
      echo '</td>';

      echo '<td>';
      echo $mejoroferta;
      echo '</td>';

      echo '</tr>';

   }
   echo '</tbody>';
   echo ' </table>';
} catch (PDOException $e) {
   echo "Error: " . $e->getMessage();
}
$conn = null;
