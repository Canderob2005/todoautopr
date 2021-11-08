<?php

// var_dump(get_anuncios());

$data = get_anuncios();
// idanuncio
?>
<style type="text/css">
   .tabla_aumcio table tr td span, .tabla_aumcio table tr th {
      padding: 5px;
      width: 100%;
   }
   .tabla_aumcio table tr td span{
      margin: 15px 5px !important;
      width:  100% !important;
   }
   table{
      border-collapse: collapse !important;
   }
   .tabla_aumcio table tr th {
      width: 200px !important;
      padding: 50px !;
   }
   #btn_zona{
      width:  500px !important;
   }
</style>
<div class="w3-container tabla_aumcio ">
   <table class="w3-responsive w3-centered w3-hoverable">
      <thead>
         <tr>
            <th colspan="1" id="btn_zona">
            </th>
            <th>
               <span>
                  Nombre
               </span>
            </th>
            <th>
               <span>
                  pagado
               </span>
            </th>
            <th>
               <span>
                  direccion
               </span>
            </th>
            <th>
               <span>
                  email
               </span>
            </th>
            <th>
               <span>
                  idcategoria
               </span>
            </th>
            <th>
               <span>
                  idmodelo
               </span>
            </th>
            <th>
               <span>
                  year
               </span>
            </th>
            <th>
               <span>
                  idclasificacion
               </span>
            </th>
            <th>
               <span>
                  idcondicion
               </span>
            </th>
            <th>
               idtransmission
            </th>
            <th>
               licencia
            </th>
            <th>
               multas
            </th>
            <th>
               millage
            </th>
            <th>
               descripcion
            </th>
            <th>
               imagen
            </th>
            <th>
               full_lablel
            </th>
            <th>
               idpueblo
            </th>
            <th>
               precio
            </th>
            <th>
               mejoroferta
            </th>
         </tr>
      </thead>
      <tbody>
         <?php for ($i = 0; $i < count($data); $i++) {
   ?>
<?php
$color = "red";
   if ($data[$i]["aprobado"] == "si") {
      $color = "green";
   }?>
         <tr style=" color:<?=$color;?>;font-weight: bold;">
            <td>
               <form action="editar_anuncio.php" method="get">
                  <input class="w3-btn w3-orange" name="idanuncio" type="hidden" value="<?=$data[$i]['idanuncio'];?>"/>
                  <input class="w3-btn w3-orange" name="nombre" type="submit" value="editar"/>
               </form>
            </td>
            <td style="box-sizing: border-box !important;">
               <span style="display: block; text-align: left;padding: 0px;margin-right: 20px; width:200px !important;">
                  <?=$data[$i]["nombre"];?>
               </span>
            </td>
            <td>
               <span>
                  <?=$data[$i]["pagado"];?>
               </span>
            </td>
            <td>
               <span>
                  <?=$data[$i]["direccion"];?>
               </span>
            </td>
            <td>
               <span>
                  <?=$data[$i]["telefono"];?>
               </span>
            </td>
            <td>
               <span>
                  <?=$data[$i]["email"];?>
               </span>
            </td>
            <td>
               <span>
                  <?=$data[$i]["idcategoria"];?>
               </span>
            </td>
            <td>
               <span>
                  <?=$data[$i]["idmarca"];?>
               </span>
            </td>
            <td>
               <span>
                  <?=$data[$i]["idmodelo"];?>
               </span>
            </td>
            <td>
               <span>
                  <?=$data[$i]["year"];?>
               </span>
            </td>
            <td>
               <span>
                  <?=$data[$i]["idclasificacion"];?>
               </span>
            </td>
            <td>
               <span>
                  <?=$data[$i]["idcondicion"];?>
               </span>
            </td>
            <td>
               <span>
                  <?=$data[$i]["idtransmission"];?>
               </span>
            </td>
            <td>
               <span>
                  <?=$data[$i]["multas"];?>
               </span>
            </td>
            <td>
               <span>
                  <?=$data[$i]["descripcion"];?>
               </span>
            </td>
            <td>
               <span>
                  <?=$data[$i]["imagen"];?>
               </span>
            </td>
            <td>
               <span>
                  <?=$data[$i]["full_lablel"];?>
               </span>
            </td>
            <td>
               <span>
                  <?=$data[$i]["idpueblo"];?>
               </span>
            </td>
            <td>
               <span>
                  <?=$data[$i]["precio"];?>
               </span>
            </td>
            <td>
               <span>
                  <?=$data[$i]["mejoroferta"];?>
               </span>
            </td>
         </tr>
         <?php }?>
      </tbody>
   </table>
</div>
