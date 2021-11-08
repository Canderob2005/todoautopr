// function ValidateEmail(inputText) {
//     var mailformat =
//         /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
//     if (inputText.value.match(mailformat)) {

//         return true;

//     } else {

//         return false;
//     }
// }

// localStorage.clear();


// ==================================================================================

// ==================================================================================
// function test(respuesta) {

//     if (storageAvailable('localStorage')) {

//         console.log(respuesta);

//         // localStorage.setItem("id", respuesta.idusuario);

//         // var usuario = localStorage.getItem("id");

//         console.log(usuario);

//         console.log('si');

//     } else {
//         console.log('no');
//     }

// }

// var table = document.querySelector('table'), 
//     table_meta_container = table.querySelector('thead'), 
//     table_data_container = table.querySelector('tbody'),
//     data = [
//   { 'firstName': 'Scooby', 'lastName': 'Doo', 'birth': 1969 }, 
//   { 'firstName': 'Yogi', 'lastName': 'Bear', 'birth': 1958 }, 
//   { 'firstName': 'Tom', 'lastName': 'Cat', 'birth': 1940 }, 
//   { 'firstName': 'Jerry', 'lastName': 'Mouse', 'birth': 1940 }, 
//   { 'firstName': 'Fred', 'lastName': 'Flintstone', 'birth': 1960 }
// ], n = data.length;
 
// var createTable = function(src) {
//   var frag = document.createDocumentFragment(), 
//       curr_item, curr_p;
   
//   for(var i = 0; i < n; i++) {
//     curr_item = document.createElement('tr');
//     curr_item.classList.add(((i%2 === 0)?'odd':'even'));
//     data[i].el = curr_item;
     
//     for(var p in data[i]) {
//       if(p !== 'el') {
//         curr_p = document.createElement('td');
//         curr_p.classList.add('prop__value');
//         curr_p.dataset.propName = p;
//         curr_p.textContent = data[i][p];
//         curr_item.appendChild(curr_p)
//       }
//     }
     
//     frag.appendChild(curr_item);
//   }
   
//   table_data_container.appendChild(frag);
// };
 
// var sortTable = function(entries, type, dir) {  
//   entries.sort(function(a, b) { 
//     if(a[type] < b[type]) return -dir;
//     if(a[type] > b[type]) return dir;
//     return 0;
//   });
   
//   table.dataset.sortBy = type;
   
//   for(var i = 0; i < n; i++) {
//     entries[i].el.style.order = i + 1;
     
//     if((i%2 === 0 &amp;&amp; entries[i].el.classList.contains('even')) || 
//        (i%2 !== 0 &amp;&amp; entries[i].el.classList.contains('odd'))) {
//       entries[i].el.classList.toggle('odd');
//       entries[i].el.classList.toggle('even');
//     }
//   }
// };
 
// createTable(data);
 
// table_meta_container.addEventListener('click', function(e) {
//   var t = e.target;
   
//   if(t.classList.contains('prop__name')) {
//     if(!t.dataset.dir) { t.dataset.dir = 1; }
//     else { t.dataset.dir *= -1; }
     
//     sortTable(data, t.dataset.propName, t.dataset.dir);
//   }
// }, false);



// function paginate(totalItems: number,
//     currentPage: number = 1,
//     pageSize: number = 10,
//     maxPages: number = 10) {
//     // calculate total pages
//     let totalPages = Math.ceil(totalItems / pageSize);

//     // ensure current page isn't out of range
//     if (currentPage < 1) {
//         currentPage = 1;
//     } else if (currentPage > totalPages) {
//         currentPage = totalPages;
//     }

