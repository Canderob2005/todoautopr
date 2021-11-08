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
            <!-- <input class="w3-check btn_check_marcas" style="display: inline" type="checkbox"/> -->
            <select class="w3-select" id="marcas" style="display: inline; width: 75%;margin-left:4px;">
               <option id="marca_selecionada_defecto" selected="" value="Selecciona una Marca">
                  Selecciona una Marca
               </option>
               <?php include '../server/marcas.php';?>
            </select>
         </div>
         <div class="w3-half w3-padding-small">
            <!-- <input class="w3-check btn_check_modelo" style="display: inline" type="checkbox"/> -->
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
   </div>
</div>
<button class="w3-btn w3-block buscar w3-green" style="margin-top: 25px;" type="button">
   Buscar
</button>
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
   /*position: relative;*/
   /*top: 20px; left: 125px;*/
   margin-top: 20px;
   height:150px;
   width:75%;
   /*margin-left: 30%;*/
   }
</style>
<div class="w3-container">
   <div class="w3-row-padding w3-section w3-stretch">
      <div id="despliega_resultados">
      </div>
   </div>
</div>
