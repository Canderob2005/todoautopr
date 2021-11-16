function editar_anuncio(argument) {
	let formulario_eliminar = document.getElementById("formulario_eliminar");
	let formulario_editar = document.getElementById("formulario_editar");

	let edita_nanucio_modal = document.getElementById("edita_nanucio_modal");
	let txt_textarea =
		document.querySelector("textarea");
	txt_textarea.textContent = txt_textarea.textContent.trim();
	txt_textarea.style.height = "410px";
	// -----------------------------------------------
	// Contenedorews de botones. 
	let contenedor_eliminar =
		document.querySelector(".contenedor_eliminar");

	let contenedor_actualizar =
		document.querySelector(".contenedor_actualizar");

	contenedor_eliminar.style.display = "none";
	contenedor_actualizar.style.display = "none";
	// -----------------------------------------------

	// ----------------------------------------------
	//  Botones para cancelar y aceptar eliminación 
	let btn_nodal_cancel =
		document.querySelector(
			".modal_edicion_de_anuncios .btn_cancelar_eliminar_anuncio"
		);

	let btn_nodal_aceptar =
		document.querySelector(
			".modal_edicion_de_anuncios .btn_eliminar_anuncio"
		);

	// ----------------------------------------------

	// ----------------------------------------------
	//  Botones para aceptar o cancelar actualización 
	let btn_nodalcancelar_actualizar_anuncio =
		document.querySelector(
			".modal_edicion_de_anuncios .btn_cancelar_actualizar_anuncio"
		);

	let btn_nodal_actualizar_anuncio =
		document.querySelector(
			".modal_edicion_de_anuncios .btn_actualizar_anuncio"
		);

	// ----------------------------------------------

	//  ----------------------------------------------
	// Botones superiores  para eliminar y actualizar 
	let btn_actualizar =
		document.querySelector(
			"[name=actualizar]"
		);
	let btn_elimunar =
		document.querySelector(
			"[name=elimunar]"
		);
	//  ----------------------------------------------
	// let btn_elimunar_hide =
	// 	document.querySelector(
	// 		"[name=btn_elimunar]"
	// 	);

	// let btn_idanuncio_value =
	// 	document.querySelector(
	// 		"[name=idanuncio]"
	// 	);

	formulario_eliminar.setAttribute(
		"action", "./server/eliminar/eliminar.php");
	formulario_eliminar.setAttribute("method", "post");

	formulario_editar.setAttribute("action",
		"./server/editar_anuncio/ejecuta_edicion.php");

	formulario_editar.setAttribute("method", "post");

	btn_actualizar
		.addEventListener(
			"click",
			function(argument) {

				contenedor_eliminar.style.display = "none";
				contenedor_actualizar.style.display = "block";
				edita_nanucio_modal.style.display = "block";

				btn_nodal_actualizar_anuncio.addEventListener('click', function(argument) {
					formulario_editar.submit();
				});
				btn_nodal_actualizar_anuncio.addEventListener('click', function(argument) {
					edita_nanucio_modal.style.display = "none";
					contenedor_eliminar.style.display = "none";
					contenedor_actualizar.style.display = "none";
				});
				// console.log(this);
				// console.log(txt_input);
				// console.log(btn_select);
				// console.log(txt_textarea);

			});

	btn_elimunar
		.addEventListener(
			"click",
			function(argument) {

				argument.preventDefault();
				contenedor_eliminar.style.display = "block";
				contenedor_actualizar.style.display = "none";
				edita_nanucio_modal.style.display = "block";
				// console.log(this);

			});

	btn_nodal_aceptar
		.addEventListener(
			"click",
			function(argument) {

				formulario_eliminar.submit();

			});

	let txt_input = document.querySelectorAll(".formulario_editar [type='text']");
	let btn_select = document.querySelectorAll(".formulario_editar select");
	let num_input = document.querySelectorAll(".formulario_editar [type='numeric']");
	let input_hidden = document.querySelectorAll("#formulario_editar input");

	let all_input = [];
	for (let i = 0; i < txt_input.length; i++) {
		all_input.push(txt_input[i]);
	}
	for (let i = 0; i < btn_select.length; i++) {
		all_input.push(btn_select[i]);
	}
	for (let i = 0; i < num_input.length; i++) {
		all_input.push(num_input[i]);
	}
	all_input.push(txt_textarea);
	let evento = "";
	// keyup
	for (var i = 0; i < all_input.length; i++) {

		// console.log(all_input[i]);
		// if (all_input[i].tagName = "SELECT") {
		// 	evento = "change";
		// } else if (
		// 	all_input[i].tagName == "INPUT" ||
		// 	all_input[i].tagName == "TEXTAREA"
		// ) {
		// 	evento = "keyup";
		// }

		all_input[i].addEventListener("change", function(argument) {
			console.log(this.classList.length);
			let clases = [];
			for (var i = 0; i < this.classList.length; i++) {
				clases.push(this.classList[i]);
			}

			for (var i = 0; i < input_hidden.length; i++) {

				if (clases.includes(input_hidden[i].className)) {

					input_hidden[i].value = this.value;
					console.log(this);
					console.log(input_hidden[i]);
				}
			}

		});

	}

}

// ///////////////
editar_anuncio();

// ///////////////
// form.submit().