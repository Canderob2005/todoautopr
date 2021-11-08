<?php

// /home/code/Escritorio/Proyecto/todoautopr/htdocs/view/admin/server/marcas_modelos/get_marcas.php
function get_anuncios()
{

   include "../../../conn/conn.php";

   // ../conn/conn.php

   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(
         PDO::ATTR_ERRMODE,
         PDO::ERRMODE_EXCEPTION);

      $stmt = $conn->prepare(
         "SELECT * FROM anuncio
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
