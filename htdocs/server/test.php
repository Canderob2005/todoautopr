<?php

include_once 'coneccion.php';

// function insertaModelo($servername, $username, $password, $dbname)
// {
//     try {
//         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//         $conn->setAttribute(
//             PDO::ATTR_ERRMODE,
//             PDO::ERRMODE_EXCEPTION);

//         // $nombremodelo = $_POST["modelo"];
//         // $nombre       = $_POST["marca"];
//         $nombreMarca = "Mitsubishi";
//         $nombre      = "Galant";

//         $stmt1 = $conn->prepare("SELECT idmarca FROM marca WHERE nombre= :marca");
//         $stmt1->bindParam(':marca', $nombreMarca);
//         $stmt1->execute();
//         $resultado1 = $stmt1->fetchAll();

//         $stmt1->closeCursor();

//         if (count($resultado1) == 1) {

//             echo $resultado1[0]['idmarca'];

//             $idactual = $resultado1[0]['idmarca'];

//             echo "<br>";

//             $stmt2 = $conn->prepare("SELECT * FROM modelo WHERE nombre= :nombremodelo && idmarca = :idactual");
//             $stmt2->bindParam(':nombremodelo', $nombre);
//             $stmt2->bindParam(':idactual', $idactual);
//             $stmt2->execute();
//             $resultado2 = $stmt2->fetchAll();
//             $stmt2->closeCursor();
//             echo count($resultado2);

//             if (count($resultado2) == 0) {
//                 echo "<br>";
//                 echo "Puedes insertar";
//                 $stmt3 = $conn->prepare("INSERT INTO modelo (idmarca, nombre)
//                         VALUES (:idactual, :nombre)");
//                 $stmt3->bindParam(':idactual', $idactual);
//                 $stmt3->bindParam(':nombre', $nombre);
//                 $stmt3->execute();
//                 $stmt3->closeCursor();
//                 $cuenta = $stmt3->rowCount();

//                 echo $cuenta;

//                 // print("Eliminadas $cuenta filas.\n");

//             } else {

//                 echo "No";

//             }

//         } else {

//         }

//     } catch (PDOException $e) {

//         echo "Error: " . $e->getMessage();
//     }
//     $conn = null;
// }
// function insertaModelo($servername, $username, $password, $dbname)
// {
//     try {
//         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//         $conn->setAttribute(
//             PDO::ATTR_ERRMODE,
//             PDO::ERRMODE_EXCEPTION);

//         // $nombreMarca = $_POST["modelo"];
//         // $nombre      = $_POST["marca"];
//         $nombreMarca = "Mitsubishil";
//         $nombre      = "ffffff";

//         $stmt1 = $conn->prepare("SELECT idmarca FROM marca WHERE nombre= :marca");
//         $stmt1->bindParam(':marca', $nombreMarca);
//         $stmt1->execute();
//         $resultado1 = $stmt1->fetchAll();

//         $stmt1->closeCursor();

//         if (count($resultado1) == 1) {

//             echo $resultado1[0]['idmarca'];

//             $idactual = $resultado1[0]['idmarca'];

//             // echo "<br>";

//             $stmt2 = $conn->prepare("SELECT * FROM modelo WHERE nombre= :nombremodelo && idmarca = :idactual");
//             $stmt2->bindParam(':nombremodelo', $nombre);
//             $stmt2->bindParam(':idactual', $idactual);
//             $stmt2->execute();
//             $resultado2 = $stmt2->fetchAll();
//             $stmt2->closeCursor();
//             // echo count($resultado2);

//             if (count($resultado2) == 0) {
//                 // echo "<br>";
//                 // echo "Puedes insertar";
//                 $stmt3 = $conn->prepare("INSERT INTO modelo (idmarca, nombre)
//                         VALUES (:idactual, :nombre)");
//                 $stmt3->bindParam(':idactual', $idactual);
//                 $stmt3->bindParam(':nombre', $nombre);
//                 $stmt3->execute();
//                 $stmt3->closeCursor();
//                 $cuenta              = $stmt3->rowCount();
//                 $result['respuesta'] = "insertado";
//                 echo json_encode($result);

