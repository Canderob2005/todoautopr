<?php include '../server/detalles_anuncio/detalles.php';?>
<div class="w3-container">
   <br/>
   <div class="w3-row-padding">
      <div class="w3-col s12 m6 l3">
         <img alt="<?=$descripcion_imagen1;?>" class="w3-image" src="<?=$imagen1;?>" style="height: 200px; width: 100%;"/>
         <!-- descripcion_imagen1 -->
      </div>
      <div class="w3-col s12 m6 l3">
         <img alt="<?=$descripcion_imagen2;?>" class="w3-image" src="<?=$imagen2;?>" style="height: 200px;width: 100%;"/>
      </div>
      <div class="w3-col s12 m6 l3">
         <img alt="<?=$descripcion_imagen3;?>" class="w3-image" src="<?=$imagen3;?>" style="height: 200px;width: 100%;"/>
      </div>
      <div class="w3-col s12 m6 l3">
         <img alt="<?=$descripcion_imagen4;?>" class="w3-image" src="<?=$imagen4;?>" style="height: 200px;width: 100%;"/>
      </div>
   </div>
   <div class="w3-container">
      <p>
         Marca:
         <span>
            <?=$nombre_marca;?>
         </span>
      </p>
      <p>
         Modelo:
         <span>
            <?=$nombre_modelo;?>
         </span>
      </p>
      <p>
         Año del vehículo:
         <span>
            <?=$year;?>
         </span>
      </p>
      <p>
         Millaje:
         <span>
            <?=$millaje;?>
         </span>
      </p>
      <p>
         Precio:
         <span>
            $
            <?=$precio;?>
         </span>
      </p>
      <p>
         <?=$mejoroferta;?>
      </p>
      <p>
         Clasificación del vehículo:
         <span>
            <?=$nombre_clasificacion;?>
         </span>
      </p>
      <p>
         Condición vehículo:
         <span>
            <?=$nombre_condicion;?>
         </span>
      </p>
      <p>
         Tipo de transmisión:
         <span>
            <?=$nombre_transmision;?>
         </span>
      </p>
      <p>
         Registro a mi nombre:
         <span>
            <?=$licencia;?>
         </span>
      </p>
      <p>
         Tiene multas:
         <span>
            <?=$multas;?>
         </span>
      </p>
      <p>
         Full labels:
         <span>
            <?=$full_lablel;?>
         </span>
      </p>
      <p>
         Nombre contacto:
         <span>
            <?=$nombre;?>
         </span>
      </p>
      <p>
         Teléfono de contacto:
         <span>
            <?=$telefono;?>
         </span>
      </p>
      <p>
         E-mail de contacto:
         <span>
            <?=$email;?>
         </span>
      </p>
      <p>
         Pueblo:
         <span>
            <?=$nombre_pueblo;?>
         </span>
      </p>
   </div>
</div>
