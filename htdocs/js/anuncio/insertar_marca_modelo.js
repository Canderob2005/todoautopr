 function insertar_marca_modelo(argument) {

  let modal_inserta_marca = document.querySelector(".modal_inserta_marca");
  let txt_marca = document.querySelector(".modal_inserta_marca .txt_marca");
  let btn_agregar_marca = document.querySelector(".seccion_marca .btn_agregar_marca");

  console.log(modal_inserta_marca);
  console.log(txt_marca);
  btn_agregar_marca.addEventListener(
    "click",
    function(argument) {

    });

 }
 //  agregar_un_modelo.addEventListener("click",
 //    function(argument) {

 //      let marca_selecionada_defecto = document.getElementById("marca_selecionada_defecto");
 //      console.log(select_modelo.value);
 //      console.log(marca_selecionada_defecto.value);
 //      if (select_modelo.value == marca_selecionada_defecto.value) {
 //        console.log('igual');
 //      } else {
 //        console.log('diferente');
 //        // console.log(select_modelo.value);
 //        let nombre_modelo_modal = document.querySelectorAll(".nombre_modelo_modal");

 //        for (var i = 0; i < option_modelo.length; i++) {

 //          if (option_modelo[i].value == select_modelo.value) {

 //            for (var j = 0; j < nombre_modelo_modal.length; j++) {
 //              nombre_modelo_modal[j].textContent = option_modelo[i].textContent.trim();
 //            }

 //          }
 //          // console.log(option_modelo[i]);
 //        }

 //        modal_insertamodelo.style.display = 'block';
 //        // incertar_marca_y_modelo();
 //        let modal_close_modelo =
 //          document.querySelector(
 //            ".modal_close_modelo"
 //          );

 //        modal_close_modelo
 //          .addEventListener("click", function(argument) {
 //            modal_insertamodelo.style.display = 'none';
 //          });

 //      }

 //    });
 //  console.log(btn_aceptar);

 //  btn_aceptar.addEventListener("click",
 //    function(argument) {

 //      alerta_marca_existe.style.display = 'none';
 //      incertar_marca_y_modelo();

 //    });

 //  btn_cancelar.addEventListener("click",
 //    function(argument) {
 //      alerta_marca_existe.style.display = 'none';
 //      modal.style.display = 'none';
 //    });

 //  aprir_inserta_marca.addEventListener("click", function(argument) {
 //    modal.style.display = 'block';

 //  });
 // }

 // function incertar_marca_y_modelo(argument) {

 //   //  Variables con los elementos a manipular 
 //   // para la inserción vehículo de no existir 
 //   let = agrega_marca = document.querySelector('.zona_agrega_marca .agrega_marca');
 //   // let = agrega_modelo = document.getElementById('agrega_modelo');
 //   let img_check = document.querySelectorAll(".img_check");

 //   let marca = agrega_marca.value;

 //   console.log(agrega_marca);
 //   console.log(img_check);

 //   function vacio(text) {
 //     text = /\b(\S+[a-zA-Z0-9.])/.exec(text);

 //     if (text === null) {
 //       return false;
 //     } else {
 //       return true;
 //     }
 //   }

 //   //  Acción según si campo vacío o no 
 //   if (vacio(marca)) {

 //     img_check[0].style.backgroundColor = "green";
 //     img_check[0].style.display = 'inline';
 //     img_check[0].src = "../img/icons/done_outline-24px.svg";

 //   } else {

 //     img_check[0].style.backgroundColor = "red";
 //     img_check[0].style.display = 'inline';
 //     img_check[0].src = "../img/icons/highlight_off-24px.svg";
 //   }

 //   //  #revisar
 //   if (vacio(marca)) {

 //     // console.log('Llenos');
 //     let datos = {
 //       fun: 'insertaMarca',
 //       marca: marca,

 //     }
 //     // let url = "../php/marca_modelo.php";
 //     /////////////////////////////////////////////////
 //     // Nota Zona de envió de datos 
 //     // $.post('../php/marca_modelo.php', datos,
 //     //   function(data, textStatus, xhr) {

 //     //   }).always(function(data, textStatus, xhr) {

 //     //   console.log(data);
 //     //   console.log(textStatus);
 //     //   console.log(xhr);

 //     //   let alerta_marca_existe = document.querySelector(".alerta_marca_existe");
 //     //   if (data == "existe") {

 //     //     alerta_marca_existe.style.display = 'block';
 //     //   } else if (data == "si") {

 //     //     // alert("insertado");
 //     //     getmarcas();
 //     //     // getmarcas(parseInt(data['id']));
 //     //     // let modal = document.getElementById('modal_marca_modelo');
 //     //     // modal.style.display = 'none';
 //     //     // getmodelo(parseInt(data['id']));

 //     //   }

 //     // });

 //     // /////////////////////////////////////////////////
 //   } else {

 //   }
 // }

 // function getmarcas(argument) {
 //   $.getJSON('../php/devuelvemarcas.php', {
 //     fun: 'getmarcas'
 //   }, function(json, textStatus) {

 //     console.log(textStatus);
 //     console.log(json);

 //     let opcion = [];

 //     let marca = document.getElementById('marca');

 //     borra_nodos(marca);
 //     opcion[0] = document.createElement("OPTION");
 //     opcion[0].value = "";
 //     opcion[0].innerHTML = "Elige una marca";
 //     opcion[0].setAttribute("selected", "");
 //     marca.appendChild(opcion[0]);

 //     for (var i = 0; i < json.length; i++) {

 //       opcion[i + 1] = document.createElement("OPTION");
 //       opcion[i + 1].value = json[i]['idmarca'];
 //       opcion[i + 1].innerHTML = json[i]['nombre'];

 //       marca.appendChild(opcion[i + 1]);

 //     }
 //     // getmodelo();
 //   });
 // }
 // function incertar_marca_y_modelo(argument) {
 //   //  Variables con los elementos a manipular  para la inserción vehículo de no existir 
 //   let = agrega_marca = document.getElementById('agrega_marca');
 //   let = agrega_modelo = document.getElementById('agrega_modelo');
 //   let img_check = document.querySelectorAll(".img_check");
 //   let marca = agrega_marca.value;
 //   let modelo = agrega_modelo.value;

 //   // console.log('===================');
 //   // console.log(marca);
 //   // console.log(modelo);
 //   // console.log('===================');
 //   // console.log('===================');
 //   // console.log(marca.length);
 //   // console.log(modelo.length);
 //   // console.log('===================');

 //   //  Verifica campo vació 
 //   //  #revisar
 //   function vacio(text) {
 //     text = /\b(\S+[a-zA-Z0-9.])/.exec(text);

 //     if (text === null) {
 //       return false;
 //     } else {
 //       return true;
 //     }
 //   }

 //   //  Acción según si campo vacío o no 
 //   if (vacio(marca)) {
 //     img_check[0].style.backgroundColor = "green";
 //     img_check[0].style.display = 'inline';
 //     img_check[0].src = "../img/icons/done_outline-24px.svg";

 //   } else {
 //     img_check[0].style.backgroundColor = "red";
 //     img_check[0].style.display = 'inline';
 //     img_check[0].src = "../img/icons/highlight_off-24px.svg";
 //   }
 //   if (vacio(modelo)) {
 //     img_check[1].style.backgroundColor = "green";
 //     img_check[1].style.display = 'inline';
 //     img_check[1].src = "../img/icons/done_outline-24px.svg";

 //   } else {

 //     img_check[1].style.backgroundColor = "red";
 //     img_check[1].style.display = 'inline';
 //     img_check[1].src = "../img/icons/highlight_off-24px.svg";
 //   }
 //   //  #revisar
 //   if (vacio(marca) && vacio(modelo)) {

 //     // console.log('Llenos');
 //     let datos = {
 //       fun: 'insertaMarcaMOdelo',
 //       marca: marca,
 //       modelo: modelo,
 //     }
 //     // let url = "../php/marca_modelo.php";
 //     // /////////////////////////////////////////////////
 //     // Nota Zona de envió de datos 
 //     // $.post('../php/marca_modelo.php', datos,
 //     //  function(data, textStatus, xhr) {

 //     //  }, "json").always(function(data, textStatus, xhr) {

 //     //  console.log(data);

 //     //  let alerta_marca_existe = document.querySelector(".alerta_marca_existe");
 //     //  if (data['respuesta'] == "existe") {

 //     //    alerta_marca_existe.style.display = 'block';
 //     //  } else if (data['respuesta'] == "si") {

 //     //    getmarcas(parseInt(data['id']));
 //     //    let modal = document.getElementById('modal_marca_modelo');
 //     //    modal.style.display = 'none';
 //     //    getmodelo(parseInt(data['id']));

 //     //  }

 //     // });

 //     // /////////////////////////////////////////////////
 //   } else {

 //   }
 // }
 // // ==============================================
 // //  Abre y cierra la ventana modal para la inserción 
 // // de vehículo no existente
 // // ==============================================
 // function cerrar_modal(argument) {
 //   let btn_cerar = document.querySelector(".modal_close");
 //   let modal = document.getElementById('modal_marca_modelo');

 //   btn_cerar.addEventListener("click", function(argument) {
 //     modal.style.display = 'none';

 // }

 // function aprir_modal(argument) {
 //   let img_check = document.querySelectorAll(".img_check");
 //   let alerta_marca_existe = document.querySelector(".alerta_marca_existe");
 //   alerta_marca_existe.style.display = 'none';
 //   for (var i = 0; i < img_check.length; i++) {
 //     img_check[i].style.display = 'none';
 //   }

 //   let aprir_inserta_marca = document.querySelector('.aprir_inserta_marca');
 //   let modal = document.getElementById('modal_marca_modelo');
 //   aprir_inserta_marca.addEventListener("click", function(argument) {
 //     modal.style.display = 'block';

 //   });
 // }

 // function getmarcas(id) {
 //  console.log('Busca marcas');
 //  $.getJSON('../php/devuelvemarcas.php', {
 //    fun: 'getmarcas'
 //  }, function(json, textStatus) {

 //  }).always(function(json, textStatus) {
 //      console.log(textStatus);
 //      console.log(json);

 //      let opcion = [];

 //      let marca = document.getElementById('marca');

 //      borra_nodos(marca);
 //      opcion[0] = document.createElement("OPTION");
 //      opcion[0].value = "";
 //      opcion[0].innerHTML = "Selecciona una Marca";
 //      opcion[0].selected = false;
 //      marca.appendChild(opcion[0]);

 //      for (var i = 0; i < json.length; i++) {

 //        opcion[i + 1] = document.createElement("OPTION");

 //        opcion[i + 1].value = json[i]['idmarca'];
 //        if (parseInt(json[i]['idmarca']) == id) {
 //          opcion[i + 1].selected = true;
 //        } else {
 //          opcion[i + 1].selected = false;
 //        }
 //        opcion[i + 1].innerHTML = json[i]['nombre'];

 //        marca.appendChild(opcion[i + 1]);

 //      }

 //      marca.disabled = true;
 //      console.log(marca.value);
 //    }

 //  );
 // }

 function borra_nodos(argument) {

  while (argument.firstChild) {

    argument.removeChild(argument.lastChild);

  }
 }

 // /////////////////////////////////////////////////
 // Nota Zona de envió de datos 
 // $.post('../php/marca_modelo.php', datos,
 //  function(data, textStatus, xhr) {

 //  }, "json").always(function(data, textStatus, xhr) {

 //  console.log(data);

 //  let alerta_marca_existe = document.querySelector(".alerta_marca_existe");
 //  if (data['respuesta'] == "existe") {

 //    alerta_marca_existe.style.display = 'block';
 //  } else if (data['respuesta'] == "si") {

 //    getmarcas(parseInt(data['id']));
 //    let modal = document.getElementById('modal_marca_modelo');
 //    modal.style.display = 'none';
 //    getmodelo(parseInt(data['id']));

 //  }

 // });

 // /////////////////////////////////////////////////