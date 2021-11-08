<?php

function todosLosAnuncios($value = '')
{
   include "../conn/conn.php";
   try {

      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("SELECT * FROM anuncio ORDER BY idanuncio DESC;");
      $stmt->execute();
      $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
      // var_dump($resultado);
      return $resultado;
   } catch (exception $e) {

   }

}

function genera_anuncio($anuncio)
{

   busca_imagenes_anuncio($anuncio["idanuncio"], $anuncio);

}

function busca_imagenes_anuncio($idanuncio, $anuncio)
{
   // echo "ok";0

   try {
      include "../conn/conn.php";
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("SELECT * FROM imagenes WHERE idanuncio ='$idanuncio'");
      $stmt->execute();

      $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

      // var_dump($resultado);

      if (array_key_exists(0, $resultado) == 1) {
         $directorio    = $resultado[0]['nombre_directorio'];
         $nombre_imagen = $resultado[0]['ruta_imagen'];
         $ruta          = "{$directorio}/{$nombre_imagen}";
         $marca         = getNombreId("marca", "idmarca", $anuncio['idmarca']);
         $modelo        = getNombreId("modelo", "idmodelo", $anuncio['idmodelo']);
         $transmission  =
            getNombreId(
            "transmission", "idtransmission", $anuncio['idtransmission']);
         $clasificacion =
            getNombreId(
            "clasificacion", "idclasificacion", $anuncio['idclasificacion']);

         $condicion =
            getNombreId(
            "condicion", "idcondicion", $anuncio['idcondicion']);

         ?>

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

<?php

      }
   } catch (PDOException $e) {
      echo "Error: " . $e->
         getMessage();
   }
}

function getNombreId($tabla, $idnombre, $id)
{
   include "../conn/conn.php";
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("SELECT nombre FROM {$tabla} WHERE {$idnombre}=$id");
      $stmt->execute();

      $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $resultado[0]["nombre"];

   } catch (PDOException $e) {

   }
   $conn = null;

}
$anuncios  = todosLosAnuncios();
$resultado = $anuncios;

for ($i = 0; $i < count($resultado); $i++) {
// /////////////////////////////////////////////////////
   //  Controlamos los anuncios no aprebados
   if ($resultado[$i]["aprobado"] == "si") {

      // echo "aprobado {$resultado[$i]['aprobado']}";
      genera_anuncio($resultado[$i]);

   } elseif ($resultado[$i]["aprobado"] == "no") {

      // genera_anuncio($resultado[$i]);
      // echo "aprobado {$resultado[$i]['aprobado']}";
   }
// /////////////////////////////////////////////////////
   // var_dump($resultado[$i]);
   // echo "<br/>";
}
