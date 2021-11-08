<?php
include "conn.php";

if (isset($_POST["fun"]) && $_POST['fun'] == "marcaNoesiste") {

    insertaModelo($servername, $username, $password, $dbname);

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
