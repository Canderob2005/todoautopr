<!--
Fichero se ejecutara en el futuro en le [index.php]
POr esta razón el comentario pues las URL de los ficheros externos JS y CSS deben revisarse. También las involuciones de PHP deben revisarse.
 -->
<!-- //////////////////// -->
<!-- Trozo de CSS debe incorporare en un mejor lugar  -->
<style>
  .cabecera_targeta p, .descripcion_targeta>p{
      padding: 0px !important;
      margin: 0px !important;
      }
</style>
<!-- //////////////////// -->
<!--
NOTA:
   Este fichero esta mal ubicado ,
   todo esta mal funciona pero debe
   organizarse los componentes. Adicionalmente
   existe un fichero con consulta bien echa
   con JOIN y no esta estructura mal hecha,
   esto fue  pensando que le servidor no respondía
-->
<?php
include_once '../comp/head.php';
include_once '../comp/nav.php';

?>
<style type="text/css">
  .targeta .w3-card-4{
   background-color: #d6eaf8;
   transform: scale(1);
   transition: transform 0.7s;
   }
   .targeta .w3-card-4:hover{
   transform: scale(1.06);
   }
   .targeta .w3-card-4 img{
   margin-top: 20px;
   height:150px;
   width:75%;
   }
   .targeta{
      margin-top: 15px;
   }
</style>
<br/>
<br/>
<br/>
<?php include "../comp/slide_show/comp.php";?>
<div class="" style="height:60px;">
</div>
<div class="w3-container">
  <div class="w3-row-padding w3-section w3-stretch">
    <!-- /////////////////////////////////////// -->
    <?php for ($i = 0; $i < count($resultado); $i++): ?>

   genera_anuncio($resultado[$i]);
<?php endfor;?>
?>
    <!-- /////////////////////////////////////// -->
  </div>
</div>
<?php

function genera_anuncio($anuncio)
{

   busca_imagenes_anuncio($anuncio["idanuncio"], $anuncio);

}

function busca_imagenes_anuncio($idanuncio, $anuncio)
{

   try {
      include "../conn/conn.php";
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->
         setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("SELECT * FROM imagenes  WHERE idanuncio ='$idanuncio'");
      $stmt->execute();

      $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

      if (array_key_exists(0, $resultado) == 1) {
         $directorio    = $resultado[0]['nombre_directorio'];
         $nombre_imagen = $resultado[0]['ruta_imagen'];
         $ruta          = "{$directorio}/{$nombre_imagen}";
         $marca         = nombre_marca($anuncio['idmarca']);
         $modelo        = nombre_modelo($anuncio['idmodelo']);
         $transmission  = nombre_transmision($anuncio['idtransmission']);
         $clasificacion = nombre_clasificacion($anuncio['idclasificacion']);

         $condicion = nombre_condicion($anuncio['idcondicion']);

         ?>
<?php if ($anuncio['aprobado'] == "si") {?>
<div class="w3-col s12 m4 l3 targeta">
  <div class="w3-container w3-center">
    <div class="w3-card-4">
      <h3 class="">
        <?=$marca;?>
      </h3>
      <img class="w3-round" src="<?=$ruta;?>"/>
      <ul class="w3-ul w3-small w3-left-align">
        <li>
          Marca:
          <span class="marca">
            <?=$marca;?>
          </span>
        </li>
        <li>
          Modelo
          <span>
            <?=$modelo;?>
          </span>
        </li>
        <li>
          Transmisión
          <span>
            <?=$transmission;?>
          </span>
        </li>
        <li>
          Clasificación
          <span>
            <?=$clasificacion;?>
          </span>
        </li>
        <li>
          Condición
          <span>
            <?=$condicion;?>
          </span>
        </li>
      </ul>
      <form action="detalles_anuncio.php" method="get">
        <input name="idanuncio" type="hidden" value="<?=$idanuncio;?>"/>
        <input class="w3-btn w3-block w3-green" type="submit" value="Ver detalles"/>
      </form>
    </div>
  </div>
</div>
<?php }?>
<?php

      }
   } catch (PDOException $e) {
      echo "Error: " . $e->
         getMessage();
   }
}

function nombre_marca($id)
{
   include "../conn/conn.php";
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("SELECT nombre FROM marca WHERE idmarca=$id");
      $stmt->execute();

      $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $resultado[0]["nombre"];

   } catch (PDOException $e) {

   }
   $conn = null;

}
function nombre_modelo($id)
{
   include "../conn/conn.php";
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("SELECT nombre FROM modelo WHERE idmodelo=$id");
      $stmt->execute();

      $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $resultado[0]["nombre"];

   } catch (PDOException $e) {

   }
   $conn = null;

}

function nombre_transmision($id)
{
   include "../conn/conn.php";
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $conn->exec('set names utf8');
      $stmt = $conn->prepare("SELECT nombre FROM transmission WHERE idtransmission=$id");
      $stmt->execute();

      $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $resultado[0]["nombre"];

   } catch (PDOException $e) {

   }
   $conn = null;

}

function nombre_clasificacion($id)
{
   include "../conn/conn.php";
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("SELECT nombre FROM clasificacion WHERE idclasificacion=$id");
      $stmt->execute();

      $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $resultado[0]["nombre"];

   } catch (PDOException $e) {

   }
   $conn = null;

}

function nombre_condicion($id)
{
   $id = 1;
   include "../conn/conn.php";
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("SELECT * FROM condicion WHERE idcondicion=$id");
      $stmt->execute();

      $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $resultado[0]["nombre"];

   } catch (PDOException $e) {

   }

   $conn = null;

}