//     let startPage: number, endPage: number;
//     if (totalPages <= maxPages) {
//         // total pages less than max so show all pages
//         startPage = 1;
//         endPage = totalPages;
//     } else {
//         // total pages more than max so calculate start and end pages
//         let maxPagesBeforeCurrentPage = Math.floor(maxPages / 2);
//         let maxPagesAfterCurrentPage = Math.ceil(maxPages / 2) - 1;
//         if (currentPage <= maxPagesBeforeCurrentPage) {
//             // current page near the start
//             startPage = 1;
//             endPage = maxPages;
//         } else if (currentPage + maxPagesAfterCurrentPage >= totalPages) {
//             // current page near the end
//             startPage = totalPages - maxPages + 1;
//             endPage = totalPages;
//         } else {
//             // current page somewhere in the middle
//             startPage = currentPage - maxPagesBeforeCurrentPage;
//             endPage = currentPage + maxPagesAfterCurrentPage;
//         }
//     }

//     // calculate start and end item indexes
//     let startIndex = (currentPage - 1) * pageSize;
//     let endIndex = Math.min(startIndex + pageSize - 1, totalItems - 1);

//     // create an array of pages to ng-repeat in the pager control
//     let pages = Array.from(Array((endPage + 1) - startPage).keys()).map(i => startPage + i);

//     // return object with all pager properties required by the view
//     return {
//         totalItems: totalItems,
//         currentPage: currentPage,
//         pageSize: pageSize,
//         totalPages: totalPages,
//         startPage: startPage,
//         endPage: endPage,
//         startIndex: startIndex,
//         endIndex: endIndex,
//         pages: pages
//     };
// }

// export = paginate;

// Chequea slice(),
// page_size = 10
// index = 0
// while (index < json_array.length){
// json_array.slice(index, page_size + index)
// Index = page_size
// }
// Y terminas con un arreglo de páginas las cuales tienen hasta max 10 elementos.


    btn.addEventListener("click", function(event) {

    
        $.ajax({
                url: "insert.php",
                type: "POST", 
                data: capturavalores(),
             
                contentType: false,
                cache: false,
                processData: false,
              
                success: function(data) {
                 
                    var res = JSON.parse(data);
                
                    if (res.respuesta == "si") {
                 
                        swal({
                            title: "Perfecto!!",
                            text: "Registro Insertado",
                            icon: "success",
                        });

                    } else if (res.respuesta == "no") {
                    
                        swal({
                            title: "Error",
                            text: "Verifique si ingreso los datos correctamente ",
                            icon: "error",
                        });
                    }
                }

            }).done(function(data) {
                //  cuando la data se envió podemos escribir funciones aquí 
            })
            .fail(function(data) {
                //  Si hay algún fallo  podemos escribir funciones aquí 
            });
        // =================================================

    })



// ================================================================

