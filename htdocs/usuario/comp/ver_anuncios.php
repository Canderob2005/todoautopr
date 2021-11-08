<!-- <link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet"/> -->
<div class="w3-container w3-card-4 w3-padding-large w3-margin">
   <!-- -->
   <div class="w3-row">
      <div class="w3-panel cabecera_targeta">
         <div class="" style="width:30%;padding-bottom: 10px;">
            <h2 class="marca">
               <?=$marca;?>
            </h2>
            <p class="idanuncio">
               descripcion
            </p>
         </div>
         <div class="w3-mobile w3-col" style="width: 30%;">
            <img alt="" class="w3-image image_border" src="<?=$ruta;?>" style="height:40%; width: 100%;"/>
         </div>
         <div class="w3-rest w3-mobile" style="">
            <div class="w3-row">
               <div class="w3-mobile w3-col descripcion_targeta" style="width:50%; padding-left: 20px;">
                  <p>
                     Marca:
                     <span class="marca">
                        <?=$marca;?>
                     </span>
                  </p>
                  <p>
                     Modelo
                     <span>
                        <?=$modelo;?>
                     </span>
                  </p>
                  <p>
                     Transmisión
                     <span>
                        <?=$transmission;?>
                     </span>
                  </p>
                  <p>
                     Clasificación
                     <span>
                        <?=$clasificacion;?>
                     </span>
                  </p>
                  <p>
                     Condición
                     <span>
                        <?=$condicion;?>
                     </span>
                  </p>
               </div>
               <!-- ========================== -->
               <div class="w3-mobile w3-col" style="width:100%;padding-top: 20px;">
                  <div class="w3-row">
                     <div class="w3-mobile w3-col w3-right" style="width:50%">
                        <h2 class="w3-right">
                           <?=$anuncio['precio'];?>
                        </h2>
                        <button class="w3-button w3-green w3-right" style="width: 100%;">
                           Ver detalles
                        </button>
                     </div>
                  </div>
               </div>
               <!-- ========================== -->
            </div>
         </div>
      </div>
   </div>
</div>
<div class="w3-col s12 m4 l3">
   <div class="w3-card w3-margin">
      <img class="w3-round" src="<?=$ruta;?>"/>
      <ul class="w3-ul w3-small">
         <li class="marca">
            <?=$marca;?>
         </li>
         <li>
            Marca:
            <span class="marca">
               <?=$marca;?>
            </span>
         </li>
         <li>
            Modelo
            <span>
               <?=$modelo;?>
            </span>
         </li>
         <li>
            Transmisión
            <span>
               <?=$transmission;?>
            </span>
         </li>
         <li>
            Clasificación
            <span>
               <?=$clasificacion;?>
            </span>
         </li>
         <li>
            Condición
            <span>
               <?=$condicion;?>
            </span>
         </li>
      </ul>
      <button class="w3-btn w3-block w3-green">
         Button
      </button>
   </div>
</div>