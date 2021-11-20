 <?php
function buscador($nombre_pueblo = '')
{

   include "conn.php";
// Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
   if ($conn->connect_error) {
      // die("Connection failed: " . $conn->connect_error);
   }

   $sql = "SELECT id_serv, pueblo FROM clientes WHERE pueblo={$nombre_pueblo}";

   $result = $conn->query($sql);
   $rows   = $result->fetch_all(MYSQLI_ASSOC);
   return $rows;
   $conn->close();
}

$datos = buscador("Carloline");