function capturavalores(argument) {



let nombre = document.getElementById("nombre");
let pagado1 = document.getElementById("pagado1");
let pagado2 = document.getElementById("pagado2");
let direccion = document.getElementById("direccion");
let telefono = document.getElementById("telefono");
let correo = document.getElementById("correo");
let categoria = document.getElementById("categoria");
let marca = document.getElementById("marca");
let modelo = document.getElementById("modelo");
let year = document.getElementById("year");
let clasificacion = document.getElementById("clasificacion");
let condicion = document.getElementById("condicion");
let transmision = document.getElementById("transmision");
let licencia1 = document.getElementById("licencia1");
let licencia2 = document.getElementById("licencia2");
let multas1 = document.getElementById("multas1");
let multas2 = document.getElementById("multas2");

let millaje = document.getElementById("millaje");
let descripcion = document.getElementById("descripcion");
let imagen = document.getElementById("imagen");

    // =============================================================

    //  Falta colocar comentarios sobre  implementar el uso de [FormData();] para enviar datos al servidor 
    let formData = new FormData();
    // Funciona agregando valores a la instancia de FormData() usando método append()
    formData.append('nombreOferta', );
    formData.append('descripcionOferta',);
    formData.append('precio', );
    formData.append('fechavigencia', );   formData.append('nombreOferta', );
    formData.append('descripcionOferta',);
    formData.append('precio', );
    formData.append('fechavigencia', );   formData.append('nombreOferta', );
    formData.append('descripcionOferta',);
    formData.append('precio', );
    formData.append('fechavigencia', );   formData.append('nombreOferta', );
    formData.append('descripcionOferta',);
    formData.append('precio', );
    formData.append('fechavigencia', );   formData.append('nombreOferta', );
    formData.append('descripcionOferta',);
    formData.append('precio', );
    formData.append('fechavigencia', );   formData.append('nombreOferta', );
    formData.append('descripcionOferta',);
    formData.append('precio', );
    formData.append('fechavigencia', );


    return formData;

}   $.ajax({
                url: "insert.php", // La url a la que se enviaran los datos 
                type: "POST", // Método de envío de datos 
                data: capturavalores(),
                // la data que enviaremos al servidor , en este caso con una función
                // Verificar funcionamiento de la función para comprender los datos que aquí se envían 
                // --------------------
                // Los siguientes parámetros deben estar en falso para poder enviar 
                // ficheros multimedia al servidor 

                // contentType: false,
                // cache: false,
                // processData: false,
                // 
                contentType: false,
                cache: false,
                processData: false,
                //  Este parámetro tiene la función que se ejecutara cuando el envío sea exitoso
                success: function(data) {
                    //  Se recibe la data devuelta por el servidor a esta función anónima 
                    var res = JSON.parse(data);
                    //  condicional si la respuesta es  si hace algo y si es to hace algo 
                    if (res.respuesta == "si") {
                        //  Función  de swet alert
                        swal({
                            title: "Perfecto!!",
                            text: "Registro Insertado",
                            icon: "success",
                        });

                    } else if (res.respuesta == "no") {
                        //  Función  de swet alert
                        swal({
                            title: "Error",
                            text: "Verifique si ingreso los datos correctamente ",
                            icon: "error",
                        });
                    }
                }

            }).done(function(data) {
                //  cuando la data se envió podemos escribir funciones aquí 
            })
            .fail(function(data) {
                //  Si hay algún fallo  podemos escribir funciones aquí 
            });
        // =================================================


        // Restricts input for the given textbox to the given inputFilter.
function setInputFilter(textbox, inputFilter) {
  ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
    textbox.addEventListener(event, function() {
      if (inputFilter(this.value)) {
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      } else {
        this.value = "";
      }
    });
  });
}


// Install input filters.
setInputFilter(document.getElementById("intTextBox"), function(value) {
  return /^-?\d*$/.test(value); });
setInputFilter(document.getElementById("uintTextBox"), function(value) {
  return /^\d*$/.test(value); });
setInputFilter(document.getElementById("intLimitTextBox"), function(value) {
  return /^\d*$/.test(value) && (value === "" || parseInt(value) <= 500); });
setInputFilter(document.getElementById("floatTextBox"), function(value) {
  return /^-?\d*[.,]?\d*$/.test(value); });
setInputFilter(document.getElementById("currencyTextBox"), function(value) {
  return /^-?\d*[.,]?\d{0,2}$/.test(value); });
setInputFilter(document.getElementById("latinTextBox"), function(value) {
  return /^[a-z]*$/i.test(value); });
setInputFilter(document.getElementById("hexTextBox"), function(value) {
  return /^[0-9a-f]*$/i.test(value); });


//  Llamadas funciiones anuncio.js

cleartexarea();

selectInput();

getmarcas();

getclasificacion();

getcondicion();

getpueblo();

gettransmision();

marcaNoesiste();

modeloNoexista();

getCategoria();

activaform();



// =============================================

$.getJSON( "example.json", function() {
  console.log( "success" );
})
  .done(function() {
    console.log( "second success" );
  })
  .fail(function() {
    console.log( "error" );
  })
  .always(function() {
    console.log( "complete" );
  });

// =============================================


// function ValidateEmail(inputText) {
//     var mailformat =
//         /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
//     if (inputText.value.match(mailformat)) {

//         return true;

//     } else {

