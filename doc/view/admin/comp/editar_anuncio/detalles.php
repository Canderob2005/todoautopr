<style type="text/css">
   .xxxxx div  {
      text-align: left;
      padding: 10px;
   }   .xxxxx div input,.xxxxx div select{
      text-align: left;
      margin-bottom: 30px;
        height: 40px;
   }
</style>
<!--  Ver aplicacion  -->
<!-- https://developer.mozilla.org/en-US/docs/Web/API/URLSearchParams -->
<div class="w3-row xxxxx">
   <div class="w3-bar">
      <input class="w3-btn w3-green w3-right" name="actualizar" type="button" value="Actuaizar"/>
      <input class="w3-btn w3-red w3-right" name="elimunar" style="margin-left:10px;" type="button" value="eliminar"/>
   </div>
</div>
<div class="w3-row formulario_editar xxxxx">
   <div class="w3-col" style="width:33%">
      <label class="w3-text-blue">
         <b>
            nombre
         </b>
      </label>
      <input class="w3-input w3-border nombre" name="nombre" type="text" value="<?=$nombre;?>"/>
      <label class="w3-text-blue">
         <b>
            telefono
         </b>
      </label>
      <input class="w3-input w3-border telefono" name="telefono" type="numeric" value="<?=$telefono;?>"/>
      <label class="w3-text-blue">
         <b>
            email
         </b>
      </label>
      <input class="w3-input w3-border email" name="email" type="text" value="<?=$email;?>"/>
      <label class="w3-text-blue">
         <b>
            Categoria
         </b>
      </label>
      <select class="w3-select idcategoria" name="idcategoria">
         <?php genera_select($idcategoria, "idcategoria", "categoria");?>
      </select>
      <label class="w3-text-blue">
         <b>
            Marca
         </b>
      </label>
      <select class="w3-select idmarca" name="idmarca">
         <?php genera_select($didmarca, "idmarca", "marca");?>
      </select>
      <label class="w3-text-blue">
         <b>
            Modelo
         </b>
      </label>
      <select class="w3-select idmodelo" name="idmodelo">
         <?php genera_select($idmodelo, "idmodelo", "modelo");?>
      </select>
   </div>
   <div class="w3-col" style="width:33%">
      <label class="w3-text-blue">
         <b>
            year
         </b>
      </label>
      <input class="w3-input w3-border year" name="year" type="text" value="<?=$year;?>"/>
      <label class="w3-text-blue">
         <b>
            Clasificacion
         </b>
      </label>
      <select class="w3-select idclasificacion" name="idclasificacion">
         <?php genera_select($idclasificacion, "idclasificacion", "clasificacion");?>
      </select>
      <label class="w3-text-blue">
         <b>
            Transmission
         </b>
      </label>
      <select class="w3-select idtransmission" name="idtransmission">
         <?php genera_select($idtransmission, "idtransmission", "transmission");?>
      </select>
      <label class="w3-text-blue">
         <b>
            multas
         </b>
      </label>
      <select class="w3-select multas" name="multas">
         <?php include "multas.php";?>
      </select>
      <label class="w3-text-blue">
         <b>
            full_lablel
         </b>
      </label>
      <select class="w3-select full_lablel" name="full_lablel">
         <?php include "full_lablel.php";?>
      </select>
      <label class="w3-text-blue">
         <b>
            Pueblo
         </b>
      </label>
      <select class="w3-select idpueblo" name="idpueblo">
         <?php genera_select($idpueblo, "idpueblo", "pueblo");?>
      </select>
   </div>
   <div class="w3-col" style="width:33%">
      <label class="w3-text-blue">
         <b>
            mejoroferta
         </b>
      </label>
      <select class="w3-select mejoroferta" name="mejoroferta">
         <?php include "mejoroferta.php";?>
      </select>
      <label class="w3-text-blue">
         <b>
            aprobado
         </b>
      </label>
      <select class="w3-select aprobado" name="aprobado">
         <?php include "aprobado.php";?>
      </select>
      <label class="w3-text-blue">
         <b>
            descripcion
         </b>
      </label>
      <textarea class="w3-select descripcion">
         <?=$descripcion;?>
      </textarea>
   </div>
</div>
<!-- <input name="btn_actualizar" style="display: none" type="submit"/> -->
<form action="" id="formulario_eliminar">
   <input name="idanuncio" type="hidden" value="<?=$idanuncio;?>"/>
</form>
<form action="" id="formulario_editar">
   <input class="idanuncio" name="idanuncio" type="hidden" value="<?=$idanuncio;?>"/>
   <input class="nombre" name="nombre" type="hidden" value="<?=$nombre;?>"/>
   <input class="pagado" name="pagado" type="hidden" value="<?=$pagado;?>"/>
   <input class="direccion" name="direccion" type="hidden" value="<?=$direccion;?>"/>
   <input class="telefono" name="telefono" type="hidden" value="<?=$telefono;?>"/>
   <input class="email" name="email" type="hidden" value="<?=$email;?>"/>
   <input class="idcategoria" name="idcategoria" type="hidden" value="<?=$idcategoria;?>"/>
   <input class="idmarca" name="idmarca" type="hidden" value="<?=$idmarca;?>"/>
   <input class="idmodelo" name="idmodelo" type="hidden" value="<?=$idmodelo;?>"/>
   <input class="year" name="year" type="hidden" value="<?=$year;?>"/>
   <input class="idclasificacion" name="idclasificacion" type="hidden" value="<?=$idclasificacion;?>"/>
   <input class="idcondicion" name="idcondicion" type="hidden" value="<?=$idcondicion;?>"/>
   <input class="idtransmission" name="idtransmission" type="hidden" value="<?=$idtransmission;?>"/>
   <input class="licencia" name="licencia" type="hidden" value="<?=$licencia;?>"/>
   <input class="multas" name="multas" type="hidden" value="<?=$multas;?>"/>
   <input class="millage" name="millage" type="hidden" value="<?=$millage;?>"/>
   <input class="descripcion" name="descripcion" type="hidden" value="<?=$descripcion;?>"/>
   <input class="imagen" name="imagen" type="hidden" value="<?=$imagen;?>"/>
   <input class="full_lablel" name="full_lablel" type="hidden" value="<?=$full_lablel;?>"/>
   <input class="idpueblo" name="idpueblo" type="hidden" value="<?=$idpueblo;?>"/>
   <input class="precio" name="precio" type="hidden" value="<?=$precio;?>"/>
   <input class="mejoroferta" name="mejoroferta" type="hidden" value="<?=$mejoroferta;?>"/>
   <input class="aprobado" name="aprobado" type="hidden" value="<?=$aprobado;?>"/>
</form>
