<?php
// NOTA este fichero no esta en uso se eleminara y
// su estructura se puede usar ocnomo ejemplo para otros proyectos
function devuelveMarcas($servername, $username, $password, $dbname)
{
   try {
      $conn =
      new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(
         PDO::ATTR_ERRMODE,
         PDO::ERRMODE_EXCEPTION);

      $stmt = $conn->prepare(
         "SELECT * FROM marca
            ORDER BY nombre ASC"
      );
      $stmt->execute();

      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

      echo json_encode($result);

   } catch (PDOException $e) {

      echo "Error: " . $e->getMessage();
   }
   $conn = null;

}

function insertaModelo($servername, $username, $password, $dbname)
{
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(
         PDO::ATTR_ERRMODE,
         PDO::ERRMODE_EXCEPTION);

      $nombreMarca = $_POST["marca"];
      $nombre      = $_POST["modelo"];

      if ($nombreMarca == "" || $nombre == "") {

         $result = array(
            "respuesta" => "campo vacio",
         );

         echo json_encode($result);

      } else {

         $stmt1 = $conn->prepare("SELECT idmarca FROM marca
                                WHERE nombre= :marca"
         );
         $stmt1->bindParam(':marca', $nombreMarca);
         $stmt1->execute();
         $resultado1 = $stmt1->fetchAll();

         $stmt1->closeCursor();

         if (count($resultado1) == 1) {

            $idactual = $resultado1[0]['idmarca'];

            $stmt2 = $conn->prepare("SELECT * FROM modelo
                                    WHERE nombre= :nombremodelo
                                    AND idmarca = :idactual"
            );
            $stmt2->bindParam(':nombremodelo', $nombre);
            $stmt2->bindParam(':idactual', $idactual);
            $stmt2->execute();
            $resultado2 = $stmt2->fetchAll();
            $stmt2->closeCursor();

            if (count($resultado2) == 0) {

               $stmt3 = $conn->prepare("INSERT INTO modelo (idmarca, nombre)
                                        VALUES (:idactual, :nombre)"
               );
               $stmt3->bindParam(':idactual', $idactual);
               $stmt3->bindParam(':nombre', $nombre);
               $stmt3->execute();
               $stmt3->closeCursor();
               $cuenta = $stmt3->rowCount();

               $result = array(
                  "respuesta" => "insertado",
               );

               echo json_encode($result);

            } else {
               $result = array(
                  "respuesta" => "existe",
               );

               echo json_encode($result);

            }

         } else {

            $result = array(
               "respuesta" => "marca",
            );

            echo json_encode($result);
         }
      }

   } catch (PDOException $e) {

      echo "Error: " . $e->getMessage();
   }
   $conn = null;
}

function altaUsuario($servername, $username, $password, $dbname)
{
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(
         PDO::ATTR_ERRMODE,
         PDO::ERRMODE_EXCEPTION);

      $nombre   = $_POST['nombre'];
      $apellido = $_POST['apellido'];
      $telefono = $_POST['telefono'];
      $edad     = $_POST['edad'];
      $email    = $_POST['email'];
      $pass     = $_POST['pass'];

      $stmt1 = $conn->prepare("SELECT * FROM usuario
                                WHERE email= :email AND pass= :pass OR telefono= :telefono AND email= :email"
      );
      $parametros1 = array(

         ':email'    => $email,
         ':pass'     => $pass,
         ':telefono' => $telefono,

      );

      $stmt1->execute($parametros1);

      $resultado1 = $stmt1->fetchAll();
      $stmt1->closeCursor();

      if ($resultado1) {

         $result = array(
            "respuesta" => "existe",
         );

         echo json_encode($result);

      } else {

         $stmt2 = $conn->prepare("INSERT INTO usuario (nombre  , apellido  , telefono , edad  , email , pass)
                                 VALUES (:nombre , :apellido , :telefono , :edad , :email , :pass)");

         $parametros2 = array(
            ':nombre'   => $nombre,
            ':apellido' => $apellido,
            ':telefono' => $telefono,
            ':edad'     => $edad,
            ':email'    => $email,
            ':pass'     => $pass,
            ':nombre'   => $nombre,

         );

         $stmt2->execute($parametros2);

         $cuenta = $stmt2->rowCount();

         $stmt2->closeCursor();

         if ($cuenta == 1) {

            $result = array(
               "respuesta" => "insertado",
            );

            echo json_encode($result);

         } else {

            $result = array(
               "respuesta" => "eror",
            );

            echo json_encode($result);

         }

      }

   } catch (PDOException $e) {

      echo "Error: " . $e->getMessage();
   }
   $conn = null;
}

