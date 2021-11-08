<?php
include_once 'conn.php';

if (isset($_POST["func"]) && $_POST['func'] == "select") {

    // respuestaConeccion($servername, $username, $password, $dbname);
    devuelveMarcas($servername, $username, $password, $dbname);

} elseif (isset($_POST["func"]) && $_POST['func'] == "modelos") {

    damemodelos($servername, $username, $password, $dbname);

} elseif (isset($_POST["func"]) && $_POST['func'] == "busca") {
    busca($servername, $username, $password, $dbname);

}

function busca($servername, $username, $password, $dbname)
{
    try {
        $conn =
        new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);

        $id = $_POST["id"];

        $sql =
            "SELECT
                anuncio.idanuncio,
                anuncio.nombre,
                anuncio.pagado,
                anuncio.direccion,
                anuncio.telefono,
                anuncio.email,
                categoria.nombre,
                marca.nombre,
                modelo.nombre,
                anuncio.ano,
                clasificacion.nombre,
                transmission.nombre,
                anuncio.licencia,
                anuncio.multas,
                anuncio.descripcion,
                anuncio.imagen
            FROM anuncio,categoria,marca, modelo,clasificacion,condicion,transmission
                WHERE anuncio.idcategoria = categoria.idcategoria
                AND anuncio.idmodelo = $id
                AND anuncio.idclasificacion = clasificacion.idclasificacion
               AND anuncio.idtransmission = transmission.idtransmission
               group by  anuncio.idanuncio";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (count($result) == 0) {

            $result = array(
                "respuesta" => "no",
            );
            echo json_encode($result);

        } else {

            echo json_encode($result);
        }

        // $result = array(
        //     "respuesta" => "no",
        // );
        // echo json_encode($result);

    } catch (PDOException $e) {

        echo "Error: " . $e->getMessage();
    }
    $conn = null;
}

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

function damemodelos($servername, $username, $password, $dbname)
{
    try {
        $conn =
        new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);
        $id   = $_POST["id"];
        $stmt = $conn->prepare(
            "SELECT * FROM modelo
            WHERE idmarca=$id
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

// ===================================================================

// function respuestaConeccion($servername, $username, $password, $dbname)
// {

//     try {
//         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

//         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//         $result = array(
//             "respuesta" => "si",
//         );

//         $id = $_POST["id"];

//         $sql =
//             "SELECT modelo.idmodelo, modelo.nombre
//         FROM
//         modelo,
//         marca
//         WHERE modelo.idmarca = $id";

//         echo json_encode($result);

//     } catch (PDOException $e) {

//         $result = array(
//             "respuesta" => "no",
//         );
//         echo json_encode($result);
//     }

// }
