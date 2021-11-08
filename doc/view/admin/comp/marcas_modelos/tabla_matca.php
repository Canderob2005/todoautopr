<?php
include "../server/marcas_modelos/get_marcas.php";

$data = select_marcas();
?>
<!-- /home/code/Escritorio/Proyecto/todoautopr/htdocs/admin/server/marcas_modelos/get_marcas.php -->
<div class="w3-container">
   <table class="w3-table w3-striped w3-hoverable">
      <tr>
         <th class="w3-display-container" style="height: 50px;">
            <span class="w3-display-left" style="font-weight: bold;">
               <h3>
                  Nombre de la amarca
               </h3>
            </span>
         </th>
         <th colspan="2">
         </th>
      </tr>
      <br/>
      <?php for ($i = 0; $i < count($data); $i++) {?>
      <tr>
         <td class="w3-display-container" style="width:75% !important;">
            <input class="w3-display-left" disabled="" name="nombre" style="height:100%; width: 100%; border: none; background-color: transparent; font-weight:bold;color: black;" type="text" value="<?=$data[$i]['nombre'];?>"/>
         </td>
         <td>
            <form action="">
               <input class="w3-btn w3-orange" type="button" value="Editar"/>
            </form>
         </td>
         <td>
            <form action="">
               <input class="w3-btn w3-red" type="button" value="Eliminar"/>
            </form>
         </td>
      </tr>
      <?php }?>
   </table>
</div>