function seleccionMarcaDeModelo($servername, $username, $password, $dbname)
{

   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(
         PDO::ATTR_ERRMODE,
         PDO::ERRMODE_EXCEPTION
      );

      // $nombre = "Toyota";

      $nombre = $_POST['marca'];
      $stmt1  = $conn->prepare("SELECT idmarca FROM marca
                                WHERE nombre= :nombre"
      );

      $parametros1 = array(

         ':nombre' => $nombre,

      );

      $stmt1->execute($parametros1);
      $resultado1 = $stmt1->fetchAll();

      // var_dump($resultado1);

      $stmt1->closeCursor();

      if (count($resultado1) === 1) {
         // echo '1';

         $idactual = $resultado1[0][0];

         // echo $idactual;

         $stmt2 = $conn->prepare("SELECT * FROM modelo
                                WHERE  idmarca = :idactual"
         );

         $parametros2 = array(

            ':idactual' => $idactual,

         );

         $stmt2->execute($parametros2);
         // $resultado2 = $stmt2->fetchAll();
         $result = $stmt2->fetchAll(PDO::FETCH_ASSOC);

         echo json_encode($result);

      } else {

      }

      // echo "Connected successfully";

   } catch (PDOException $e) {

      echo "Connection failed: " . $e->getMessage();
   }
   $conn = null;
}

function validaUsuario($servername, $username, $password, $dbname)
{

   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   $conn->setAttribute(
      PDO::ATTR_ERRMODE,
      PDO::ERRMODE_EXCEPTION
   );

   $stmt1 = $conn->prepare("SELECT * FROM usuario
                                WHERE email= :mail AND pass=:pass"
   );

   $mail = $_POST['mail'];
   $pass = $_POST['pass'];
   // $mail = "mail@mail.com";
   // $pass = "dfbdabdfbfdbfb";

   $parametros1 = array(
      "mail" => $mail,
      "pass" => $pass,
   );

   $stmt1->execute($parametros1);
   $resultado1 = $stmt1->fetchAll();
   // var_dump($resultado1);

   if (count($resultado1) == 1) {
      $result = array(
         "respuesta" => "Si",
         "idusuario" => $resultado1[0]["idusuario"],
         "nombre"    => $resultado1[0]["nombre"],
      );
      echo json_encode($result);

   } else {

      $result = array(
         "respuesta" => "No",
      );
      echo json_encode($result);

   }

   // echo json_encode($resultado1);

   // $result = array(
   //     "respuesta" => "insertado",
   // );

   // echo json_encode($result);
}

function seleccionaUsuario($servername, $username, $password, $dbname)
{

   try {
      $conn =
      new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(
         PDO::ATTR_ERRMODE,
         PDO::ERRMODE_EXCEPTION);

      $stmt = $conn->prepare(
         "SELECT nombre, apellido,email
        FROM usuario
        WHERE idusuario=:idusuario"
      );

      $parametros1 = array(
         "idusuario" => $_POST['id'],

      );
      $stmt->execute($parametros1);

      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

      echo json_encode($result);

   } catch (PDOException $e) {

      echo "Error: " . $e->getMessage();
   }
   $conn = null;

}

