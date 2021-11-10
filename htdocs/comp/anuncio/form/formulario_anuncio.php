<!-- <form action="../server/anuncio.php" autocomplete="off" method="POST"> -->
<div class="contenedor_formulario" style="display:none">
  <form autocomplete="off" method="POST">
    <!-- <form> -->
    <div class="w3-col s12 m12 l4">
      <div class="w3-row">
        <div class="w3-col">
          <div class="w3-row">
            <!--  Completado etiquetas descriptivas  -->
            <div class="w3-col borde_nombre bordes_seciones w3-panel">
              <div class="w3-margin-bottom">
                <label aria-label="nombre" class="form-label" for="nombre">
                  Nombre y Apellido:
                </label>
                <br/>
                <input aria-describedby="nombre" class="form-control w3-input" id="nombre" name="nombre" required="" type="text"/>
              </div>
            </div>
            <!--  Completado -->
            <div class="w3-col borde_pagado bordes_seciones w3-panel">
              <span class="w3-padding-large w3-margin-right">
                Anuncio pagado
              </span>
              <br/>
              <div class="form-check form-check-inline">
                <input aria-describedby="pagado1" class="pagado w3-radio" id="pagado1" name="pagado" required="" type="radio" value="si"/>
                <label class="form-check-label" for="pagado1">
                  Si
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input aria-describedby="pagado2" class="pagado w3-radio" id="pagado2" name="pagado" required="" type="radio" value="no"/>
                <label class="form-check-label" for="pagado2">
                  No
                </label>
              </div>
            </div>
            <!--  Completado -->
            <!-- ========================== pueblo -->
            <div class="w3-col borde_pueblo bordes_seciones w3-panel">
              <div class="mb-3 mt-3">
                <label aria-label="pueblo" class="form-label" for="pueblo">
                  Pueblo:
                </label>
                <select aria-describedby="pueblo" class="form-control w3-input" id="pueblo" name="pueblo" required="">
                  <option selected="" value="">
                    Selecciona un Pueblo
                  </option>
                  <?php include './server/pueblos.php';?>
                </select>
              </div>
            </div>
            <!-- ========================== pueblo -->
            <!--  Completado -->
            <div class="w3-col bordes_seciones w3-panel borde_telefono">
              <div class="form-group">
                <label aria-label="telefono" class="form-label" for="telefono">
                  Teléfono:
                </label>
                <br/>
                <input class="form-control w3-input" id="telefono" name="telefono" pattern="[0-9]{10}" placeholder="Foramato requerido ( 0123456789 )" required="" style="width: 100%" type="tel"/>
              </div>
            </div>
            <!--  Completado -->
            <div class="w3-col bordes_seciones w3-panel borde_correo">
              <div class="form-group">
                <label aria-label="correo" class="form-label" for="correo">
                  Correo Electrónico:
                </label>
                <input aria-describedby="correo" class="form-control w3-input" id="correo" name="correo" required="" type="email"/>
              </div>
            </div>
          </div>
        </div>
        <div class="mb-3 w3-col">
          <div class="w3-row">
            <div class="w3-col borde_categoria bordes_seciones w3-panel">
              <div class="form-group">
                <label aria-label="categoria" class="form-label" for="categoria">
                  Categoria:
                </label>
                <select aria-describedby="categoria" class="form-control w3-input" id="categoria" name="categoria" required="">
                  <option selected="" value="">
                    Selecciona una Categoria
                  </option>
                  <?php include './server/select/categorias.php';?>
                </select>
              </div>
            </div>
            <!--  Completado -->
            <!-- ///////////////////////////////////////////// -->
            <!-- ////////////////////////////////////////////

               /////////////////////////////////////////////////

               -----------------------------------------------------
               Sector critico para la amanipulacion de una insercion
               anonima  por parte del usuario
               ----------------------------------------------------

               -->
            <div class="w3-col contenedor_marcas_modelos">
              <div class="w3-row">
                <div class="w3-col pb-3 seccion_marca">
                  <div class="w3-row">
                    <div class="w3-col bordes_seciones w3-panel borde_marca">
                      <div class="form-group">
                        <label aria-label="marca" class="form-label" for="marca">
                          Elige Marca"De no existir favort de agregarla marca a la base de datos":
                        </label>
                        <select aria-describedby="marca" class="form-control w3-input select_marca" id="marca" name="marca">
                          <option id="marca_selecionada_defecto" selected="" value="Selecciona una Marca">
                            Selecciona una Marca
                          </option>
                          <?php include './server/marcas.php';?>
                        </select>
                      </div>
                      <!-- =============================================== -->
                      <input class="form-control w3-btn w3-orange btn_agregar_marca" name="" style="width: 100%;" type="button" value="Agregar una marca si no existe"/>
                      <!-- <input  disabled="" type="text"/> -->
                      <!-- =============================================== -->
                    </div>
                  </div>
                </div>
                <div class="w3-col">
                  <div class="w3-row">
                    <div class="mb-3 w3-col bordes_seciones w3-panel borde_modelo">
                      <div class="form-group">
                        <label aria-label="modelo" class="form-label" for="modelo">
                          Modelo:
                        </label>
                        <select class="form-control w3-input select_modelo" id="modelo" name="modelo" required="">
                        </select>
                      </div>
                      <!-- ============================================================== -->
                      <input class="form-control w3-btn w3-orange agregar_un_modelo" name="" style="width: 100%;" type="button" value="Agregar un modelo si no existe"/>
                      <!-- ============================================================== -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /////////////////////////////////////////////

               ////////////////////////////////////////////////





               -->
            <!-- //////////////////////////////////////////// -->
            <!-- Completado -->
            <div class="w3-col mb-3 bordes_seciones w3-panel borde_year">
              <label aria-label="year" class="form-label" for="year">
                Año:
              </label>
              <br/>
              <!--   <input aria-describedby="year" class="form-control w3-input" id="year" name="year" required="" type="text"/> -->
              <?php include "./server/select/ano.php";?>
            </div>
          </div>
          <div class="w3-row">
            <!--  Completado -->
            <div class="w3-col bordes_seciones w3-panel borde_clasificacion">
              <div class="form-group">
                <label aria-label="clasificacion" class="form-label" for="clasificacion">
                  Clasificación:
                </label>
                <select aria-describedby="clasificacion" class="form-control w3-input" id="clasificacion" name="clasificacion" required="">
                  <option selected="" value="">
                    Selecciona la Clasificación
                  </option>
                  <option value="1">
                    Nuevo
                  </option>
                  <option value="2">
                    Usado
                  </option>
                </select>
              </div>
            </div>
            <!--  Completado -->
            <div class="w3-col bordes_seciones w3-panel borde_condicion">
              <div class="form-group">
                <label aria-label="condicion" class="form-label" for="condicion">
                  Condición:
                </label>
                <select aria-describedby="condicion" class="form-control w3-input" id="condicion" name="condicion" required="">
                  <option selected="" value="">
                    Selecciona la Condición
                  </option>
                  <?php include './server/select/condicion.php';?>
                </select>
              </div>
            </div>
            <!-- Completado -->
            <div class="w3-col bordes_seciones w3-panel borde_transmision">
              <div class="form-group">
                <label aria-label="transmision" class="form-label" for="transmision">
                  Transmisión:
                </label>
                <select aria-describedby="transmision" class="form-control w3-input" id="transmision" name="transmision" required="">
                  <option selected="" value="">
                    Seleccione la transmisión
                  </option>
                  <?php include './server/select/transmissiones.php';?>
                </select>
              </div>
            </div>
          </div>
          <div class="w3-row">
            <div class="w3-col bordes_seciones w3-panel borde_licencia">
              <span class="w3-padding-large w3-margin-right">
                A mi nombre
              </span>
              <br/>
              <div class="form-check form-check-inline">
                <input class="licencia w3-radio" id="licencia1" name="licencia" required="" type="radio" value="si"/>
                <label class="form-check-label" for="licencia1">
                  Si
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="licencia w3-radio" id="licencia2" name="licencia" required="" type="radio" value="no"/>
                <label class="form-check-label" for="licencia2">
                  No
                </label>
              </div>
              <br/>
              <br/>
            </div>
            <div class="w3-col bordes_seciones w3-panel borde_full_label">
              <span class="w3-padding-large w3-margin-right">
                Full lablel
              </span>
              <br/>
              <div class="form-check form-check-inline">
                <input class="w3-radio full_lablel" id="full_lablel1" name="full_lablel" required="" type="radio" value="si"/>
                <label class="form-check-label" for="full_lablel1">
                  Si
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="w3-radio full_lablel" id="full_lablel2" name="full_lablel" required="" type="radio" value="no"/>
                <label class="form-check-label" for="full_lablel2">
                  No
                </label>
              </div>
              <br/>
              <br/>
            </div>
            <div class="w3-col bordes_seciones w3-panel borde_multas">
              <span class="w3-padding-large w3-margin-right">
                Multas
              </span>
              <br/>
              <div class="form-check form-check-inline">
                <input class="w3-radio multas" id="multas1" name="multas" required="" type="radio" value="si"/>
                <label class="form-check-label" for="multas1">
                  Si
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="w3-radio multas" id="multas2" name="multas" required="" type="radio" value="no"/>
                <label class="form-check-label" for="multas2">
                  No
                </label>
              </div>
              <br/>
            </div>
          </div>
          <div class="w3-row">
            <div class="w3-col pt-3 bordes_seciones w3-panel borde_millaje">
              <label aria-label="millaje" class="w3-margin-right" for="millaje">
                Millaje:
              </label>
              <input aria-describedby="millaje" class="form-control w3-input" id="millaje" name="millaje" required="" type="tel"/>
            </div>
            <div class="w3-col pt-3 bordes_seciones w3-panel borde_precio">
              <label aria-label="precio" class="w3-margin-right" for="precio">
                Precio:
              </label>
              <br/>
              <div class="form-check form-check-inline btnprecio">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <span style="height: 20px; font-size: 20px;">
                        $
                      </span>
                    </div>
                  </div>
                  <input aria-describedby="precio" class="form-control w3-input" id="precio" name="precio" required="" type="tel"/>
                </div>
              </div>
            </div>
            <div class="mb-3 w3-col bordes_seciones w3-panel borde_precio_final">
              <div class="form-check form-check-inline">
                <input class="w3-radio precio_final" id="precio_final1" name="statusprecio" required="" type="radio" value="si"/>
                <label class="form-check-label" for="precio_final1">
                  Precio final
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="w3-radio precio_final" id="precio_final2" name="statusprecio" required="" type="radio" value="no"/>
                <label class="form-check-label" for="precio_final2">
                  Mejor oferta
                </label>
              </div>
            </div>
            <div class="mb-3 w3-col bordes_seciones w3-panel borde_descripcion">
              <div class="mb-3 mt-3">
                <label aria-label="descripcion" class="form-label" for="descripcion">
                  Descripción:
                </label>
                <textarea aria-describedby="descripcion" class="form-control w3-input" id="descripcion" name="descripcion" required="" rows="3">
                </textarea>
              </div>
            </div>
          </div>
          <div class="w3-row">
            <div class="w3-col">
              <div class="mb-12 w3-col">
                <div class="custom-file">
                  <input accept="image/*" class="custom-file-input border" id="agregar_multiple" multiple="" name="imagen" type="file"/>
                  <label class="custom-file-label" for="imagen">
                    Seleccione una imagen
                  </label>
                </div>
                <!-- Miniaturas
                        Elementos que realmente se envían al servidor están ocultos.
                     -->
                <div class="">
                  <input accept="image/*" id="imagenes" multiple="" style="display: none;" type="file"/>
                  <input accept="image/*" id="imagen1" name="imagen1" style="display: none;" type="file"/>
                  <input accept="image/*" id="imagen2" name="imagen2" style="display: none;" type="file"/>
                  <input accept="image/*" id="imagen3" name="imagen3" style="display: none;" type="file"/>
                  <input accept="image/*" id="imagen4" name="imagen4" style="display: none;" type="file"/>
                  <!-- <input id="agregar_multiple" name="" type="button" value="Agregar imagenes"/> -->
                  <!--    <div id="display">
                        </div> -->
                </div>
              </div>
            </div>
          </div>
          <div class="w3-row">
            <div class="w3-col">
              <div class="w3-row">
                <div class="w3-col s12 m12 l12 w3-container w3-stretch" style="padding-right: 0px;padding-left: 0px;margin-right: 0px;margin-left: 0px;">
                  <!--
                        Miniaturas

                        Contenedor para las cajas de miniaturas
                        -->
                  <div class="w3-row-padding w3-margin-top">
                    <div class="w3-col s3 l3 m3 img_caja_contenedor">
                      <div class="w3-card-4">
                        <img class="img_display" src="./img/icons/fondo.jpeg" style="width:100%;height: 60px;"/>
                        <div class="w3-container" style="height: 25px; padding:2px">
                          <span class="w3-left w3-red w3-card-4" id="remove1" style="margin: 2px 2px 2px 5px; padding: 0px 5px 0px 5px; font-size: 10px; border-radius: 100px;">
                            x
                          </span>
                          <span class="w3-right w3-green w3-card-4" id="add1" style="margin: 2px 5px 2px 2px; padding: 0px 5px 0px 5px; font-size: 10px; border-radius: 100px;">
                            x
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="w3-col s3 l3 m3 img_caja_contenedor">
                      <div class="w3-card-4">
                        <img class="img_display" src="./img/icons/fondo.jpeg" style="width:100%;height: 60px;"/>
                        <div class="w3-container" style="height: 25px; padding:2px">
                          <span class="w3-left w3-red w3-card-4" id="remove2" style="margin: 2px 2px 2px 5px; padding: 0px 5px 0px 5px; font-size: 10px; border-radius: 100px;">
                            x
                          </span>
                          <span class="w3-right w3-green w3-card-4" id="add2" style="margin: 2px 5px 2px 2px; padding: 0px 5px 0px 5px; font-size: 10px; border-radius: 100px;">
                            x
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="w3-col s3 l3 m3 img_caja_contenedor">
                      <div class="w3-card-4">
                        <img class="img_display" src="./img/icons/fondo.jpeg" style="width:100%;height: 60px;"/>
                        <div class="w3-container" style="height: 25px; padding:2px">
                          <span class="w3-left w3-red w3-card-4" id="remove3" style="margin: 2px 2px 2px 5px; padding: 0px 5px 0px 5px; font-size: 10px; border-radius: 100px;">
                            x
                          </span>
                          <span class="w3-right w3-green w3-card-4" id="add3" style="margin: 2px 5px 2px 2px; padding: 0px 5px 0px 5px; font-size: 10px; border-radius: 100px;">
                            x
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="w3-col s3 l3 m3 img_caja_contenedor">
                      <div class="w3-card-4">
                        <img class="img_display" src="./img/icons/fondo.jpeg" style="width:100%;height: 60px;"/>
                        <div class="w3-container" style="height: 25px; padding:2px">
                          <span class="w3-left w3-red w3-card-4" id="remove4" style="margin: 2px 2px 2px 5px; padding: 0px 5px 0px 5px; font-size: 10px; border-radius: 100px;">
                            x
                          </span>
                          <span class="w3-right w3-green w3-card-4" id="add4" style="margin: 2px 5px 2px 2px; padding: 0px 5px 0px 5px; font-size: 10px; border-radius: 100px;">
                            x
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="w3-row" style="margin-top: 25px;">
            <div class="w3-col">
              <input class="w3-btn w3-green btn-success float-right" id="enviar" style="width: 100%;" type="button" value="Enviar"/>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