//         return false;
//     }
// }


    // ================================================================================================
    // 
    // ===========================================================================================

    function borra_nodos(argument) {

    while (argument.firstChild) {

        argument.removeChild(argument.lastChild);

    }
}

function clearInput(argument) {
    let cajas = document.querySelectorAll("textarea, input");

    for (var i = 0; i < cajas.length; i++) {

        if (cajas[i].getAttribute("type") == "button" || cajas[i].getAttribute("type") == "radio") {

        } else {
            cajas[i].value = "";
        }

        if (cajas[i].getAttribute("type") == "radio") {
            cajas[i].checked = false;
        }

    }
    console.log(cajas);
}

function
abreCaja(elemento) {

    var i;
    var x = document.getElementsByClassName("caja");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    let boton = document.querySelector("#tres .bienbenida input");
    boton.style.display = "none";

    if (elemento == "tres") {

        if (!localStorage.getItem('id')) {
            let titulo = document.querySelector("#tres h2");
            let boton = document.querySelector("#tres .bienbenida input");
            let texto = document.querySelector("#tres .bienbenida .textobienbenida");
            let panel = document.querySelector("#tres .inicio");
            let panelanuncio = document.querySelector(".panelanuncio");
            panelanuncio.style.display = "none";
            texto.innerHTML = " Inicia  sesión para crear un anuncio";
            boton.style.display = "none";
            panel.style.display = "";

        } else {

            let usuario =
                localStorage.getItem("id");

            let titulo =
                document.querySelector(
                    "#tres h2"
                );

            let boton =
                document.querySelector(
                    "#tres .bienbenida input"
                );

            let texto =
                document.querySelector(
                    "#tres .bienbenida .textobienbenida"
                );

            let panel =
                document.querySelector(
                    "#tres .inicio"
                );

            let panelanuncio =
                document.querySelector(
                    ".panelanuncio"
                );

            panelanuncio.style.display = "";
            texto.innerHTML = "";
            boton.style.display = "";
            panel.style.display = "none";

            console.log(titulo);
            console.log(boton);

            // console.log(usuario);
            let datos = {

                func: "seleccionaUsuario",
                id: usuario
            }

            $.post(server, datos, function(respuesta) {
                console.log(respuesta);
                let panel = document.querySelector("#tres .inicio");
                let texto = document.querySelector("#tres .bienbenida .textobienbenida");

                texto.innerHTML =
                    "Bienvenido " +
                    respuesta[0].nombre + ' ' +
                    respuesta[0].apellido;

                panel.style.display = "none";

            }, "json");

        }

        let panelveranuncio = document.querySelector(".panelveranuncio");
        panelveranuncio.style.display = "none";
    }
    document.getElementById(elemento).style.display = "block";
}

function
seleccionaMarcas(argument) {

    let datos = {

        func: "seleccionaMarcas"
    }

    $.post(server, datos, function(respuesta) {

        // let datos = JSON.parse(datos);

        console.log(respuesta);

        // console.log(datos[0]['nombre']);
        let opcion_3 = [];
        let opcion_5 = [];
        let opcion_6 = [];
        let marca = document.getElementById('marcas');
        let select_5 = document.querySelector("#cinco select");
        let select_6 = document.querySelector("#seis select");

        borra_nodos(marca);
        borra_nodos(select_5);
        borra_nodos(select_6);

        for (var i = 0; i < respuesta.length; i++) {

            opcion_3[i] = document.createElement("OPTION");
            opcion_3[i].innerHTML = respuesta[i]['nombre'];
            opcion_5[i] = document.createElement("OPTION");
            opcion_5[i].innerHTML = respuesta[i]['nombre'];
            opcion_6[i] = document.createElement("OPTION");
            opcion_6[i].innerHTML = respuesta[i]['nombre'];
            marca.appendChild(opcion_3[i]);
            select_5.appendChild(opcion_5[i]);
            select_6.appendChild(opcion_6[i]);
        }

        marca.value = '';
        select_5.value = '';
        select_6.value = '';
    }, "json");

    // setInterval(seleccionaMarcas, 60000);
}

