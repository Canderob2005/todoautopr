<?php

echo $_POST['id_serv'];

function buscador($servicio = '')
{

   include "conn.php";
// Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
   if ($conn->connect_error) {
      // die("Connection failed: " . $conn->connect_error);
   }

   $sql = "SELECT id_serv, pueblo FROM clientes WHERE pueblo={$servicio}";

   $result = $conn->query($sql);
   $rows   = $result->fetch_all(MYSQLI_ASSOC);
   return $rows;
   $conn->close();
}

$datos = buscador("Carloline");
