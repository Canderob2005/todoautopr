	function accion_interna_modal_agregar_marca(argument) {

		let modal_inserta_marca =
			document.querySelector(
				".modal_inserta_marca"
			);
		let modal_close_modelo =
			document.querySelector(
				".modal_inserta_marca .modal_close_modelo"
			);
		let mensaje =
			document.querySelector(
				".modal_inserta_marca .contenedor_mensaje"
			);
		let txt_marca =
			document.querySelector(
				".modal_inserta_marca .txt_marca"
			);
		let btn_aceptar =
			document.querySelector(
				".modal_inserta_marca .btn_aceptar"
			);
		let btn_calcelar =
			document.querySelector(
				".modal_inserta_marca .btn_calcelar"
			);
		let img_check =
			document.querySelector(
				".modal_inserta_marca .img_check"
			);
		let marca = document.querySelector("#marca");
		modal_close_modelo.addEventListener(
			"click",
			function(argument) {
				img_check.style.display = 'none';
				modal_inserta_marca.style.display = "none";
			});

		btn_calcelar.addEventListener(
			"click",
			function(argument) {
				img_check.style.display = 'none';
				modal_inserta_marca.style.display = "none";
			});

		btn_aceptar.addEventListener(
			"click",
			function(argument) {

				// modal_inserta_marca.style.display = "none";
				// Variables con los elementos a manipular 
				// para la inserción vehículo de no existir 

				let = agrega_marca =
					document.querySelector(
						'.modal_inserta_marca .txt_marca'
					);

				// let = agrega_modelo = document.getElementById('agrega_modelo');

				let img_check =
					document.querySelector(
						".modal_inserta_marca .img_check"
					);

				let marca = agrega_marca.value;

				console.log(agrega_marca);
				console.log(agrega_marca.value);
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
				if (vacio(marca)) {

					img_check.style.backgroundColor = "green";
					img_check.style.display = 'inline';
					img_check.src = "img/icons/done_outline-24px.svg";

				} else {

					img_check.style.backgroundColor = "red";
					img_check.style.display = 'inline';
					img_check.src = "img/icons/highlight_off-24px.svg";
				}

				//  #revisar
				if (vacio(marca)) {

					// console.log('Llenos');
					let datos = {
						fun: 'marcaNoesiste',
						marca: marca,

					}
					console.log(datos);
					// NOTA post inserta marca
					$.post('./php/anuncio/inserta_marca.php', datos,
						function(data, textStatus, xhr) {

						}).always(function(data, textStatus, xhr) {
						console.log(JSON.parse(data));
						let respuesta = JSON.parse(data);
						console.log(data);

						// console.log(textStatus);
						// console.log(xhr);

						let alerta_marca_existe =
							document.querySelector(
								".modal_inserta_marca " +
								".contenedor_mensaje");

						let mensaje =
							document.querySelector(
								".modal_inserta_marca " +
								".contenedor_mensaje .mensaje");

						let btn_aceptar_mensaje =
							document.querySelector(
								".modal_inserta_marca " +
								".contenedor_mensaje .btn_aceptar_mensaje"
							);

						let modal_close_modelo =
							document.querySelector(
								".modal_inserta_marca .modal_close_modelo"
							);

						let txt_marca =
							document.querySelector(".modal_inserta_marca .txt_marca");
						let btn_aceptar =
							document.querySelector(".modal_inserta_marca .btn_aceptar");
						let btn_calcelar =
							document.querySelector(".modal_inserta_marca .btn_calcelar");

						alerta_marca_existe.style.color = "white";
						btn_aceptar_mensaje.style.display = "none";

						if (respuesta.respuesta == "error") {

							mensaje.textContent = "Error! La marca que intentas ingresar ya existe en nuestra base de datos.";
							btn_aceptar_mensaje.style.display = "none";
							alerta_marca_existe.style.backgroundColor = "#ff6666";
							alerta_marca_existe.style.display = 'block';

						} else if (respuesta.respuesta == "exito") {
							let temp_marca = document.querySelector(".temp_marca");
							temp_marca.value = marca;
							// mensaje.textContent =
							// 	"La marca se ha insertado corectamante" +
							// 	" el id es : " + respuesta.id;
							let temp_categoria = document.querySelector(".temp_categoria");
							temp_categoria.value = respuesta.id;
							mensaje.textContent =
								"La marca se ha insertado corectamante y el id es : " + respuesta.id;
							alerta_marca_existe.style.backgroundColor = "#8BC34A";
							btn_aceptar_mensaje.style.display = "block";
							alerta_marca_existe.style.display = 'block';
							txt_marca.disabled = true;
							btn_aceptar.disabled = true;
							btn_calcelar.disabled = true;
							modal_close_modelo.style.display = "none";

							actualiza_Marca(respuesta.id);
							// getmarcas();
							let marca_selecionada_defecto = document.getElementById("marca_selecionada_defecto");
							// getmarcas(parseInt(data['id']));
							// let modal = document.getElementById('modal_marca_modelo');
							// modal.style.display = 'none';
							// getmodelo(parseInt(data['id']));

						}

					});

					// /////////////////////////////////////////////////
				}

			});

		// ///////////////////////////////
		function actualiza_Marca(id) {
			let id_marca = id;
			console.log(id);
			// console.log(btn_txt);
			let btn_aceptar_mensaje =
				document.querySelector(
					".modal_inserta_marca " +
					".contenedor_mensaje .btn_aceptar_mensaje"
				);
			let select_marca =
				document.querySelector("#marca");
			let select_marca_opciones =
				document.querySelector("#marca option");

			let categoria = document.querySelector("#categoria");

			let temp_categoria = document.querySelector(".temp_categoria");
			let modal_inserta_marca =
				document.querySelector(".modal_inserta_marca");

			let modal_inserta_modelo =
				document.querySelector(".modal_inserta_modelo");

			let contenedor_mensaje =
				document.querySelector(
					".modal_inserta_modelo .contenedor_mensaje"
				);

			let mensaje =
				document.querySelector(
					".modal_inserta_modelo .contenedor_mensaje .mensaje"
				);
			let temp_marca =
				document.querySelector(".temp_marca");
			// let marca = document.querySelector("#marca");

			btn_aceptar_mensaje.addEventListener("click", function(argument) {
				// NOTA : Actualizar nombre delamarca ATENCION
				console.log(select_marca.value);
				console.log(categoria);
				console.log(select_marca.value);
				console.log(select_marca_opciones.textContent);
				getmarcas_seccion_id(id);
				console.log(marca.value);
				console.log(select_marca_opciones.textContent); //===========
				// let select_marca_opcion =
				// 	document.querySelector("#marca option['selected']");
				// console.log(select_marca_opcion);
				modal_inserta_marca.style.display = "none";
				contenedor_mensaje.style.display = "block";
				mensaje.textContent =
					"Estas a punto de agregar un nombre de modelo para la marca " +
					temp_marca.value + " bajo la categoria " + categoria.value;
				modal_inserta_modelo.style.display = "block";
				// select_marca.disabled = true;
			});

			// ////////////////////////////////////////////////////////////////////////////////
			//  Conflicto de funciones
			// let btn_aceptar = document.querySelector(".modal_inserta_modelo .btn_aceptar");
			// let btn_calcelar = document.querySelector(".modal_inserta_modelo .btn_calcelar");

			// btn_aceptar.addEventListener("click", function(argument) {
			// 	let txt_modelo = document.querySelector(".modal_inserta_modelo .txt_modelo");
			// 	let datos = {

			// 		nombre_modelo: txt_modelo.value,
			// 		id_marca: id_marca,
			// 		id_categoria: categoria.value,

			// 	}
			// 	console.log(datos);
			// 	// $.post('./php/anuncio/inserta_modelo.php', datos,
			// 	// 	function(data, textStatus, xhr) {

			// 	// 	}).always(function(data, textStatus, xhr) {
			// 	// 	console.log(JSON.parse(data));
			// 	// 	let respuesta = JSON.parse(data);
			// 	// 	console.log(data);

			// 	// })

			// });
			// ////////////////////////////////////////////////////////////////////////////////
			//  Conflicto de funciones

			// btn_aceptar.addEventListener("click",function(argument) {
			// 	let txt_modelo = document.querySelector(".modal_inserta_modelo .txt_modelo");
			//
			// 	$.post('./php/anuncio/inserta_modelo.php', datos,
			// 		function(data, textStatus, xhr) {

			// 		}).always(function(data, textStatus, xhr) {
			// 		console.log(JSON.parse(data));
			// 		let respuesta = JSON.parse(data);
			// 		console.log(data);

			// 	});
			// });

			// btn_calcelar.addEventListener("click"function(argument) {
			// 	alert("cancelar");
			// });

		}
		// ///////////////////////////////
	}

	console.log('accion_interna_modal_agregar_marca');