function
agregaModelo(argument) {
    let btn = document.querySelector("#cinco [type='button']");
    let modelo = document.querySelector("#cinco [type='text']");

    let marca = document.querySelector("#cinco select");

    btn.addEventListener("click", function(argument) {

        let datos = {
            func: "insertaModelo",
            marca: marca.value,
            modelo: modelo.value

        }

        $.post(server, datos)
            .done(function(respuesta) {
                // console.log('Enviado');
            }, "json")
            .always(function(respuesta) {

                // respuesta = JSON.stringify(respuesta);
                respuesta = JSON.parse(respuesta);
                console.log(respuesta);
                console.log(respuesta.respuesta);

                if (respuesta.respuesta == "campo vacio") {
                    swal("Error", "Campo vacio ", "error");
                } else if (respuesta.respuesta == "insertado") {
                    swal("Exito", "Registro incertado", "success");
                } else if (respuesta.respuesta == "existe") {
                    swal("Info", "Ya existe el dato", "info");
                }

                seleccionaMarcas();

            });
    })
}

function
agregaUsuario(argument) {

    let valor = document.querySelectorAll("#dos input");

    for (var i = 0; i < valor.length - 1; i++) {

        if (i < valor.length) {

            valor[i].value = "";

        }

    }
    console.log(valor);
    valor[6].addEventListener("click", function(argument) {

        let vacio = 0;

        for (var i = 0; i < valor.length - 1; i++) {

            if (i < valor.length - 1) {

                if (valor[i].value === "" || valor[i].length <= 0) {

                    vacio++;

                } else {

                }

            }

        }

        if (vacio == 0) {

            let datos = {
                func: "agregaUsuario",
                nombre: valor[0].value,
                apellido: valor[1].value,
                telefono: valor[2].value,
                edad: parseInt(valor[3].value),
                email: valor[4].value,
                pass: valor[5].value
            }
            // console.log(datos);
            $.post(server, datos, function(respuesta) {

            }, "json").always(function(respuesta) {

                // respuesta = JSON.parse(respuesta);
                console.log(respuesta);

                if (respuesta.respuesta == "insertado") {

                    swal("Exito", "Registro incertado", "success");

                } else if (respuesta.respuesta == "existe") {

                    swal("Info", "Ya tu cuenta esta activa", "info");
                }

            });

        } else {

            swal("Error", "Campo vacio ", "error");

            // console.log("Campo vacio");
        }

    })

}

function
seleccionMarcaDeModelo(argument) {

    let select = document.querySelectorAll("#seis select");

    select[0].addEventListener("change",
        function(argument) {

            borra_nodos(select[1]);
            let opciones = [];

            let datos = {
                func: "seleccionMarcaDeModelo",
                marca: this.value

            }

            $.post(server, datos)
                .always(function(respuesta) {
                    respuesta = JSON.parse(respuesta);
                    console.log(respuesta);

                    for (var i = 0; i < respuesta.length; i++) {
                        opciones[i] = document.createElement("OPTION");
                        opciones[i].value = respuesta[i]['idmodelo'];
                        opciones[i].innerHTML = respuesta[i]['nombre'];

                        select[1].appendChild(opciones[i]);

                    }
                    select[1].value = "";
                }, "json");
        }
    );

    let marca = document.getElementById('marcas');

    marca.addEventListener("change",
        function(argument) {
            let modelo = document.getElementById('modelo');
            borra_nodos(modelo);
            let opciones = [];

            let datos = {
                func: "seleccionMarcaDeModelo",
                marca: this.value

            }

            $.post(server, datos)
                .always(function(respuesta) {

                    respuesta = JSON.parse(respuesta);
                    console.log(respuesta);

                    for (var i = 0; i < respuesta.length; i++) {
                        opciones[i] = document.createElement("OPTION");
                        opciones[i].value = respuesta[i]['idmodelo'];
                        opciones[i].innerHTML = respuesta[i]['nombre'];

                        modelo.appendChild(opciones[i]);

                    }
                    modelo.value = "";
                }, "json");
        }
    );

}

