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
