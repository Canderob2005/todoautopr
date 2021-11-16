	function accion_boton_agregar_marca(argument) {
		let btn_agregar_marca =
			document.querySelector(
				".contenedor_marcas_modelos .btn_agregar_marca"
			);

		let seleccion_invalida = document.querySelector(".seleccion_invalida");
		let mensaje = document.querySelector(".seleccion_invalida .mensaje");
		let btn_aceptar = document.querySelector(".seleccion_invalida .btn_aceptar");
		let modal_close_modelo = document.querySelector(".seleccion_invalida .modal_close_modelo");

		btn_agregar_marca.addEventListener("click", function(argument) {
			console.log(this);
			let modal_inserta_marca = document.querySelector(".modal_inserta_marca");
			// NOTA : funcionalidad debe estar selecionado 
			// categoria y no selecionada la marca 
			let categoria =
				document.getElementById("categoria");
			let marca =
				document.getElementById("marca");

			if (!(categoria.value == "") && (marca.value == "Selecciona una Marca")) {

				modal_inserta_marca.style.display = "block";

			} else {

				seleccion_invalida.style.display = "block";
				mensaje.textContent =
					"Debes seleccionar una categoria y no puedes tener un modelo selecionado para continuar";
			}

			let img_check =
				document.querySelector(
					".modal_inserta_marca .img_check"
				);
			img_check.style.display = 'none';
		});

		//  Evento modal invalido para agregar marca

		btn_aceptar.addEventListener("click", function(argument) {
			seleccion_invalida.style.display = "none";
		});
		modal_close_modelo.addEventListener("click", function(argument) {
			seleccion_invalida.style.display = "none";
		});

	}

	console.log("accion_boton_agregar_marca");