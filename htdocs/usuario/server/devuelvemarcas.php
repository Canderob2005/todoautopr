<?php
//  devuelve las marcas disponibles la base de datos
include "conn.php";
if (isset($_GET["fun"]) && $_GET['fun'] == "getmarcas") {

    devuelveMarcas($servername, $username, $password, $dbname);

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
