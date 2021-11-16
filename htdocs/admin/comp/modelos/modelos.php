<?php
include "./server/modelo/get_modelo.php";
include "./server/select/select.php";

$data = get_modelos();
// var_dump($data);

?>
<!-- /home/code/Escritorio/Proyecto/todoautopr/htdocs/admin/server/marcas_modelos/get_marcas.php -->
<div class="w3-container">
  <table class="w3-table w3-striped w3-hoverable">
    <tr>
      <th class="w3-display-container" style="height: 50px;">
        <span class="w3-display-left" style="font-weight: bold;">
          <h4>
            Mdelo
          </h4>
        </span>
        <th class="w3-display-container" style="height: 50px;">
          <span class="w3-display-left" style="font-weight: bold;">
            <h4>
              Clasificacion
            </h4>
          </span>
        </th>
        <th class="w3-display-container" style="height: 50px;">
          <span class="w3-display-left" style="font-weight: bold;">
            <h4>
              Marca
            </h4>
          </span>
        </th>
        <th>
        </th>
      </th>
    </tr>
    <br/>
    <?php for ($i = 0; $i < count($data); $i++) {?>
    <tr>
      <td class="w3-display-container" style="width:10% !important;">
        <input class="w3-display-left" disabled="" name="nombre" style="height:100%; width: 100%; border: none; background-color: transparent; font-weight:bold;color: black;" type="text" value="<?=$data[$i]['nombre_modelo'];?>"/>
      </td>
      <td class="w3-display-container" style="width:10% !important;">
        <select class="select_categoria" style="width:85%;" value="<?=$data[$i]['idcategoria'];?>">
          <!-- $data[$i]['idcategoria'] -->
          <?php genera_select($data[$i]['idcategoria'], "idcategoria", "categoria");?>
        </select>
      </td>
      <td class="w3-display-container " style="width:10% !important;">
        <input class="w3-display-left" disabled="" name="nombre" style="height:100%; width: 100%; border: none; background-color: transparent; font-weight:bold;color: black;" type="text" value="<?=$data[$i]['nombre_marca'];?>"/>
      </td>
      <td width="1%">
        <form action="">

          <input class="w3-btn w3-green" type="button" value="Actualizar"/>
        </form>
      </td>
    </tr>
    <?php }?>
  </table>
</div>
