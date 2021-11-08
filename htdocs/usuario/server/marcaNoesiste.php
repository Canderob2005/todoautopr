<?php

function marcaNoesiste($servername, $username, $password, $dbname)
{
    try {
        $conn =
        new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);
        $marca = $_POST["marca"];
        $sql   = "SELECT * FROM marca WHERE nombre = '$marca'";
        // =================================================================

        // TRabajar con las consultas multiples

        //         $stmt = $dbh->prepare('SELECT foo FROM bar');

        // /* Create a second PDOStatement object */
        //         $otherStmt = $dbh->prepare('SELECT foobaz FROM foobar');
        //         $stmt->execute();

        // /* Fetch only the first row from the results */
        //         $stmt->fetch();

        // /* The following call to closeCursor() may be required by some drivers */
        //         $stmt->closeCursor();

        // /* Now we can execute the second statement */
        //         $otherStmt->execute();

        //         $search = "user";
        //         $sth    = db->prepare("SELECT * FROM users WHERE $search=:email");
        //         $sth->execute(array(email => "yada"));
        //         $search = "email";
        //         $sth->execute(array(email => "yada@ya.da"));
        // =================================================================
        if ($resultado = $conn->query($sql)) {

            if ($resultado->fetchColumn() > 0) {

                $result = array(
                    "respuesta" => "no",
                );
                echo json_encode($result);
            } else {
                // $sql->closeCursor();
                $sql2 = "INSERT INTO marca (nombre)
                VALUES ('$marca')";

                $conn->exec($sql2);

                $result = array(
                    "respuesta" => "si",

                );
                echo json_encode($result);
            }
        } else {
            $result = array(
                "respuesta" => "nada",
            );
            echo json_encode($result);
        }

    } catch (PDOException $e) {

        echo "Error: " . $e->getMessage();
    }
    $conn = null;
}
