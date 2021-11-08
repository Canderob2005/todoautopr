function
insertanuncio(argument) {

    let nombre = document.getElementById("nombre");

    let pagado =
        document.querySelectorAll(".pagado");

    let direccion = document.getElementById("direccion");
    let pueblo = document.getElementById("pueblo");
    let telefono = document.getElementById("telefono");
    let correo = document.getElementById("correo");
    let categoria = document.getElementById("categoria");
    let marca = document.getElementById("marca");
    let modelo = document.getElementById("modelo");
    let year = document.getElementById("year");
    let clasificacion = document.getElementById("clasificacion");
    let condicion = document.getElementById("condicion");
    let transmision = document.getElementById("transmision");

    let licencia =
        document.querySelectorAll(".licencia");
    let full_lablel =
        document.querySelectorAll(".full_lablel");
    let multas =
        document.querySelectorAll(".multas");

    let millaje = document.getElementById("millaje");
    let precio = document.getElementById("precio");

    let precio_final = document.querySelectorAll(".precio_final");

    let descripcion = document.getElementById("descripcion");
    let enviar = document.getElementById("enviar");

    enviar.addEventListener("click", function(argument) {

        let datos = {
            func: "anuncio",
            nombre: nombre.value,
            pagado: btnCheck(pagado[0], pagado[1]),
            direccion: direccion.value,
            pueblo: pueblo.value,
            telefono: telefono.value,
            correo: correo.value,
            categoria: categoria.value,

            // este campo debe extraer el texto del option
            // ya que se usa el valor numerico para retornar los modelos 
            // de lo contrario quebrara la aplicacion con 
            // repercuciones de fallas no deseadas  
            marca: marca.value,
            // 
            modelo: modelo.value,
            descripcion: descripcion.value,
            year: year.value,
            clasificacion: clasificacion.value,
            condicion: condicion.value,
            transmision: transmision.value,
            licencia: btnCheck(licencia[0], licencia[1]),
            full_lablel: btnCheck(full_lablel[0], full_lablel[1]),
            multas: btnCheck(multas[0], multas[1]),
            millaje: millaje.value,
            precio: precio.value,
            precio_final: btnCheck(precio_final[0], precio_final[1]),
            descripcion: descripcion.value
        }

        function btnCheck(btn1, btn2) {
            if (btn1) {
                return "si";
            } else if (btn2) {
                return "no";
            } else {
                return null;
            }
        }
        console.log(datos);
        // ===============================
        // $.post(
        //     "../server/anuncio.php", datos,
        //     function(data) {
        //         console.log(data);
        //         // console.log(JSON.parse(data));

        //     }).done(

        //     function(data) {
        //         console.log(data);
        //         console.log('second success');

        //     }).fail(

        //     function(data) {
        //         console.log(data);
        //         console.log('error');

        //     }).always(

        //     function(data) {
        //         console.log(data);
        //         console.log('finished');

        //     });

    });

}

insertanuncio();

// console.log(nombre);
// console.log(pagado);
// console.log(direccion);
// console.log(pueblo);
// console.log(telefono);
// console.log(correo);
// console.log(categoria);
// console.log(marca);
// console.log(modelo);
// console.log(clasificacion);
// console.log(condicion);
// console.log(transmision);
// console.log(licencia);
// console.log(full_lablel);
// console.log(multas);
// console.log(millaje);
// console.log(precio);
// console.log(precio_final);
// console.log(descripcion);
// console.log(enviar);

// console.log(JSON.parse(JSON.stringify(enviar)));

// for (var i = 0; i < seleccion.length; i++) {
//     console.log(seleccion[i]);
// }

// for (var i = 0; i < lisencia.length; i++) {
//     console.log(lisencia[i]);
// }
// for (var i = 0; i < multas.length; i++) {
//     console.log(multas[i]);
// }
// for (var i = 0; i < inputnumber.length; i++) {
//     console.log(inputnumber[i]);
// }

// btn.addEventListener("click", function(event) {
//     event.preventDefault()
//     let usuario = localStorage.getItem("id");

//     let valorlicencia;
//     let valormulta;

//     let vacio = 0;

//     for (var i = 0; i < lisencia.length; i++) {
//         if (lisencia[i].checked) {

//             valorlicencia = lisencia[i].value;
//         } else {

//         }

//     }

//     if (valorlicencia == "si") {

//         valorlicencia = 1;
//     } else {
//         valorlicencia = 0;
//     }

//     for (var i = 0; i < multas.length; i++) {

//         if (multas[i].checked) {
//             valormulta = multas[i].value;
//         } else {

//         }
//         console.log(multas[i]);
//     }

//     if (valormulta == "si") {

//         // valormulta = isNaN(parseInt(inputnumber[0].value));

//         if (isNaN(parseInt(inputnumber[0].value))) {

//             valormulta = 0;

//         } else {

//             valormulta = parseInt(inputnumber[0].value);
//         }

//     } else {
//         valormulta = 0;

//     }

//     // for (var i = 0; i < marizdatos.length; i++) {
//     //     if (marizdatos[i] == "" || marizdatos[i].value < 0) {
//     //         vacio++;

//     //     } else {

//     //     }
//     //     console.log(marizdatos[i].value);
//     // }

//     let datoidmodelo = seleccion[1].value,
//         datoidestado = seleccion[2].value,
//         datomillage = inputnumber[1].value,
//         datodescripcion = descripcion.value,
//         datoprecio = inputnumber[3].value,
//         datoidtransmission = seleccion[3].value,
//         datoidusuario = usuario,
//         datomultas = valormulta,
//         datolicencia = valorlicencia,
////     // console.log(datos);
//     $.post("../server/insertanuncio.php", datos).always(function(respuesta) {
//         // respuesta = JSON.parse(respuesta);
//         console.log(respuesta);
//     });

// });

// console.log(nombre);
// console.log(pagado);
// console.log(direccion);
// console.log(pueblo);
// console.log(telefono);
// console.log(correo);
// console.log(categoria);
// console.log(marca);
// console.log(modelo);
// console.log(clasificacion);
// console.log(condicion);
// console.log(transmision);
// console.log(licencia);
// console.log(full_lablel);
// console.log(multas);
// console.log(millaje);
// console.log(precio);
// console.log(precio_final);
// console.log(descripcion);
// console.log(enviar);

// var marizdatos =
//     [
//         seleccion[1].value,
//         seleccion[2].value,
//         inputnumber[1].value,
//         descripcion.value,
//         inputnumber[3].value,
//         seleccion[3].value,
//         usuario,
//         valormulta,
//         valorlicencia,
//         inputnumber[2].value,

//     ];
// datofechamodelo = inputnumber[2].value;

// ===============================

// ===============================
// $.ajax({
//     type: "POST",
//     url: url,
//     data: data,
//     success: success,
//     dataType: dataType
// });
// ===============================