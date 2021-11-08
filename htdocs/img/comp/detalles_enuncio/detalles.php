<?php include '../server/detalles_anuncio/detalles.php';?>
<div class="w3-container">
   <br/>
   <div class="w3-row-padding">
      <div class="w3-col s12 m6 l3">
         <img alt=" <?=$descripcion_imagen1;?>" class="w3-image" src="<?=$imagen1;?>" style="height: 200px; width: 100%;"/>
         <!-- descripcion_imagen1 -->
      </div>
      <div class="w3-col s12 m6 l3">
         <img alt=" <?=$descripcion_imagen2;?>" class="w3-image" src="<?=$imagen2;?>" style="height: 200px;width: 100%;"/>
      </div>
      <div class="w3-col s12 m6 l3">
         <img alt=" <?=$descripcion_imagen3;?>" class="w3-image" src="<?=$imagen3;?>" style="height: 200px;width: 100%;"/>
      </div>
      <div class="w3-col s12 m6 l3">
         <img alt=" <?=$descripcion_imagen4;?>" class="w3-image" src="<?=$imagen4;?>" style="height: 200px;width: 100%;"/>
      </div>
   </div>
   <div class="w3-container">
      <p>
         Nombre del vendedor :
         <span>
            <?=$nombre;?>
         </span>
      </p>
      <p>
         Telefono de contacto:
         <span>
            <?=$telefono;?>
         </span>
      </p>
      <p>
         Email de contacto :
         <span>
            <?=$email;?>
         </span>
      </p>
      <p>
         Marca del veiculo:
         <span>
            <?=$nombre_marca;?>
         </span>
      </p>
      <p>
         Modelo del veiculo  :
         <span>
            <?=$nombre_modelo;?>
         </span>
      </p>
      <p>
         Clasificacion  el vehiculo :
         <span>
            <?=$nombre_clasificacion;?>
         </span>
      </p>
      <p>
         Condicion del  veicvulo:
         <span>
            <?=$nombre_condicion;?>
         </span>
      </p>
      <p>
         Tipo de transmision :
         <span>
            <?=$nombre_transmision;?>
         </span>
      </p>
      <p>
         Pueblo :
         <span>
            <?=$nombre_pueblo;?>
         </span>
      </p>
      <p>
         Lisencia del veiculo disponible :
         <span>
            <?=$licencia;?>
         </span>
      </p>
      <p>
         Cantidad de multas :
         <span>
            <?=$multas;?>
         </span>
      </p>
      <p>
         Año del veiculo :
         <span>
            <?=$year;?>
         </span>
      </p>
      <p>
         DEscripcioon del veiculo :
         <span>
            <?=$descripcion;?>
         </span>
      </p>
      <p>
         Tiene label :
         <span>
            <?=$full_lablel;?>
         </span>
      </p>
      <p>
         Precio dle vehiculo :
         <span>
            $
            <?=$precio;?>
         </span>
      </p>
      <p>
         Se aceptan nuevas ofertas al precio:
         <span>
            <?=$mejoroferta;?>
         </span>
      </p>
   </div>
</div>
