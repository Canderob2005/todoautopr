function getmarcas(argument) {
    $.getJSON('../server/devuelvemarcas.php', {
        fun: 'getmarcas'
    }, function(json, textStatus) {

        console.log(textStatus);
        console.log(json);

        let opcion = [];

        let marca = document.getElementById('marca');

        borra_nodos(marca);
        opcion[0] = document.createElement("OPTION");
        opcion[0].value = "";
        opcion[0].innerHTML = "Elige una marca";
        opcion[0].setAttribute("selected", "");
        marca.appendChild(opcion[0]);

        for (var i = 0; i < json.length; i++) {

            opcion[i + 1] = document.createElement("OPTION");
            opcion[i + 1].value = json[i]['idmarca'];
            opcion[i + 1].innerHTML = json[i]['nombre'];

            marca.appendChild(opcion[i + 1]);

        }
        // getmodelo();
    });
}