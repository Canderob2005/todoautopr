	function accion_boton_agregar_modelo(argument) {
		let btn_agregar_modelo =
			document.querySelector(
				".contenedor_marcas_modelos .agregar_un_modelo"
			);
		let modelo = document.getElementById("modelo");
		let seleccion_invalida = document.querySelector(".seleccion_invalida");
		let mensaje = document.querySelector(".seleccion_invalida .mensaje");
		// modelo.addEventListener("click", function(argument) {
		// 	console.log(this.value);
		// });
		btn_agregar_modelo.addEventListener("click", function(argument) {
			console.log(this);
			let modal_inserta_modelo = document.querySelector(".modal_inserta_modelo");
			let select_marca =
				document.getElementById('marca');

			if (!(select_marca.value == "Selecciona una Marca") && (modelo.value == "vacio")) {

				modal_inserta_modelo.style.display = "block";
			} else {
				seleccion_invalida.style.display = "block";
				mensaje.textContent = "Debes tener seleccionado un modelo  y no puedes tener una marca seleccionada";
			}

			console.log(modelo.value);
			let img_check =
				document.querySelector(
					".modal_inserta_modelo .img_check"
				);

			img_check.style.display = 'none';
		});
	}

	console.log('accion_boton_agregar_modelo');