function
validaUsuario(argument) {

    let btn = document.querySelectorAll("#tres .inicio .loguin input");
    for (var i = 0; i < btn.length; i++) {
        // console.log(btn[i]);
    }

    console.log(btn);

    btn[2].addEventListener("click", function(argument) {

        let vacio = 0;

        for (var i = 0; i < btn.length; i++) {

            if (btn[2] == btn[i]) {

            } else {

                if (btn[i].value == "" || btn[i].length <= 0) {
                    vacio++;

                }

            }
        }

        if (vacio == 0) {

            let datos = {
                func: "validaUsuario",
                mail: btn[0].value,
                pass: btn[1].value

            }

            $.post(server, datos)
                .always(function(respuesta) {

                    respuesta = JSON.parse(respuesta);
                    console.log(respuesta);

                    if (respuesta.respuesta == "No") {
                        // 

                    } else if (respuesta.respuesta == "Si") {

                        var d = new Date();

                        console.log(d);

                        console.log(respuesta.respuesta);

                        let panel = document.querySelector("#tres .inicio");
                        console.log(panel);

                        panel.style.display = "none";

                        let bienbenida = document.querySelector(
                            "#tres .bienbenida .textobienbenida");
                        console.log(bienbenida);
                        bienbenida.innerHTML = "Bienvenido " + respuesta.nombre;

                        let panelanuncio = document.querySelector(".panelanuncio");
                        panelanuncio.style.display = "";
                        // test(respuesta);

                        if (storageAvailable('localStorage')) {

                            localStorage.setItem("id", respuesta.idusuario);
                            let usuario = localStorage.getItem("id");

                            let titulo = document.querySelector("#tres h2");
                            let boton = document.querySelector("#tres .bienbenida input");
                            // let texto = document.querySelector("#tres .inicio h3");
                            let panel = document.querySelector("#tres .loguin");
                            let bienbenida = document.querySelector("#tres .bienbenida .textobienbenida");
                            console.log(bienbenida);
                            bienbenida.innerHTML = "Bienvenido " + respuesta.nombre;
                            boton.style.display = "";
                            panel.style.display = "none";

                            console.log(titulo);
                            console.log(boton);

                            console.log('si');

                            // swal("Excelente", "localStorage funciona en su navegador  ", "success");

                        } else {

                            // swal("Error", "Su navegador no acepta localStorage tendrá que" +
                            //     "iniciar sesión cada vez que entre a la pagina", "error");

                            console.log('no');
                        }

                    } else {

                        console.log('Error');
                    }

                }, "json");

        } else {

            console.log('campo vacio');
        }

    })

}

function
cierraSeccion(argument) {
    let boton = document.querySelector("#tres .bienbenida input");

    boton.addEventListener("click", function(argument) {
        localStorage.clear();
        let titulo = document.querySelector("#tres h2");
        let boton = document.querySelector("#tres .bienbenida input");
        // let texto = document.querySelector("#tres .inicio h3");
        let panel = document.querySelector("#tres .loguin");
        let bienbenida = document.querySelector("#tres .bienbenida .textobienbenida");
        let panelanuncio = document.querySelector(".panelanuncio");
        let panelveranuncio = document.querySelector(".panelveranuncio");

        borra_nodos(panelveranuncio);
        panelanuncio.style.display = "none";
        panelveranuncio.style.display = "none";
        console.log(bienbenida);
        bienbenida.innerHTML = "Inicia  sesión para crear un anuncio";

        boton.style.display = "none";
        panel.style.display = "";
    })
}