//                 // echo $cuenta;

//                 // print("Eliminadas $cuenta filas.\n");

//             } else {

//                 $result['respuesta'] = "existe";
//                 echo json_encode($result);

//             }

//         } else {

//             $result['respuesta'] = "marca";
//             echo json_encode($result);
//         }

//     } catch (PDOException $e) {

//         echo "Error: " . $e->getMessage();
//     }
//     $conn = null;
// }

// function altaUsuario($servername, $username, $password, $dbname)
// {
//     echo "ok";
// }

// function altaUsuario($servername, $username, $password, $dbname)
// {
//     try {
//         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//         $conn->setAttribute(
//             PDO::ATTR_ERRMODE,
//             PDO::ERRMODE_EXCEPTION);

//         // $nombre   = $_POST['nombre'];
//         // $apellido = $_POST['apellido'];
//         // $telefono = $_POST['telefono'];
//         // $edad     = $_POST['edad'];
//         // $email    = $_POST['email'];
//         // $pass     = $_POST['pass'];

//         $nombre   = "Carlos";
//         $apellido = "Aleman";
//         $telefono = "939-277-7333";
//         $edad     = "39";
//         $email    = "mail@mail.com";
//         $pass     = "passpasspass";

//         $stmt1 = $conn->prepare("SELECT * FROM usuario
//                                 WHERE email= :email AND pass= :pass OR telefono= :telefono AND email= :email"
//         );
//         $parametros1 = array(

//             ':email'    => $email,
//             ':pass'     => $pass,
//             ':telefono' => $telefono,

//         );

//         $stmt1->execute($parametros1);

//         $resultado1 = $stmt1->fetchAll();
//         $stmt1->closeCursor();

//         if ($resultado1) {

//             $result = array(
//                 "respuesta" => "existe",
//             );

//             echo json_encode($result);

//             // echo count($resultado1);
//             // echo "<br/>";
//             // var_dump($resultado1);

//         } else {

//             $stmt2 = $conn->prepare("INSERT INTO usuario (nombre  , apellido  , telefono , edad  , email , pass)
//                                  VALUES (:nombre , :apellido , :telefono , :edad , :email , :pass)");

//             $parametros2 = array(
//                 ':nombre'   => $nombre,
//                 ':apellido' => $apellido,
//                 ':telefono' => $telefono,
//                 ':edad'     => $edad,
//                 ':email'    => $email,
//                 ':pass'     => $pass,
//                 ':nombre'   => $nombre,

//             );

//             $stmt2->execute($parametros2);

//             $cuenta = $stmt2->rowCount();

//             $stmt2->closeCursor();

//             if ($cuenta == 1) {

//                 $result = array(
//                     "respuesta" => "insertado",
//                 );

//                 echo json_encode($result);

//             } else {

//                 $result = array(
//                     "respuesta" => "eror",
//                 );

//                 echo json_encode($result);

//             }

//         }

//     } catch (PDOException $e) {

//         echo "Error: " . $e->getMessage();
//     }
//     $conn = null;
// }

// altaUsuario($servername, $username, $password, $dbname);

// function seleccionMarcaDeModelo($servername, $username, $password, $dbname)
// {

//     try {
//         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//         $conn->setAttribute(
//             PDO::ATTR_ERRMODE,
//             PDO::ERRMODE_EXCEPTION
//         );

//         $nombre = "Toyota";

//         // $nombre = $_POST['marca'];
//         $stmt1 = $conn->prepare("SELECT idmarca FROM marca
//                                 WHERE nombre= :nombre"
//         );

//         $parametros1 = array(

//             ':nombre' => $nombre,

//         );

//         $stmt1->execute($parametros1);
//         $resultado1 = $stmt1->fetchAll();

//         // var_dump($resultado1);

//         $stmt1->closeCursor();

//         if (count($resultado1) === 1) {
//             // echo '1';

