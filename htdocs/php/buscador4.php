<?php

// Llamada ala función al final del Script
// Se necesita documentación  para las funciones
function busca_anuncio()
{
   // $idmarca  = 1;
   // $idmodelo = 2;
   //  Definición de la cabecera de respuesta
   header('Content-Type: application/json');

   $idmarca =
      json_decode($_GET['idmarca']);
   $idmodelo =
      json_decode($_GET['idmodelo']);

   include "conn.php";
   try {
      $conn = new PDO(
         "mysql:host=$servername;dbname=$dbname",
         $username,
         $password
      );

      $conn->setAttribute(
         PDO::ATTR_ERRMODE,
         PDO::ERRMODE_EXCEPTION
      );

      // $conn->exec('SET CHARACTER SET UTF8');
      // $conn->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");

      $sql =
         "SELECT * FROM anuncio
            WHERE anuncio.idmarca={$idmarca}
            AND anuncio.idmodelo={$idmodelo}";

      $stmt = $conn->query($sql);

      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

      //  Bucle que llama funciones responsables de aplicar nuevas claves
      //  con valor relativo al dato numérico que corresponde a valor literal en las tablas relacionales
      for ($i = 0; $i < count($result); $i++) {

         $result[$i] +=
            ["nombre_categoria" =>
            nombre_categoria(
               $result[$i]["idcategoria"]
            ),
         ];

         $result[$i] +=
            ["nombre_marca" =>
            nombre_marca(
               $result[$i]["idmarca"]
            ),
         ];

         $result[$i] +=
            ["nombre_modelo" =>
            nombre_modelo(
               $result[$i]["idmodelo"]
            ),
         ];

         $result[$i] +=
            ["nombre_clasificacion" =>
            nombre_clasificacion(
               $result[$i]["idclasificacion"]
            ),
         ];

         $result[$i] +=
            ["nombre_condicion" =>
            nombre_condicion(
               $result[$i]["idcondicion"]
            ),
         ];

         $result[$i] +=
            ["nombre_transmision" =>
            nombre_transmision(
               $result[$i]["idtransmission"]
            ),
         ];

         $result[$i] +=
            ["nombre_pueblo" =>
            nombre_pueblo(
               $result[$i]["idpueblo"]
            ),
         ];

         $result[$i] =
            buscaImagenes_anuncio(
            $result[$i],
            $result[$i]["idanuncio"]
         );
         // array_push($result[$i], buscaImagenes_anuncio($result[$i]["idanuncio"]));

      }

      echo json_encode(
         $result
      );

   } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
   }
   $conn = null;

}

function buscaImagenes_anuncio($registro1, $id)
{

   include "conn.php";
   try {
      $conn = new PDO(
         "mysql:host=$servername;dbname=$dbname",
         $username,
         $password
      );

      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // $conn->exec('SET CHARACTER SET UTF8');
      // $conn->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");

      $sql =
         "SELECT * FROM imagenes
         WHERE idanuncio={$id}
         AND numero_imagen=1";

      $stmt = $conn->query($sql);
      $stmt->execute();

      $registro = $registro1;

      $result = $stmt->fetch(PDO::FETCH_ASSOC);

      $registro +=
         ["descripcion_imagen" =>
         $result["descripcion_imagen"],
      ];

      $registro +=
         ["nombre_directorio" =>
         $result["nombre_directorio"],
      ];

      $registro +=
         ["ruta_imagen" =>
         $result["ruta_imagen"],
      ];

      $conn = null;
      return $registro;

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
   include "conn.php";
   try {
      $conn = new PDO(
         "mysql:host=$servername;dbname=$dbname",
         $username,
         $password
      );
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql =
         "SELECT nombre as nombre_pueblo
         FROM pueblo
         WHERE idpueblo={$idpueblo}";

      $stmt   = $conn->query($sql);
      $result = $stmt->fetch(PDO::FETCH_ASSOC);

      return $result["nombre_pueblo"];
      // echo json_encode($result);

   } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
   }

   $conn = null;
}

function nombre_transmision($idtransmission)
{
   include "conn.php";
   try {

      $conn = new PDO(
         "mysql:host=$servername;dbname=$dbname",
         $username,
         $password
      );

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
   include "conn.php";
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // $conn->exec('SET CHARACTER SET UTF8');
      // $conn->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");

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
   include "conn.php";
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // $conn->exec('SET CHARACTER SET UTF8');
      // $conn->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");

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
   include "conn.php";
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // $conn->exec('SET CHARACTER SET UTF8');
      // $conn->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");

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

   include "conn.php";
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // $conn->exec('SET CHARACTER SET UTF8');
      // $conn->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");

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
   include "conn.php";
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // $conn->exec('SET CHARACTER SET UTF8');
      // $conn->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");

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

// Llamada ala funcion
busca_anuncio();