function devuelveEstados($servername, $username, $password, $dbname)
{
   try {
      $conn =
      new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(
         PDO::ATTR_ERRMODE,
         PDO::ERRMODE_EXCEPTION);

      $stmt = $conn->prepare(
         "SELECT * FROM estado"
      );

      // $parametros1 = array(
      //     "idusuario" => $_POST['id'],

      // );
      $stmt->execute();

      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

      echo json_encode($result);

   } catch (PDOException $e) {

      echo "Error: " . $e->getMessage();
   }
   $conn = null;

}

function devuelveTrasminsiones($servername, $username, $password, $dbname)
{
   try {
      $conn =
      new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(
         PDO::ATTR_ERRMODE,
         PDO::ERRMODE_EXCEPTION);

      $stmt = $conn->prepare(
         "SELECT * FROM transmission"
      );

      // $parametros1 = array(
      //     "idusuario" => $_POST['id'],

      // );
      $stmt->execute();

      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

      echo json_encode($result);

   } catch (PDOException $e) {

      echo "Error: " . $e->getMessage();
   }
   $conn = null;
}

function insertaVehiculo($servername, $username, $password, $dbname)
{
   try {
      $conn =
      new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(
         PDO::ATTR_ERRMODE,
         PDO::ERRMODE_EXCEPTION);

      $stmt = $conn->prepare(
         "INSERT INTO vehiculo (idmodelo, idestado, millage, descripcion, precio, idtransmission, idusuario, multas, licencia, fechamodelo)
            VALUES (:idmodelo, :idestado, :millage,:descripcion,:precio,:idtransmission,:idusuario,:multas,:licencia,:fechamodelo);"
      );

      $parametros = array(

         ":idmodelo"       => $_POST['idmodelo'],
         ":idestado"       => $_POST['idestado'],
         ":millage"        => $_POST['millage'],
         ":descripcion"    => $_POST['descripcion'],
         ":precio"         => $_POST['precio'],
         ":idtransmission" => $_POST['idtransmission'],
         ":idusuario"      => $_POST['idusuario'],
         ":multas"         => $_POST['multas'],
         ":licencia"       => $_POST['licencia'],
         ":fechamodelo"    => $_POST['fechamodelo'],

      );
      $stmt->execute($parametros);

      $cuenta = $stmt->rowCount();

      $stmt->closeCursor();

      if ($cuenta == 1) {

         $result = array(
            "respuesta" => "insertado",
         );

         echo json_encode($result);

      } else {

         $result = array(
            "respuesta" => "eror",
         );

         echo json_encode($result);

      }

   } catch (PDOException $e) {

      echo "Error: " . $e->getMessage();
   }
   $conn = null;
}

function verVheiculos($servername, $username, $password, $dbname)
{

   try {
      $conn =
      new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(
         PDO::ATTR_ERRMODE,
         PDO::ERRMODE_EXCEPTION);

      $id = $_POST['idusuario'];

      $stmt = $conn->prepare(
         "SELECT
            vehiculo.idvehiculo,
            modelo.nombre,
            vehiculo.fechamodelo,
            estado.tipo,
            transmission.tipo,
            licencia.valor,
            vehiculo.millage,
            vehiculo.multas,
            vehiculo.precio,
            vehiculo.descripcion
            FROM
            vehiculo,
            modelo,
            estado,
            transmission,
            licencia
            WHERE vehiculo.idusuario =  $id
            AND  modelo.idmodelo = vehiculo.idmodelo
            AND  estado.idestado = vehiculo.idestado
            AND  transmission.idtransmission = vehiculo.idtransmission
            AND  modelo.idmodelo = vehiculo.idmodelo
            AND  vehiculo.licencia=licencia.idlicencia"
      );

      // $parametros1 = array(
      //     "idusuario" => $_POST['id'],

      // );
      $stmt->execute();

      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

      echo json_encode($result);

   } catch (PDOException $e) {

      echo "Error: " . $e->getMessage();
   }
   $conn = null;

   // $result = array(
   //     "func"      => $_POST['func'],
   //     "idusuario" => $_POST['idusuario'],

   // );

   // echo json_encode($result);
}