function
devuelveEstados(argument) {

    let datos = {
        func: "devuelveEstados"
    }
    $.get(server, datos).always(function(respuesta) {
        let idestado = document.querySelector(".idestado");
        respuesta = JSON.parse(respuesta);
        let opciones = [];
        console.log(respuesta);
        // console.log(idestado);

        if (idestado.hasChildNodes()) {
            // var children = idestado.childNodes;
            // console.log(children);
            borra_nodos(idestado);
            // console.log(children);

        }

        for (var i = 0; i < respuesta.length; i++) {

            opciones[i] = document.createElement("OPTION");
            opciones[i].value = respuesta[i]['idestado'];
            opciones[i].innerHTML = respuesta[i]['tipo'];

            idestado.appendChild(opciones[i]);
            // console.log(respuesta[i]);
        }

        idestado.value = "";

    }, "json");

}

function
devuelveTrasminsiones(argument) {
    let idtransmission = document.querySelector(".idtransmission");
    let datos = {
        func: "devuelveTrasminsiones"
    }
    $.get(server, datos).always(function(respuesta) {

        respuesta = JSON.parse(respuesta);
        let opciones = [];
        console.log(respuesta);

        if (idtransmission.hasChildNodes()) {
            // var children = idestado.childNodes;
            // console.log(children);
            borra_nodos(idtransmission);
            // console.log(children);

        }

        for (var i = 0; i < respuesta.length; i++) {

            opciones[i] = document.createElement("OPTION");
            opciones[i].value = respuesta[i]['idtransmission'];
            opciones[i].innerHTML = respuesta[i]['tipo'];

            idtransmission.appendChild(opciones[i]);
            // console.log(respuesta[i]);
        }

        idtransmission.value = "";

    }, "json");

    // console.log(idtransmission);

}

function
insertaVehiculo(argument) {
    //  ESta funcionalidad nesesita trataminto para 
    // valores vacios antes de enviarlos a la base de  datos 
    let seleccion = document.querySelectorAll(".panelanuncio select");

    let lisencia = document.querySelectorAll(".panelanuncio [name='lisencia']");
    let multas = document.querySelectorAll(".panelanuncio [name='multas']");
    let descripcion = document.querySelector(".panelanuncio textarea");
    let inputnumber = document.querySelectorAll(".panelanuncio [type='number']");
    let btn = document.querySelector(".panelanuncio div [type='button']");

    console.log(btn);

    console.log(seleccion);
    console.log(lisencia);
    console.log(multas);
    console.log(inputnumber);
    console.log(descripcion);

    btn.addEventListener("click", function(argument) {

        let usuario = localStorage.getItem("id");

        let valorlicencia;
        let valormulta;

        let vacio = 0;

        for (var i = 0; i < lisencia.length; i++) {
            if (lisencia[i].checked) {

                valorlicencia = lisencia[i].value;
            } else {

            }

        }

        if (valorlicencia == "si") {

            valorlicencia = 1;
        } else {
            valorlicencia = 0;
        }

        for (var i = 0; i < multas.length; i++) {

            if (multas[i].checked) {
                valormulta = multas[i].value;
            } else {

            }
            console.log(multas[i]);
        }

        if (valormulta == "si") {

            // valormulta = isNaN(parseInt(inputnumber[0].value));

            if (isNaN(parseInt(inputnumber[0].value))) {

                valormulta = 0;

            } else {

                valormulta = parseInt(inputnumber[0].value);
            }

        } else {
            valormulta = 0;

        }
        var marizdatos =
            [
                seleccion[1].value,
                seleccion[2].value,
                inputnumber[1].value,
                descripcion.value,
                inputnumber[3].value,
                seleccion[3].value,
                usuario,
                valormulta,
                valorlicencia,
                inputnumber[2].value,

            ];

        let datoidmodelo = seleccion[1].value,
            datoidestado = seleccion[2].value,
            datomillage = inputnumber[1].value,
            datodescripcion = descripcion.value,
            datoprecio = inputnumber[3].value,
            datoidtransmission = seleccion[3].value,
            datoidusuario = usuario,
            datomultas = valormulta,
            datolicencia = valorlicencia,
            datofechamodelo = inputnumber[2].value;

        let datos = {
            func: "insertaVehiculo",
            idmodelo: datoidmodelo,
            idestado: datoidestado,
            millage: datomillage,
            descripcion: datodescripcion,
            precio: datoprecio,
            idtransmission: datoidtransmission,
            idusuario: datoidusuario,
            multas: datomultas,
            licencia: datolicencia,
            fechamodelo: datofechamodelo
        }
        // console.log(datos);
        $.post(server, datos).always(function(respuesta) {
            // respuesta = JSON.parse(respuesta);
            console.log(respuesta);
        });

    });

}

