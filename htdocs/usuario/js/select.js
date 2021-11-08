 jQuery(document).ready(function($) {

    const server = "../php/select.php";

    function buscar() {

        let buscar = document.querySelector(".buscar");

        buscar.addEventListener("click", function() {

            let modelo = document.getElementById("modelo");
            let datos = {

                func: "busca",
                id: modelo.value,
            }

            $.post(server, datos, function(respuesta) {

                respuesta = JSON.parse(respuesta);

                console.log(respuesta);

            });

        });

    }

    // function rellenamarcas(argument) {

    //     let datos = {

    //         func: "seleccionaMarcas"
    //     }

    //     $.post(server, datos, function(respuesta) {

    //         // let datos = JSON.parse(datos);

    //         console.log(respuesta);

    //         // console.log(datos[0]['nombre']);
    //         let opcion_3 = [];

    //         let marca = document.getElementById('marcas');

    //         borra_nodos(marca);

    //         for (var i = 0; i < respuesta.length; i++) {

    //             opcion_3[i] = document.createElement("OPTION");
    //             opcion_3[i].innerHTML = respuesta[i]['nombre'];

    //             marca.appendChild(opcion_3[i]);

    //         }

    //     }, "json");

    //     // setInterval(seleccionaMarcas, 60000);
    // }

    function borra_nodos(argument) {

        while (argument.firstChild) {

            argument.removeChild(argument.lastChild);

        }
    }

    function valorselect(argument) {
        let marcas = document.getElementById('marcas');

        marcas.addEventListener("change", function(argument) {

            let datos = {

                func: "modelos",
                id: this.value,
            }

            $.post(server, datos, function(respuesta) {

                respuesta = JSON.parse(respuesta);
                console.log(respuesta.length);
                console.log(respuesta);

                let modelo = document.getElementById('modelo');
                borra_nodos(modelo);
                let nodos = [];
                nodos[0] = document.createElement("OPTION");
                nodos[0].innerHTML = "Selecciona el modelo";
                nodos[0].setAttribute("selected", "");

                for (var i = 0; i < respuesta.length; i++) {

                    nodos.push(document.createElement("OPTION"));
                    nodos[i + 1].setAttribute("value", respuesta[i]["idmodelo"]);
                    nodos[i + 1].innerHTML = respuesta[i]["nombre"];

                }

                for (var i = 0; i < nodos.length; i++) {

                    modelo.appendChild(nodos[i]);
                }
                // console.log(respuesta);

            });
        });
    }

    function damemarcas(argument) {
        let datos = {
            func: "select",

        }

        $.post(server, datos, function(respuesta) {
            respuesta = JSON.parse(respuesta);
            console.log(respuesta);

            let marcas = document.getElementById('marcas');
            borra_nodos(marcas);
            let nodos = [];
            nodos[0] = document.createElement("OPTION");
            nodos[0].innerHTML = "Selecciona la marca";
            nodos[0].setAttribute("selected", "");
            for (var i = 0; i < respuesta.length; i++) {

                nodos.push(document.createElement("OPTION"));
                nodos[i + 1].setAttribute("value", respuesta[i]["idmarca"]);
                nodos[i + 1].innerHTML = respuesta[i]["nombre"];

            }

            for (var i = 0; i < nodos.length; i++) {
                marcas.appendChild(nodos[i]);
            }

        });
    }


    function filtros(argument) {
        let filtrosbtn = document.querySelector(".filtrosbtn");
        filtrosbtn.checked = false;
        // filtrosbtn.style.display = "none";

        let filtros = document.getElementById('filtros');
        filtros
        filtros.addEventListener("click", function(argument) {
            let filtrosbtn = document.querySelector(".filtrosbtn");
            if (this.checked == true) {
                filtrosbtn.style.display = "";
            } else if (this.checked == false) {
                filtrosbtn.style.display = "none";
            }
            console.log(this.checked);
        });
    }
    // ================
    filtros();
    // damemarcas();
    // buscar();
    // valorselect();

    // ================
 });