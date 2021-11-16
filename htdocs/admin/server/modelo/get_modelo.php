<?php

// /home/code/Escritorio/Proyecto/todoautopr/htdocs/view/admin/server/marcas_modelos/get_marcas.php
function get_modelos()
{

   include "../conn/conn.php";

   try {
      $conn =
      new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(
         PDO::ATTR_ERRMODE,
         PDO::ERRMODE_EXCEPTION);

      $stmt = $conn->prepare(
         "SELECT * FROM modelo
            ORDER BY nombre ASC"
      );

      $stmt = $conn->prepare(
         "SELECT
         marca.nombre as nombre_marca,
         modelo.nombre as nombre_modelo,
         modelo.idcategoria
         FROM modelo
         INNER JOIN marca ON modelo.idmarca=marca.idmarca"
      );
      $stmt->execute();

      $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $data;

   } catch (PDOException $e) {

      // echo "Error:" . $e->getMessage();
   }
   $conn = null;
}

// SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate
// FROM Orders
// INNER JOIN Customers ON Orders.CustomerID=Customers.CustomerID;
