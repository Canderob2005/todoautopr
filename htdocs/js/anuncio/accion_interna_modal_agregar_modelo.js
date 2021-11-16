	function accion_interna_modal_agregar_modelo(argument) {

		let modal_inserta_modelo =
			document.querySelector(
				".modal_inserta_modelo"
			);
		let modal_close_modelo =
			document.querySelector(
				".modal_inserta_modelo .modal_close_modelo"
			);
		let mensaje =
			document.querySelector(
				".modal_inserta_modelo .contenedor_mensaje"
			);
		let txt_marca =
			document.querySelector(
				".modal_inserta_modelo .txt_marca"
			);
		let btn_aceptar =
			document.querySelector(
				".modal_inserta_modelo .btn_aceptar"
			);
		let btn_calcelar =
			document.querySelector(
				".modal_inserta_modelo .btn_calcelar"
			);
		let img_check =
			document.querySelector(
				".modal_inserta_modelo .img_check"
			);
		modal_close_modelo.addEventListener(
			"click",
			function(argument) {
				img_check.style.display = 'none';
				modal_inserta_modelo.style.display = "none";
			});

		btn_calcelar.addEventListener(
			"click",
			function(argument) {
				img_check.style.display = 'none';
				modal_inserta_modelo.style.display = "none";
			});

		btn_aceptar.addEventListener(
			"click",
			function(argument) {
				console.log(this);
				// modal_inserta_marca.style.display = "none";
				// Variables con los elementos a manipular 
				// para la inserción vehículo de no existir 

				let = agrega_modelo =
					document.querySelector(
						'.modal_inserta_modelo .txt_modelo'
					);

				// let = agrega_modelo = document.getElementById('agrega_modelo');

				let img_check =
					document.querySelector(
						".modal_inserta_modelo .img_check"
					);

				let select_marca =
					document.getElementById('marca');

				let marca = select_marca.value;
				let modelo = agrega_modelo.value;

				console.log(marca);
				console.log(modelo);
				console.log(img_check);

				function vacio(text) {

					text = /\b(\S+[a-zA-Z0-9.])/.exec(text);

					if (text === null) {

						return false;

					} else {

						return true;
					}

				}

				//  Acción según si campo vacío o no 
				if (vacio(modelo)) {

					img_check.style.backgroundColor = "green";
					img_check.style.display = 'inline';
					img_check.src = "./img/done_outline-24px.svg";

				} else {

					img_check.style.backgroundColor = "red";
					img_check.style.display = 'inline';
					img_check.src = "./img/highlight_off-24px.svg";
				}

				//  #revisar
				if (vacio(modelo)) {

					// console.log('Llenos');
					let categoria = document.querySelector("#categoria");
					let datos = {

						id_marca: marca,
						nombre_modelo: modelo,
						id_categoria: categoria.value,

					}

					console.log(datos);
					$.post('./php/anuncio/inserta_modelo.php', datos,
						function(data, textStatus, xhr) {

						}).always(function(data, textStatus, xhr) {

						console.log(data);
						let respuesta = JSON.parse(data);
						console.log(textStatus);
						console.log(xhr);
						console.log(respuesta);

						// let alerta_marca_existe =
						// 	document.querySelector(".modal_inserta_modelo .contenedor_mensaje");

						if (respuesta.respuesta == "exito") {

							modal_inserta_modelo.style.display = "none";

						} else if (respuesta.respuesta == "error") {

							alert("error");
							// alert("insertado");
							// getmarcas();
							// getmarcas(parseInt(data['id']));
							// let modal = document.getElementById('modal_marca_modelo');
							// modal.style.display = 'none';
							// getmodelo(parseInt(data['id']));

						}

					});

					/////////////////////////////////////////////////
				}

			});

	}

	console.log('accion_interna_modal_agregar_modelo');