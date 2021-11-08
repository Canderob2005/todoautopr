let marca = document.getElementById('marca');
marca.addEventListener("change",
    function(argument) {

        $.getJSON("../server/getmodelos.php", {
            fun: "getmodelo",
            id: this.value
        }, function(data) {
            console.log("success");
        }).done(function(data) {
            console.log("second success");
        }).fail(function(data) {
            console.log("error");
        }).always(function(json, textStatus) {
            console.log("complete");
            // console.log(data);

            console.log(textStatus);
            console.log(json);

            let opcion = [];

            let modelo = document.getElementById('modelo');

            borra_nodos(modelo);
            opcion[0] = document.createElement("OPTION");
            opcion[0].value = "";
            opcion[0].innerHTML = "Elige un modelo";
            opcion[0].setAttribute("selected", "");
            modelo.appendChild(opcion[0]);

            for (var i = 0; i < json.length; i++) {

                opcion[i + 1] = document.createElement("OPTION");
                opcion[i + 1].value = json[i]['idmodelo'];
                opcion[i + 1].innerHTML = json[i]['nombre'];

                modelo.appendChild(opcion[i + 1]);

            }
        });

    });