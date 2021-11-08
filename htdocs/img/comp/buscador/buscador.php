<div class="w3-container">
   <div class="w3-panel w3-pale-red w3-leftbar w3-border-red w3-padding-large">
      <h2>
         Buscador en construcción
      </h2>
   </div>
</div>
<div class="w3-container">
   <h3>
      Buscador
   </h3>
</div>
<div class="w3-row ">
   <div class="w3-half w3-padding-small">
      <div class="w3-row">
         <div class="w3-half w3-padding-small">
            <input class="w3-check btn_check_marcas" style="display: inline" type="checkbox"/>
            <select class="w3-select" id="marcas" style="display: inline; width: 75%;margin-left:4px;">
               <option id="marca_selecionada_defecto" selected="" value="Selecciona una Marca">
                  Selecciona una Marca
               </option>
               <?php include '../server/marcas.php';?>
            </select>
         </div>
         <div class="w3-half w3-padding-small">
            <input class="w3-check btn_check_modelo" style="display: inline" type="checkbox"/>
            <select class="w3-select" id="modelo" style="display: inline; width: 75%;margin-left:4px;">
               <option id="marca_selecionada_defecto" selected="" value="Selecciona el modelo">
                  Selecciona el Modelo
               </option>
            </select>
            <!-- <input class="w3-input w3-border " placeholder="One" type="text"/> -->
         </div>
      </div>
   </div>
   <div class="w3-half w3-padding-small">
      <!--     <p>
         Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Ipsam, ullam aliquid minima delectus repellendus deleniti reiciendis expedita in, possimus. Rem, ratione amet esse fuga praesentium ullam laboriosam voluptates id ipsum!
      </p> -->
      <!-- <input class="w3-input w3-border" placeholder="Two" type="text"/> -->
   </div>
</div>
<!-- <div class="w3-row w3-border-bottom">
   <div class="w3-container">
      <p>
         <input class="w3-check" id="filtros" type="checkbox"/>
         <label>
            Habilita más filtros de búsqueda
         </label>
      </p>
   </div>
</div>
<div class="w3-container" style="height: 20px;">
</div> -->
<!-- <div class="w3-row-padding filtrosbtn w3-margin-top" style="display: none;">
   <div class="w3-third">
      <input class="w3-check btn_check_precio" style="display: inline; margin-right: 4px;" type="checkbox"/>
      <input style="display: inline; width: 75%;margin-left:4px;" type="number"/>
   </div>
   <div class="w3-third">
      <input class="w3-check btn_check_full_label" style="display: inline; margin-right: 4px;" type="checkbox"/>
      <p style="display:inline">
         <input checked="" class="w3-radio" name="full_lablel" style="margin-left:10px;" type="radio" value="si"/>
         <label style="margin-left:5px;">
            Si
         </label>
      </p>
      <p style="display:inline">
         <input class="w3-radio" name="full_lablel" style="margin-left:10px;" type="radio" value="no"/>
         <label style="margin-left:5px;">
            No
         </label>
      </p>
   </div>
   <div class="w3-third">
      <input class="w3-check btn_check_full_pueblo" style="display: inline" type="checkbox"/>
      <select class="w3-select" style="display: inline; width: 40%;margin-left:4px;">
         <option selected="" value="">
            Selecciona un Pueblo
         </option>
         <?php // include_once '../server/pueblos.php';;;;?>
      </select>
   </div>
   <div class="w3-third">
      <input class="w3-check btn_check_transmision" style="display: inline" type="checkbox"/>
      <select class="w3-select" style="display: inline; width: 40%;margin-left:4px;">
         <option selected="" value="">
            Seleccione la transmisión
         </option>
         <?php // include_once '../server/transmissiones.php';;;;?>
      </select>
   </div>
   <div class="w3-third">
      <input class="w3-check btn_check_condicion" style="display: inline" type="checkbox"/>
      <select class="w3-select" style="display: inline; width: 40%;margin-left:4px;">
         <option selected="" value="">
            Selecciona la condición
         </option>
         <option value="1">
            Nuevo
         </option>
         <option value="2">
            Usado
         </option>
      </select>
   </div>
   <div class="w3-third">
      <input class="w3-check btn_check_clasificacion" style="display: inline" type="checkbox"/>
      <select class="w3-select" style="display: inline; width: 40%;margin-left:4px;">
         <option selected="" value="">
            Selecciona la clasificación
         </option>
         <?php // include_once '../server/condicion.php';;;?>
      </select>
   </div>
</div> -->
<button class="w3-btn w3-block buscar w3-green" style="margin-top: 25px;" type="button">
   Buscar
</button>
<div id="despliega_resultados">
</div>