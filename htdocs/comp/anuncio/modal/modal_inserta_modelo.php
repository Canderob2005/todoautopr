<div class="w3-modal modal_inserta_modelo">
   <div class="w3-container">
      <div class="w3-modal-content w3-animate-top w3-card-4 w3-padding-32 w3-round-xxlarge">
         <header class="w3-container">
            <span class="w3-btn w3-circle w3-red w3-display-topright modal_close_modelo w3-margin" style="width: 40px; height: 40px; padding: 0px 10px 10px 10px;">
               ×
            </span>
            <div class="w3-container" style="margin-top: 30px;">
               <h4 class="w3-padding w3-center">
                  Puedes agregar un nuevo  modelo
                  <span class="nombre_modelo_modal">
                  </span>
                  a la base de datos.
               </h4>
            </div>
     <!--        <div class="w3-container w3-card-4 w3-padding-16 w3-red contenedor_mensaje" style="display: none;">
               <p class="w3-center mensaje">
                  Error! La modelo que intentas ingresar ya existe en nuestra base de datos.
               </p>
            </div> -->
                <div class="w3-panel w3-pale-yellow w3-topbar w3-bottombar w3-border-yellow contenedor_mensaje" style="display: none;">
              <p class="w3-center  mensaje">
              </p>
            </div>
         </header>
         <div class="w3-container padding_none">
            <div class="w3-row w3-section padding_none">
               <div class="w3-container padding_none w3-center">
                  <div class="w3-container modal_half zona_agrega_modelo">
                     <label class="w3-left-align" style="font-weight: bold;">
                        Nombre del modelo
                        <br/>
                        <span class="nombre_modelo_modal">
                        </span>
                     </label>
                     <input class="my_input txt_modelo" placeholder="Escribir..." type="text"/>
                     <img alt="" class="img_check display_inine imagen_alerta" src="./img/icons/done_outline-24px.svg" style="padding: 10px;border-radius: 50px;"/>
                  </div>
               </div>
            </div>
            <footer class="w3-containerfooter_modal">
               <div class="w3-container w3-center ">
                  <div class="w3-padding w3-right">
                     <button class="w3-btn w3-green btn_aceptar">
                        Agregar
                     </button>
                     <button class="w3-btn w3-red btn_calcelar">
                        Cancelar
                     </button>
                  </div>
               </div>
            </footer>
         </div>
      </div>
   </div>
</div>
