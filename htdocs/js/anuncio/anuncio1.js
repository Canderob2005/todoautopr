var ficheros = [];
var img_cantidad = 0;

function borra_nodos(argument) {

	while (argument.firstChild) {

		argument.removeChild(argument.lastChild);

	}
}

function trabajoConAnuncio(argument) {

	console.log("trabajoConAnuncio");

	let txt_descripcion = document.getElementById("descripcion");
	txt_descripcion.innerHTML = "";

	//  //////////////////////////////////////////
	// Trabaja la función para solo números 
	// en los campos de texto necesarios 
	function solonumeros(argument) {

		let input = document.querySelectorAll("[type='tel");

		for (var i = 0; i < input.length; i++) {

			input[i].addEventListener("keyup", function(argument) {

				if (!/^[0-9]*$/.test(this.value)) {

					this.value = "";

				}
			});
		}
	}

	// let all_txt_input = document.querySelectorAll("[type='text");
	// console.log(all_txt_input);

	function soloTexto(argument) {

		let all_txt_input = document.querySelectorAll("[type='text']");
		let txt_modelo = document.querySelector(".modal_inserta_modelo .txt_modelo");
		// let txt_modelo = document.querySelectorAll(".txt_modelo");
		console.log(txt_modelo)
		for (var i = 0; i < all_txt_input.length; i++) {

			all_txt_input[i].addEventListener("keyup", function(argument) {
				console.log(this);

				if (event.target == txt_modelo) {

					if (!/^[0-9a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/.test(this.value)) {

						this.value = "";

					}

				} else {

					if (!/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/.test(this.value)) {

						this.value = "";

					}
				}

			});
		}
	}
	solonumeros();
	soloTexto();
	accion_pagado();

	accion_seleccion_modelo();

	accion_boton_agregar_marca();

	accion_interna_modal_agregar_marca();

	accion_boton_agregar_modelo();

	accion_interna_modal_agregar_modelo();

	/////////////////////////////////////////////////
	// Nota : Accion modal modelo 
	// ///////////////////////////////////////////////
	// Rellena nuevamente el elemento deselección  con marcas actualizadas 
	function getmarcas(argument) {

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

	// function getmarcas_seccion_id(id) {

	// 	$.getJSON('./php/anuncio/devuelvemarcas.php', {
	// 		fun: 'getmarcas'
	// 	}, function(json, textStatus) {

	// 		console.log(textStatus);
	// 		console.log(json);

	// 		let opcion = [];

	// 		let marca = document.getElementById('marca');

	// 		borra_nodos(marca);
	// 		opcion[0] = document.createElement("OPTION");
	// 		opcion[0].value = "";
	// 		opcion[0].innerHTML = "Elige una marca";
	// 		// opcion[0].setAttribute("selected", "");
	// 		marca.appendChild(opcion[0]);

	// 		for (var i = 0; i < json.length; i++) {

	// 			if (json[i]['idmarca'] == id) {
	// 				opcion[i + 1] = document.createElement("OPTION");
	// 				opcion[i + 1].value = json[i]['idmarca'];
	// 				opcion[i + 1].innerHTML = json[i]['nombre'];
	// 				opcion[i + 1].setAttribute("selected", "");
	// 			} else {
	// 				opcion[i + 1] = document.createElement("OPTION");
	// 				opcion[i + 1].value = json[i]['idmarca'];
	// 				opcion[i + 1].innerHTML = json[i]['nombre'];
	// 			}

	// 			marca.appendChild(opcion[i + 1]);

	// 		}
	// 		// getmodelo();
	// 	});
	// }

	miniaturas();
	insertar_anuncio();

	/////////////////////////////////////////////////////////////////////////////////////
}