//             $idactual = $resultado1[0][0];

//             // echo $idactual;

//             $stmt2 = $conn->prepare("SELECT nombre FROM modelo
//                                 WHERE  idmarca = :idactual"
//             );

//             $parametros2 = array(

//                 ':idactual' => $idactual,

//             );

//             $stmt2->execute($parametros2);
//             // $resultado2 = $stmt2->fetchAll();
//             $result = $stmt2->fetchAll(PDO::FETCH_ASSOC);

//             echo json_encode($result);

//         } else {

//         }

//         // echo "Connected successfully";

//     } catch (PDOException $e) {

//         echo "Connection failed: " . $e->getMessage();
//     }
//     $conn = null;
// }

// seleccionMarcaDeModelo($servername, $username, $password, $dbname);

// function validaUsuario($servername, $username, $password, $dbname)
// {

//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     $conn->setAttribute(
//         PDO::ATTR_ERRMODE,
//         PDO::ERRMODE_EXCEPTION
//     );

//     $stmt1 = $conn->prepare("SELECT * FROM usuario
//                                 WHERE email= :mail AND pass=:pass"
//     );

//     // $mail = $_POST['mail'];
//     // $pass = $_POST['pass'];
//     $mail = "mail@mail.com";
//     $pass = "dfbdabdfbfdbfb";

//     $parametros1 = array(
//         "mail" => $mail,
//         "pass" => $pass,
//     );

//     $stmt1->execute($parametros1);
//     $resultado1 = $stmt1->fetchAll();
//     // var_dump($resultado1);

//     if (count($resultado1) == 1) {
//         $result = array(
//             "respuesta" => $resultado1[0]["idusuario"],
//         );
//         echo json_encode($result);

//     } else {

//         $result = array(
//             "respuesta" => "No",
//         );
//         echo json_encode($result);

//     }

//     // echo json_encode($resultado1);

//     // $result = array(
//     //     "respuesta" => "insertado",
//     // );

//     // echo json_encode($result);
// }

// validaUsuario($servername, $username, $password, $dbname);

// function seleccionaUsuario($servername, $username, $password, $dbname)
// {

//     // $result = array(
//     //     "respuesta" => $_POST['id'],
//     // );
//     // echo json_encode($result);

//     try {
//         $conn =
//         new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//         $conn->setAttribute(
//             PDO::ATTR_ERRMODE,
//             PDO::ERRMODE_EXCEPTION);

//         $stmt = $conn->prepare(
//             "SELECT nombre, apellido,email
//             FROM usuario
//             WHERE idusuario=:idusuario"
//         );

//         $parametros1 = array(
//             "idusuario" => $$_POST['id'],
//             "pass"      => $pass,
//         );
//         $stmt->execute($parametros1);

//         $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

//         echo json_encode($result);

//     } catch (PDOException $e) {

//         echo "Error: " . $e->getMessage();
//     }
//     $conn = null;

// }

// let datos = {
//     func: "insertaVehiculo",
//     idmodelo: datoidmodelo,
//     idestado: datoidestado,
//     millage: datomillage,
//     descripcion: datodescripcion,
//     precio: datoprecio,
//     idtransmission: datoidtransmission,
//     idusuario: datoidusuario,
//     multas: datomultas,
//     licencia: datolicencia,
//     fechamodelo: datofechamodelo
// }

// $result['respuesta'] = "insertaVehiculo";

// $result = array(
//     "func"           => $_POST['func'],
//     "idmodelo"       => $_POST['idmodelo'],
//     "idestado"       => $_POST['idestado'],
//     "millage"        => $_POST['millage'],
//     "descripcion"    => $_POST['descripcion'],
//     "precio"         => $_POST['precio'],
//     "idtransmission" => $_POST['idtransmission'],
//     "idusuario"      => $_POST['idusuario'],
//     "multas"         => $_POST['multas'],
//     "licencia"       => $_POST['licencia'],
//     "fechamodelo"    => $_POST['fechamodelo'],

// );

// echo json_encode($result);
