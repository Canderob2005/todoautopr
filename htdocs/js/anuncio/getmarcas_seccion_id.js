	function getmarcas_seccion_id(id) {

		$.getJSON('./php/anuncio/devuelvemarcas.php', {
			fun: 'getmarcas'
		}, function(json, textStatus) {

			console.log(textStatus);
			console.log(json);

			let opcion = [];

			let marca = document.getElementById('marca');

			borra_nodos(marca);
			opcion[0] = document.createElement("OPTION");
			opcion[0].value = "";
			opcion[0].textContent = "Elige una marca";
			// opcion[0].setAttribute("selected", "");
			marca.appendChild(opcion[0]);

			for (var i = 0; i < json.length; i++) {

				if (json[i]['idmarca'] == id) {

					opcion[i + 1] = document.createElement("OPTION");
					opcion[i + 1].value = json[i]['idmarca'];
					opcion[i + 1].textContent = json[i]['nombre'];
					opcion[i + 1].setAttribute("selected", "");
				} else {
					opcion[i + 1] = document.createElement("OPTION");
					opcion[i + 1].value = json[i]['idmarca'];
					opcion[i + 1].textContent = json[i]['nombre'];
				}

				marca.appendChild(opcion[i + 1]);

			}
			// getmodelo();
		});
	}

	console.log('getmarcas_seccion_id');