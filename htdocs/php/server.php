<?php
// No se esta implementado este fichero.
// Se eliminará  pero su estructura puede servir en proyectos proyectos
include_once 'conn.php';
include_once 'funciones.php';
// include_once "test.php";

if (isset($_POST["func"]) && $_POST['func'] == "insertaModelo") {

   insertaModelo($servername, $username, $password, $dbname);

} elseif (isset($_POST["func"]) && $_POST['func'] == "agregaUsuario") {

   altaUsuario($servername, $username, $password, $dbname);

} elseif (isset($_POST["func"]) && $_POST['func'] == "seleccionaMarcas") {

   devuelveMarcas($servername, $username, $password, $dbname);

} elseif (isset($_POST["func"]) && $_POST['func'] == "seleccionMarcaDeModelo") {

   seleccionMarcaDeModelo($servername, $username, $password, $dbname);

} elseif (isset($_POST["func"]) && $_POST['func'] == "validaUsuario") {

   validaUsuario($servername, $username, $password, $dbname);

} elseif (isset($_POST["func"]) && $_POST['func'] == "seleccionaUsuario") {

   seleccionaUsuario($servername, $username, $password, $dbname);

} elseif (isset($_GET["func"]) && $_GET['func'] == "devuelveEstados") {

   // $result['respuesta'] = "ok";
   // echo json_encode($result);

   devuelveEstados($servername, $username, $password, $dbname);

} elseif (isset($_GET["func"]) && $_GET['func'] == "devuelveTrasminsiones") {

   // $result['respuesta'] = "devuelveTrasminsiones";
   // echo json_encode($result);

   devuelveTrasminsiones($servername, $username, $password, $dbname);

} elseif (isset($_POST["func"]) && $_POST['func'] == "insertaVehiculo") {

   insertaVehiculo($servername, $username, $password, $dbname);

} elseif (isset($_POST["func"]) && $_POST['func'] == "verVheiculos") {

   verVheiculos($servername, $username, $password, $dbname);

}

// =====================================================================
