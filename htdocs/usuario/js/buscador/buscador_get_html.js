 // const server = "../php/buscador.php";
 // let filtros = document.getElementById('filtros');
 // filtros.checked = false;

 function borra_nodos(argument) {

  while (argument.firstChild) {

    argument.removeChild(argument.lastChild);

  }
 }

 function filtros(argument) {

  let filtrosbtn = document.querySelector(".filtrosbtn");
  // filtrosbtn.style.display = "none";

  let filtros = document.getElementById('filtros');

  if (filtros.checked) {
    filtros.checked = false;
  }

  filtros.addEventListener("click", function(argument) {
    let filtrosbtn = document.querySelector(".filtrosbtn");
    if (this.checked == true) {
      filtrosbtn.style.display = "";
    } else if (this.checked == false) {
      filtrosbtn.style.display = "none";
    }
    // console.log(this.checked);
  });
 }
 // Filtros 
 // =======================
 // filtros();
 // =======================
 let marca = document.getElementById('marcas');

 marca.addEventListener("change", function(argument) {

  // NOTA : trabajar sección 
  // console.log(this.value);
  // let btn_check_marcas = document.querySelector('.btn_check_marcas');

  // if (this.value == "Selecciona una Marca") {
  //     btn_check_marcas.checked = "false";
  // } else {
  //     btn_check_marcas.checked = "true";
  // }

  let id = this.value;
  // console.log(id);

  $.getJSON('../server/getmodelos.php', {
    fun: 'getmodelo',
    id: id,
  }, function(json, textStatus) {

  }).always(function(json, textStatus) {
    // console.log(textStatus);
    // console.log(json);

    let opcion = [];

    let modelo = document.getElementById('modelo');

    borra_nodos(modelo);
    opcion[0] = document.createElement("OPTION");
    opcion[0].value = "";
    opcion[0].innerHTML = "Selecciona el modelo";
    opcion[0].selected = true;
    modelo.appendChild(opcion[0]);

    for (var i = 0; i < json.length; i++) {

      opcion[i + 1] = document.createElement("OPTION");
      opcion[i + 1].value = json[i]['idmodelo'];

      opcion[i + 1].selected = false;

      opcion[i + 1].innerHTML = json[i]['nombre'];

      modelo.appendChild(opcion[i + 1]);

    }
    // modelo.disabled = true;
  });
 });

 function check_box_select(argument) {

  let check_box = document.querySelectorAll('[type="checkbox"]');
  // console.log(check_box);

  let buscar = document.querySelector(".buscar");
  // console.log(buscar);
  let marcas = document.getElementById("marcas");
  let modelo = document.getElementById("modelo");

  marcas.addEventListener("change", function(argument) {
    let datos = {
      idmarca: marcas.value,
    }

    // Assign handlers immediately after making the request,
    // and remember the jqxhr object for this request

    $.ajax({
      dataType: "html",
      // url: "../server/buscador1.php",
      url: "../server/buscador/busca_marca.php",
      data: datos,
      success: function(resultado) {
        console.log(resultado);
        // /home/code/Escritorio/Proyecto/todoautopr/htdocs/server/buscador/test.php
        let despliega_resultados =
          document.getElementById(
            "despliega_resultados"
          );
        despliega_resultados.innerHTML = "";
        despliega_resultados.innerHTML = resultado;
      }
    });
  });

  modelo.addEventListener("change", function(argument) {

    let datos = {

      idmarca: marcas.value,
      idmodelo: modelo.value,

    }

    // Assign handlers immediately after making the request,
    // and remember the jqxhr object for this request

    $.ajax({
      dataType: "html",
      // url: "../server/buscador1.php",
      url: "../server/buscador/test.php",
      data: datos,
      success: function(resultado) {
        console.log(resultado);
        // /home/code/Escritorio/Proyecto/todoautopr/htdocs/server/buscador/test.php
        let despliega_resultados =
          document.getElementById(
            "despliega_resultados"
          );
        despliega_resultados.innerHTML = "";
        despliega_resultados.innerHTML = resultado;
      }
    });


  });


  // buscar.addEventListener("click", function(argument) {

  //   // Se debe definir una variable que determine la función 
  //   // de devolución de llamada ne le servidor o generar algoritmo que determine 
  //   // la búsqueda cuando se incrementen los criterios. 

  //   let datos = {

  //     idmarca: marcas.value,
  //     idmodelo: modelo.value,

  //   }

  //   // Assign handlers immediately after making the request,
  //   // and remember the jqxhr object for this request

  //   $.ajax({
  //     dataType: "html",
  //     // url: "../server/buscador1.php",
  //     url: "../server/buscador/test.php",
  //     data: datos,
  //     success: function(resultado) {
  //       console.log(resultado);
  //       // /home/code/Escritorio/Proyecto/todoautopr/htdocs/server/buscador/test.php
  //       let despliega_resultados =
  //         document.getElementById(
  //           "despliega_resultados"
  //         );
  //       despliega_resultados.innerHTML = resultado;
  //     }
  //   });


  // });


 }
 check_box_select();