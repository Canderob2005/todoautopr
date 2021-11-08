<?php

devualve_anuncio_por_id(json_decode($_GET['idanuncio']));

function devualve_anuncio_por_id($id = '')
{
   // $post_id = '%' . $id . '%';
   $post_id = '%' . $id . '%';
   // $post_id = $id . '%';
   include "../../../../conn/conn.php";

   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->
         setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("SELECT * FROM anuncio WHERE CONVERT(idanuncio, CHAR) LIKE :idanuncio");

      // $stmt = $conn->prepare("SELECT * FROM anuncio WHERE idanuncio= $id");
      // $stmt = $conn->prepare("SELECT * FROM anuncio");
      $stmt->bindParam(':idanuncio', $post_id);
      $stmt->execute();

      // set the resulting array to associative
      // $result    = $stmt->setFetchMode(PDO::FETCH_ASSOC);
      $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

      for ($i = 0; $i < count($resultado); $i++) {
         generaHtml($resultado[$i]);
      }

   } catch (PDOException $e) {
      // echo "error";
   }
   $conn = null;

}
?>



<?php

// Función trabaja la devolución de los anuncios en HTML
// para acelerar el poseso de despliega

function generaHtml($value = '')
{?>
<tr>
   <td>
      <form action="editar_anuncio.php" method="get">
         <input class="w3-btn w3-orange" name="idanuncio" type="hidden" value="<?=$value['idanuncio'];?>"/>
         <input class="w3-btn w3-orange" name="nombre" type="submit" value="editar"/>
      </form>
   </td>
   <td style="box-sizing: border-box !important;">
      <span style="display: block; text-align: left;padding: 0px;margin-right: 20px; width:200px !important;">
         <?=$value["nombre"];?>
      </span>
   </td>
   <td>
      <span>
         <?=$value["pagado"];?>
      </span>
   </td>
   <td>
      <span>
         <?=$value["direccion"];?>
      </span>
   </td>
   <td>
      <span>
         <?=$value["telefono"];?>
      </span>
   </td>
   <td>
      <span>
         <?=$value["email"];?>
      </span>
   </td>
   <td>
      <span>
         <?=$value["idcategoria"];?>
      </span>
   </td>
   <td>
      <span>
         <?=$value["idmarca"];?>
      </span>
   </td>
   <td>
      <span>
         <?=$value["idmodelo"];?>
      </span>
   </td>
   <td>
      <span>
         <?=$value["year"];?>
      </span>
   </td>
   <td>
      <span>
         <?=$value["idclasificacion"];?>
      </span>
   </td>
   <td>
      <span>
         <?=$value["idcondicion"];?>
      </span>
   </td>
   <td>
      <span>
         <?=$value["idtransmission"];?>
      </span>
   </td>
   <td>
      <span>
         <?=$value["multas"];?>
      </span>
   </td>
   <td>
      <span>
         <?=$value["descripcion"];?>
      </span>
   </td>
   <td>
      <span>
         <?=$value["imagen"];?>
      </span>
   </td>
   <td>
      <span>
         <?=$value["full_lablel"];?>
      </span>
   </td>
   <td>
      <span>
         <?=$value["idpueblo"];?>
      </span>
   </td>
   <td>
      <span>
         <?=$value["precio"];?>
      </span>
   </td>
   <td>
      <span>
         <?=$value["mejoroferta"];?>
      </span>
   </td>
</tr>
<?php }?>


