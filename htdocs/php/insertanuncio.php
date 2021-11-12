<?php

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
