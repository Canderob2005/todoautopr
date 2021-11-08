<?php // include '../server/detalles_anuncio/detalles.php';?>
<?php include '../../server/detalles_anuncio/detalles.php';
	$imagen1="https://pbs.twimg.com/profile_images/1437892388152922118/WNBkYb7E_400x400.jpg";	$imagen2="https://pbs.twimg.com/profile_images/1437892388152922118/WNBkYb7E_400x400.jpg";	$imagen3="https://pbs.twimg.com/profile_images/1437892388152922118/WNBkYb7E_400x400.jpg";	$imagen4="https://pbs.twimg.com/profile_images/1437892388152922118/WNBkYb7E_400x400.jpg";
?>
<link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet"/>
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
   .detalle_anuncio_p p{
   	line-height: 20% !important;
   }
   .targeta{
   	margin-top: 15px;
   }
   .detalle_anuncio_p{
   	margin-top: 25px;
   	padding-top: 10px;
   }
</style>
<div class="w3-container">
   <br/>
   <!-- <div class="w3-row-padding"> -->
   <div class="w3-row">
      <div class="w3-col s12 m6 l3 targeta">
         <div class="w3-container w3-center">
            <div class="w3-card-4">
               <img alt="<?=$descripcion_imagen1;?>" class="w3-image" src="<?=$imagen1;?>" style="height: 200px; width: 90%; padding: 0px; margin:10px !important;"/>
               <!-- descripcion_imagen1 -->
            </div>
         </div>
      </div>
      <div class="w3-col s12 m6 l3 targeta">
         <div class="w3-container w3-center">
            <div class="w3-card-4">
               <img alt="<?=$descripcion_imagen2;?>" class="w3-image" src="<?=$imagen2;?>" style="height: 200px;width: 90%; padding: 0px; margin:10px !important;"/>
            </div>
         </div>
      </div>
      <div class="w3-col s12 m6 l3 targeta">
         <div class="w3-container w3-center">
            <div class="w3-card-4">
               <img alt="<?=$descripcion_imagen3;?>" class="w3-image" src="<?=$imagen3;?>" style="height: 200px;width: 90%; padding: 0px; margin:10px !important;"/>
            </div>
         </div>
      </div>
      <div class="w3-col s12 m6 l3 targeta">
         <div class="w3-container w3-center">
            <div class="w3-card-4">
               <img alt="<?=$descripcion_imagen4;?>" class="w3-image" src="<?=$imagen4;?>" style="height: 200px;width: 90%; padding: 0px; margin:10px !important;"/>
            </div>
         </div>
      </div>
   </div>
   <div class="w3-container detalle_anuncio_p w3-border-top">
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
