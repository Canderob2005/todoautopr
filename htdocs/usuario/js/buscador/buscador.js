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

  buscar.addEventListener("click", function(argument) {

    // Se debe definir una variable que determine la función 
    // de devolución de llamada en le servidor o generar algoritmo que determine 
    // la búsqueda cuando se incrementen los criterios. 

    // let formData = new FormData();

    // formData.append('idmarca', marcas.value);
    // formData.append('idmodelo', modelo.value);



    let datos = {

      idmarca: marcas.value,
      idmodelo: modelo.value,

    }

    // Assign handlers immediately after making the request,
    // and remember the jqxhr object for this request

    $.ajax({
      dataType: "json",
      url: "../server/buscador1.php",
      data: datos,
      success: function(resultado) {
        console.log(resultado);
        let anuncios = [];
        for (var i = 0; i < resultado.length; i++) {
          genera_anuncio_card(resultado[i], i);
          anuncios.push(targeta_anuncio(resultado[i]));
        }

        let despliega_resultados = document.getElementById("despliega_resultados");

        while (despliega_resultados.firstChild) {

          despliega_resultados.removeChild(despliega_resultados.firstChild);
        }

        for (var i = 0; i < anuncios.length; i++) {

          despliega_resultados.appendChild(anuncios[i]);
        }

      }
    });

    // $.getJSON("../server/buscador1.php", datos,
    //    function(json, textStatus) {
    //       // ....
    //    }).always(function(json, textStatus) {
    //    let resultado = json;

    //    console.log("finished");
    //    console.log(textStatus);
    //    console.log(resultado);

    //    let anuncios = [];
    //    for (var i = 0; i < resultado.length; i++) {
    //       genera_anuncio_card(resultado[i], i);
    //       anuncios.push(targeta_anuncio(resultado[i]));
    //    }

    //    let despliega_resultados = document.getElementById("despliega_resultados");

    //    while (despliega_resultados.firstChild) {

    //       despliega_resultados.removeChild(despliega_resultados.firstChild);
    //    }

    //    for (var i = 0; i < anuncios.length; i++) {

    //       despliega_resultados.appendChild(anuncios[i]);
    //    }


    // });

    // Perform other work here ...

    // Set another completion function for the request above

    // $.ajax({
    //     url: '../server/buscador.php',
    //     type: 'POST',
    //     data: datos,
    //     contentType: "json"
    // }).done(function() {

    //     console.log("success");

    // }).fail(function(error) {

    //     console.log(error);

    // }).always(function(resultado) {

    // ========================================================
    // console.log(resultado);


    // const datos_anuncio = resultado;
    // const datos_anuncio = JSON.parse(resultado);
    // console.log(datos_anuncio);
    //  =======================================================================
    //  Convertir el objeto en una matriz  para recorrerla 
    // function Objeto_array(argument) {
    //     return Object.entries(argument);
    // }
    // console.log(Object.keys(datos_anuncio[0]));

    // var nombre = Object.keys(datos_anuncio[0]);
    // console.log(datos_anuncio[0]['idanuncio']);
    //  Cuantos registros tenemos 

    // console.log(datos_anuncio.length);

    // let div_principal_anuncio = [];
    // let div_fila = [];
    // let div_panel = [];

    // // element 1 nesesita un h2 y un p
    // let div_titulo_seccion = [];
    // // element 1 nesesita un elementyo img
    // let div_img_seccion = [];


    // // element 1  div row 1  2 secciones div primera con varias p segunda para boron y precio
    // let div_datos_cuerpo_seccion = [];
    // let anuncios = [];
    // for (var i = 0; i < datos_anuncio.length; i++) {
    //     // div_principal_anuncio.push(Creara_elemento("DIV"));
    //     // div_fila.push(Creara_elemento("DIV"));
    //     genera_anuncio_card(datos_anuncio[i], i);
    //     anuncios.push(targeta_anuncio(datos_anuncio[i]));
    // }
    // let despliega_resultados = document.getElementById("despliega_resultados");

    // while (despliega_resultados.firstChild) {
    //     despliega_resultados.removeChild(despliega_resultados.firstChild);
    // }
    // for (var i = 0; i < anuncios.length; i++) {
    //     despliega_resultados.appendChild(anuncios[i]);
    // }

    function genera_anuncio_card(element, indice) {
      console.log('-----------------------');
      console.log('anuncio # ' + (indice + 1));
      console.log('=======================');
      // console.log("xxxxxxx"+element);
      console.log("idanuncio = " + element['idanuncio']);
      console.log("nombre = " + element['nombre']);
      console.log("pagado = " + element['pagado']);
      console.log("direccion = " + element['direccion']);
      console.log("telefono = " + element['telefono']);
      console.log("email = " + element['email']);
      console.log("idcategoria = " + element['idcategoria']);
      console.log("nombre_categoria = " + element['nombre_categoria']);
      // nombre_categoria
      console.log("idmarca = " + element['idmarca']);
      console.log("nombre_marca = " + element['nombre_marca']);
      console.log("idmodelo = " + element['idmodelo']);
      console.log("nombre_modelo = " + element['nombre_modelo']);
      console.log("year = " + element['year']);
      console.log("idclasificacion = " + element['idclasificacion']);
      console.log("nombre_clasificacion = " + element['nombre_clasificacion']);
      console.log("idcondicion = " + element['idcondicion']);
      console.log("nombre_condicion = " + element['nombre_condicion']);
      console.log("idtransmission = " + element['idtransmission']);
      console.log("nombre_trasmission = " + element['nombre_trasmission']);
      console.log("licencia= = " + element['licencia']);
      console.log("multas = " + element['multas']);
      console.log("millage = " + element['millage']);
      console.log("descripcion = " + element['descripcion']);
      console.log("imagen = " + element['imagen']);
      console.log("full_lablel = " + element['full_lablel']);
      console.log("idpueblo = " + element['idpueblo']);
      console.log("nombre_pueblo = " + element['nombre_pueblo']);
      console.log("precio = " + element['precio']);
      console.log("mejoroferta = " + element['mejoroferta']);
      //                                          
      console.log("descripcion_imagen = " + element['descripcion_imagen']);
      console.log("nombre_directorio = " + element['nombre_directorio']);
      console.log("ruta_imagen = " + element['ruta_imagen']);
      //                                          
      // for (var i = 0; i < element[0].length; i++) {
      //     console.log("imagen #" + (i + 1) + " " + element[0][i]["ruta_imagen"]);
      // }
      console.log('=======================');

      // return targeta_anuncio(element);

      console.log('=======================');
    }


    // function crea(argument) {
    //     return document.createElement(datos);
    // }

    function targeta_anuncio(element) {


      console.log(element);

      let contenedor = document.createElement("DIV");

      let contenedor_row = document.createElement("DIV");
      let cabecera_panel_targeta = document.createElement("DIV");

      let cabecera_targeta_descripcion_seccion1 = document.createElement("DIV");
      let cabecera_targeta_descripcion_seccion1_H2 = document.createElement("H2");
      let cabecera_targeta_descripcion_seccion1_p = document.createElement("P");

      let cabecera_targeta_descripcion_seccion2 = document.createElement("DIV");
      let cabecera_targeta_descripcion_seccion2_img = document.createElement("IMG");

      let cabecera_targeta_descripcion_seccion3 = document.createElement("DIV");
      let cabecera_targeta_descripcion_seccion3_row = document.createElement("DIV");

      let cabecera_targeta_descripcion_seccion3_row_col1 = document.createElement("DIV");
      let cabecera_targeta_descripcion_seccion3_row_col2 = document.createElement("DIV");

      let cabecera_targeta_descripcion_seccion3_row_col2_row = document.createElement("DIV");

      let cabecera_targeta_descripcion_seccion3_row_col2_row_col = document.createElement("DIV");

      let cabecera_targeta_descripcion_seccion3_row_col2_row_col_h2 = document.createElement("H4");

      // =====================================================================
      //  elemento de  formulario 
      let form_element = document.createElement("FORM");
      let input_hiden = document.createElement("INPUT");
      let cabecera_targeta_descripcion_seccion3_row_col2_row_col_btn =
        document.createElement("INPUT");
      form_element.action = "detalles_anuncio.php";
      form_element.method = "get";

      input_hiden.setAttribute("type", "hidden");
      input_hiden.setAttribute("value", element["idanuncio"]);
      input_hiden.setAttribute("name", "idanuncio");
      cabecera_targeta_descripcion_seccion3_row_col2_row_col_btn
        .setAttribute("type", "submit");
      // =====================================================================

      // cabecera_targeta_descripcion_seccion3_row.appendChild(cabecera_targeta_descripcion_seccion3_row_col1);
      // let cabecera_targeta_descripcion_seccion2_descripcion_targeta =
      //     document.createElement("DIV");
      let p_data = [];
      for (var i = 0; i <= 4; i++) {
        p_data.push(document.createElement("P"));

        for (var x = 0; x <= 1; x++) {
          p_data[i].appendChild(document.createElement("SPAN"));
        }

        cabecera_targeta_descripcion_seccion3_row_col1.appendChild(p_data[i]);
      }


      console.log(p_data[0]);
      console.log(p_data[0].childNodes[0]);
      console.log(p_data[0].childNodes[1]);

      p_data[0]
        .childNodes[0]
        .textContent =
        "Marca: ";

      p_data[0]
        .childNodes[1]
        .textContent =
        element['nombre_marca'];

      p_data[1]
        .childNodes[0]
        .textContent =
        "Modelo: ";

      p_data[1]
        .childNodes[1]
        .textContent =
        element['nombre_modelo'];

      p_data[2]
        .childNodes[0]
        .textContent =
        "Transmisión: ";

      p_data[2]
        .childNodes[1]
        .textContent =
        element['nombre_trasmission'];


      p_data[3]
        .childNodes[0]
        .textContent =
        "Clasificación: ";

      p_data[3]
        .childNodes[1]
        .textContent =
        element['nombre_clasificacion'];

      p_data[4]
        .childNodes[0]
        .textContent =
        "Condición: ";

      p_data[4]
        .childNodes[1]
        .textContent =
        element['nombre_condicion'];
      // console.log(p_data[0][0]);
      // console.log(p_data[0][1]);

      contenedor.classList.add(
        "w3-container", "w3-card-4", "w3-padding-large", "w3-margin");
      contenedor_row.classList.add("w3-row");
      cabecera_panel_targeta.classList.add(
        "w3-panel", "cabecera_targeta");

      cabecera_targeta_descripcion_seccion1.style.width = "30%";
      cabecera_targeta_descripcion_seccion1.style.paddingBottom = "10px";

      cabecera_targeta_descripcion_seccion1_H2.textContent = element['nombre_marca'];

      cabecera_targeta_descripcion_seccion2.classList.add(
        "w3-mobile", "w3-col");
      cabecera_targeta_descripcion_seccion2.style.width = "30%";

      cabecera_targeta_descripcion_seccion2_img.classList.add(
        "w3-image", "image_border");
      cabecera_targeta_descripcion_seccion2_img.style.height = "25%";
      cabecera_targeta_descripcion_seccion2_img.style.width = "75%";
      cabecera_targeta_descripcion_seccion2_img.src =
        element["nombre_directorio"] + "/" + element["ruta_imagen"];


      cabecera_targeta_descripcion_seccion1_p.textContent = element["descripcion"];
      //  seccion 3
      cabecera_targeta_descripcion_seccion3.classList.add(
        "w3-rest", "w3-mobile");
      cabecera_targeta_descripcion_seccion3_row.classList.add(
        "w3-row");
      //  seccion 3 cilubna  1
      cabecera_targeta_descripcion_seccion3_row_col1.classList.add(
        "w3-mobile", "w3-col", "descripcion_targeta");
      cabecera_targeta_descripcion_seccion3_row_col1.style.width = "50%";
      cabecera_targeta_descripcion_seccion3_row_col1.style.paddingLeft = "20px";

      // seccion 3 colubna 2
      cabecera_targeta_descripcion_seccion3_row_col2
        .classList.add(
          "w3-mobile", "w3-col");
      cabecera_targeta_descripcion_seccion3_row_col2
        .style.which = "100%";
      cabecera_targeta_descripcion_seccion3_row_col2
        .style.paddingTop = "20px";
      cabecera_targeta_descripcion_seccion3_row_col2_row
        .classList.add("w3-row");

      cabecera_targeta_descripcion_seccion3_row_col2_row_col
        .classList.add(
          "w3-movile", "w3-col", "w3-right");
      cabecera_targeta_descripcion_seccion3_row_col2_row_col
        .style.width =
        "50%";


      cabecera_targeta_descripcion_seccion3_row_col2_row_col_h2.classList.add(
        "w3-right");
      cabecera_targeta_descripcion_seccion3_row_col2_row_col_h2.textContent =
        "$ " + element['precio'];

      cabecera_targeta_descripcion_seccion3_row_col2_row_col_btn.classList.add(
        "w3-button", "w3-green", "w3-right");
      cabecera_targeta_descripcion_seccion3_row_col2_row_col_btn.style.width = "100%";
      cabecera_targeta_descripcion_seccion3_row_col2_row_col_btn.value = "Ver detalles";

      //  Definiciones appendChild
      contenedor.appendChild(
        contenedor_row);
      contenedor_row.appendChild(
        cabecera_panel_targeta);

      cabecera_panel_targeta.appendChild(
        cabecera_targeta_descripcion_seccion1);
      //  seccion 1
      cabecera_targeta_descripcion_seccion1.appendChild(
        cabecera_targeta_descripcion_seccion1_H2);
      cabecera_targeta_descripcion_seccion1.appendChild(
        cabecera_targeta_descripcion_seccion1_p);

      //  secion 2
      cabecera_targeta_descripcion_seccion2.appendChild(
        cabecera_targeta_descripcion_seccion2_img);
      cabecera_panel_targeta.appendChild(
        cabecera_targeta_descripcion_seccion2);
      cabecera_panel_targeta.appendChild(
        cabecera_targeta_descripcion_seccion3);

      // seccion 3
      cabecera_targeta_descripcion_seccion3.appendChild(
        cabecera_targeta_descripcion_seccion3_row);
      cabecera_targeta_descripcion_seccion3_row.appendChild(
        cabecera_targeta_descripcion_seccion3_row_col1);
      cabecera_targeta_descripcion_seccion3_row.appendChild(
        cabecera_targeta_descripcion_seccion3_row_col2);


      cabecera_targeta_descripcion_seccion3_row_col2
        .appendChild(
          cabecera_targeta_descripcion_seccion3_row_col2_row);

      cabecera_targeta_descripcion_seccion3_row_col2_row.appendChild(
        cabecera_targeta_descripcion_seccion3_row_col2_row_col);


      cabecera_targeta_descripcion_seccion3_row_col2_row_col.appendChild(
        cabecera_targeta_descripcion_seccion3_row_col2_row_col_h2);

      cabecera_targeta_descripcion_seccion3_row_col2_row_col.appendChild(
        form_element);
      form_element.appendChild(
        input_hiden);
      form_element.appendChild(
        cabecera_targeta_descripcion_seccion3_row_col2_row_col_btn);

      // console.log(xxxxxxxxxxxxxxxxx);


      return contenedor;

    }



  });


 }
 check_box_select();