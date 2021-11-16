	function accion_seleccion_modelo(argument) {
		let select_marca =
			document.querySelector(
				".contenedor_marcas_modelos .select_marca"
			);
		select_marca.addEventListener("change", function(argument) {
			console.log(select_marca.value);
			let id = this.value;
			// console.log(id);

			$.getJSON('./php/getmodelos.php', {
				fun: 'getmodelo',
				id: id,
			}, function(json, textStatus) {

			}).always(function(json, textStatus) {
				// console.log(textStatus);
				// console.log(json);

				let opcion = [];

				let modelo = document.querySelector(
					'.contenedor_marcas_modelos .select_modelo');

				borra_nodos(modelo);
				opcion[0] = document.createElement("OPTION");
				opcion[0].value = "vacio";
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
	}

	console.log("accion_seleccion_modelo");