function
verVheiculos(argument) {

    let botonesmenu = document.querySelectorAll(".bienbenida input");
    let panelanuncio = document.querySelector(".panelanuncio");
    let panelveranuncio = document.querySelector(".panelveranuncio");

    panelveranuncio

    for (var i = 0; i < botonesmenu.length; i++) {
        console.log(botonesmenu[i]);
    }
    let agregar = botonesmenu[1];
    let ver = botonesmenu[2];

    console.log(ver);

    ver.addEventListener(
        "click",
        function(argument) {

            panelanuncio.style.display = "none";
            panelveranuncio.style.display = "";

            if (!localStorage.getItem('id')) {

            } else {

                let datos = {
                    func: "verVheiculos",
                    idusuario: localStorage.getItem('id')

                }

                $.post(server, datos).always(

                    function(respuesta) {
                        respuesta = JSON.parse(respuesta);
                        console.log(respuesta);
                        console.log(respuesta.length);
                        borra_nodos(panelveranuncio);

                        let propOwn = Object.getOwnPropertyNames(respuesta[0]);

                        console.log(Object.getOwnPropertyNames(respuesta[0]).length);

                        // console.log(propOwn);

                        for (var i = 0; i < propOwn.length; i++) {

                            console.log(i + " " + respuesta[0][propOwn[i]]);
                        }

                        // for (var i = 0; i < respuesta.length; i++) {
                        //     console.log(respuesta[i]);
                        // }

                        let vistaVehiculo = [];

                        for (var i = 0; i < respuesta.length; i++) {

                            vistaVehiculo.push(document.createElement("DIV"));
                            // console.log(vistaVehiculo[i]);
                            vistaVehiculo[i] = agregahijos(respuesta[i], vistaVehiculo[i]);
                            vistaVehiculo[i].classList.add("w3-panel", "w3-card-4");
                            console.log(vistaVehiculo[i]);

                        }

                        function agregahijos(matriz, padre) {
                            let nodo = [];
                            let elemento = Object.getOwnPropertyNames(matriz);
                            for (var i = 0; i < elemento.length; i++) {

                                nodo.push(document.createElement("p"));
                                nodo[i].innerHTML = matriz[elemento[i]];
                            }
                            for (var i = 0; i < nodo.length; i++) {
                                padre.appendChild(nodo[i]);
                            }
                            return padre;
                        }

                        for (var i = 0; i < vistaVehiculo.length; i++) {
                            panelveranuncio.appendChild(vistaVehiculo[i]);
                        }

                    }
                );
            }
        }
    );

    agregar.addEventListener(
        "click",
        function(
            argument
        ) {

            panelanuncio.style.display = "";
            panelveranuncio.style.display = "none";
        }
    );
}

// ================================================================
//  Funciones prescritas del internet

function
storageAvailable(type) {

    try {
        var storage = window[type],
            x = '__storage_test__';
        storage.setItem(x, x);
        storage.removeItem(x);
        return true;

    } catch (e) {

        return e instanceof DOMException && (
                // everything except Firefox
                e.code === 22 ||
                // Firefox
                e.code === 1014 ||
                // test name field too, because code might not be present
                // everything except Firefox
                e.name === 'QuotaExceededError' ||
                // Firefox
                e.name === 'NS_ERROR_DOM_QUOTA_REACHED') &&
            // acknowledge QuotaExceededError only if there's something already stored
            storage.length !== 0;
    }
}