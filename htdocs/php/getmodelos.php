<?php
include 'conn.php';
if (isset($_GET["fun"]) && $_GET['fun'] == "getmodelo") {
    // $id     = $_GET["id"];
    // $result = array(
    //     "respuesta" => $id)
    // echo json_encode($result);
    damemodelos($servername, $username, $password, $dbname);

}

function damemodelos($servername, $username, $password, $dbname)
{

    header('Content-Type: application/json; charset=utf-8');
    try {
        $conn =
        new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);
        $id          = intval($_GET["id"]);
        $stmt_modelo = $conn->prepare(
            "SELECT * FROM modelo WHERE idmarca = :idmarca");
        $stmt_modelo->bindParam(':idmarca', $id);

        $stmt_modelo->execute();

        $result = $stmt_modelo->fetchAll(PDO::FETCH_ASSOC);

        echo json_encode($result);

    } catch (PDOException $e) {

        echo "Error: " . $e->getMessage();
    }
    $conn = null;

}
