<div class="w3-modal" id="modal_marca_modelo">
   <header class="w3-container">
      <div class="w3-modal-content w3-animate-top w3-card-4 w3-padding-32 w3-round-xxlarge">
         <header class="w3-container">
            <span class="w3-btn w3-circle w3-red w3-display-topright modal_close w3-margin" style="width: 40px; height: 40px; padding: 0px 10px 10px 10px;">
               ×
            </span>
            <div class="w3-container" style="margin-top: 30px;">
               <h4 class="w3-padding w3-center">
                  Zona para agregar modelo y marca nuevo la base de datos
               </h4>
            </div>
            <div class="w3-container w3-card-4 w3-padding-16 w3-red alerta_marca_existe">
               <p class="w3-center">
                  Error! La marca que intentas ingresar ya existe en nuestra base de datos.
               </p>
            </div>
         </header>
         <div class="w3-container padding_none">
            <div class="w3-row w3-section padding_none">
               <div class="w3-container padding_none w3-center">
                  <div class="w3-container modal_half">
                     <label class="w3-left-align" style="font-weight: bold;">
                        Agrega el nombre de la marca
                     </label>
                     <input class="my_input" id="agrega_marca" placeholder="Escribir..." type="text"/>
                     <img alt="" class="img_check display_inine" src="../img/icons/done_outline-24px.svg" style="padding: 10px;border-radius: 50px;"/>
                  </div>
                  <div class="w3-container modal_half">
                     <label class="w3-left-align" style="font-weight: bold;">
                        Agrega el modelo de la marca
                     </label>
                     <input class="my_input" id="agrega_modelo" placeholder="Escribir... " type="text"/>
                     <img alt="" class="img_check display_inine" src="../img/icons/highlight_off-24px.svg" style="padding: 10px;border-radius: 50px;"/>
                  </div>
               </div>
            </div>
            <footer class="w3-containerfooter_modal">
               <div class="w3-container w3-center ">
                  <div class="w3-padding w3-right">
                     <button class="w3-btn w3-green" id="btn_marca_modelo">
                        Agregar
                     </button>
                     <button class="w3-btn w3-red">
                        Cancelar
                     </button>
                  </div>
               </div>
            </footer>
         </div>
      </div>
   </header>
</div>
