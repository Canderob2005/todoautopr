//  Función para  trabajar todo lo relacionado con la pagina de anuncios 


// NOTA:
// anuncio();
// Funcion anuncio debe estar en fichero y directorio separado
// -----------------------------
//  NOTA Mal muy mal con una case se 
// 	pudo aver avitado estas variables globaes 
//  NO tengas priosa Carlos soy tomismo abanto con yo mismo 
var ficheros = [];
var img_cantidad = 0;
// -----------------------------

function anuncio(argument) {
	insertar_marca_modelo();


	// //////////////////////////////////////////////////////////
	//  Solo numeros 
	function solonumeros(argument) {
		let input = document.querySelectorAll("[type='tel");
		for (var i = 0; i < input.length; i++) {
			// console.log(input[i]);
			input[i].addEventListener("keyup", function(argument) {
				if (!/^[0-9]*$/.test(this.value)) {

					this.value = "";

				}
			});
		}
	}
	solonumeros();
	// ////////////////////////////////////////////////////////



	//  Trabajar con la variable ficheros  para que sea global y enviar todas las imágenes al servidor 

	document.getElementById("descripcion").innerHTML = "";

	aprir_modal();



	function aprir_modal(argument) {
		let img_check = document.querySelectorAll(".img_check");
		let alerta_marca_existe = document.querySelector(".alerta_marca_existe");
		alerta_marca_existe.style.display = 'none';
		for (var i = 0; i < img_check.length; i++) {
			img_check[i].style.display = 'none';
		}


	}

	console.log(textStatus);
	console.log(json);


	console.log(marca.value);

	// ==============================================
	// ==============================================

	// ===================================================
	//  Evento despliega en el elemento de entrada selección los  modelos 
	// ===================================================
	let marca = document.getElementById('marca');

	marca.addEventListener("change", function(argument) {

		let id = this.value;
		// console.log(id);

		$.getJSON('./server/getmodelos.php', {
			fun: 'getmodelo',
			id: id,
		}, function(json, textStatus) {

		}).always(function(json, textStatus) {
			// console.log(textStatus);
			// console.log(json);

			let opcion = [];

			let modelo = document.getElementById('modelo');

			borra_nodos(modelo);
			opcion[0] = document.createElement("OPTION");
			opcion[0].value = "";
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
	// ===================================================
	// ===================================================
	// ===============================================================
	//  Obtiene los modelos usando el id de la marca como parámetro 
	function getmodelo(id) {

		// console.log(id);

		$.getJSON('./server/getmodelos.php', {
			fun: 'getmodelo',
			id: id,
		}, function(json, textStatus) {

		}).always(function(json, textStatus) {
			// console.log(textStatus);
			// console.log(json);

			let opcion = [];

			let modelo = document.getElementById('modelo');

			borra_nodos(modelo);
			opcion[0] = document.createElement("OPTION");
			opcion[0].value = "";
			opcion[0].innerHTML = "Selecciona una modelo";
			opcion[0].selected = false;
			modelo.appendChild(opcion[0]);

			for (var i = 0; i < json.length; i++) {

				opcion[i + 1] = document.createElement("OPTION");
				opcion[i + 1].value = json[i]['idmodelo'];

				opcion[i + 1].selected = true;

				opcion[i + 1].innerHTML = json[i]['nombre'];

				modelo.appendChild(opcion[i + 1]);

			}
			modelo.disabled = true;
		});

	}


	function insertar_anuncio(argument) {

		// Selección  del botón para enviar
		let btn_enviar = document.getElementById("enviar");
		// Campo nombre del formulario 
		let nombre = document.getElementById("nombre");
		// nombre.value = "";
		//  Botón pagado 
		let pagado =
			document.querySelectorAll(
				'[name="pagado"]'
			);
		// ================================================
		// Recorre botones radio de la opción pagado y define  
		// cuantas fotos  podrá publicar el usuario
		for (var i = 0; i < pagado.length; i++) {
			// ------------------------------------
			//  SEleccion de ventana  y zona de mensaje del mismo 
			let modal_pagado =
				document.getElementById("modal_pagado");
			let mensaje_modal_pagado =
				document.getElementById("mensaje_modal_pagado");

			let mensaje = "";
			// ------------------------------------
			// ================================================
			//  Función  determina cuantas imágenes puede introducir el usuario 
			pagado[i].addEventListener("click", function() {
				//  Selecciona  de todas las cajas contenedoras de imágenes 
				let img_caja_contenedor = document.querySelectorAll(".img_caja_contenedor");
				//  Si el elemento seleccionado tiene un valor de si entonces  
				// realizara el condicional a continuación 
				if (this.value == "si") {
					// console.log('si');
					img_cantidad = 4;

					mensaje = "Anuncios pagados  pueden  publicar " + img_cantidad + " imágenes";

					for (var i = 0; i < img_caja_contenedor.length; i++) {
						img_caja_contenedor[i].style.display = "block";
					}
				}
				//  Si le elemento tiene el  valor de no entonces realizara 
				// las siguientes instrucciones 
				if (this.value == "no") {
					// console.log('no');
					img_cantidad = 2;
					mensaje = "Anuncios gratuitos pueden  publicar " + img_cantidad + " imágenes";

					for (var i = 0; i < img_caja_contenedor.length; i++) {

						if (i <= 1) {

							img_caja_contenedor[i].style.display = "block";

						} else {

							img_caja_contenedor[i].style.display = "none";
						}

					}

				}

				modal_pagado.style.display = "block";
				mensaje_modal_pagado.innerHTML = mensaje;
			});
			// ================================================
		}
		// ================================================
		//  Variables de los campos 
		let pueblo =
			document.getElementById("pueblo");

		let telefono =
			document.getElementById("telefono");

		let correo =
			document.getElementById("correo");

		let categoria =
			document.getElementById("categoria");

		let marca =
			document.getElementById("marca");

		let modelo =
			document.getElementById("modelo");

		let year =
			document.getElementById("year");

		let clasificacion =
			document.getElementById("clasificacion");

		let condicion =
			document.getElementById("condicion");

		let transmision =
			document.getElementById("transmision");


		let licencia =
			document.querySelectorAll(
				'[name="licencia"]'
			);

		let full_lablel =
			document.querySelectorAll(
				'[name="full_lablel"]'
			);

		let multas =
			document.querySelectorAll(
				'[name="multas"]'
			);

		let statusprecio =
			document.querySelectorAll(
				'[name="statusprecio"]'
			);

		let descripcion =
			document.getElementById("descripcion");
		//////////////////////////////////////////////////////////
		// NOTA trabajar con la validacion 

		btn_enviar.addEventListener("click", function(argument) {

			var campo_vacio = {
				"nombre": "null",
				"pagado": "null",
				"pueblo": "null",
				"telefono": "null",
				"correo": "null",
				"categoria": "null",
				"marca": "null",
				"modelo": "null",
				"year": "null",
				"clasificacion": "null",
				"condicion": "null",
				"transmision": "null",
				"licencia": "null", // ***********
				"full_lablel": "null",
				"multas": "null",
				"millaje": "null",
				"precio": "null",
				"statusprecio": "null",
				"descripcion": "null"
			};
			// var campo_vacio = true;

			argument.preventDefault();

			console.log(valida_campo_vacio(nombre));

			if (valida_campo_vacio(nombre)) {

				let borde = document.querySelector(".borde_nombre");
				borde.style.border = "2px solid red";
				campo_vacio.nombre = "vacio";

			} else {

				let borde = document.querySelector(".borde_nombre");
				borde.style.border = "none";
				campo_vacio.nombre = "lleno";
			}

			// ----

			if (fun_radio_button_value(pagado) == undefined) {

				let borde = document.querySelector(".borde_pagado");
				borde.style.border = "2px solid red";
				campo_vacio.pagado = "vacio";

			} else {

				let borde = document.querySelector(".borde_pagado");
				borde.style.border = "none";
				campo_vacio.pagado = "lleno";
			}

			// --

			if (valida_campo_vacio(pueblo)) {

				let borde = document.querySelector(".borde_pueblo");
				borde.style.border = "2px solid red";
				campo_vacio.pueblo = "vacio";

			} else {

				let borde = document.querySelector(".borde_pueblo");
				borde.style.border = "none";
				campo_vacio.pueblo = "lleno";

			}

			if (valida_campo_vacio(telefono)) {
				let borde = document.querySelector(".borde_telefono");
				borde.style.border = "2px solid red";
				campo_vacio.telefono = "vacio";

			} else {
				let borde = document.querySelector(".borde_telefono");
				borde.style.border = "none";
				campo_vacio.telefono = "lleno";
			}

			if (valida_campo_vacio(correo)) {
				let borde = document.querySelector(".borde_correo");
				borde.style.border = "2px solid red";
				campo_vacio.correo = "vacio";

			} else {

				let borde = document.querySelector(".borde_correo");
				borde.style.border = "none";
				campo_vacio.correo = "lleno";

			}

			if (valida_campo_vacio(categoria)) {
				let borde = document.querySelector(".borde_categoria");
				borde.style.border = "2px solid red";
				campo_vacio.categoria = "vacio";
			} else {
				let borde = document.querySelector(".borde_categoria");
				borde.style.border = "none";
				campo_vacio.categoria = "lleno";
			}


			if (valida_campo_vacio_marca(marca)) {
				let borde = document.querySelector(".borde_marca");
				borde.style.border = "2px solid red";
				campo_vacio.marca = "vacio";
			} else {
				let borde = document.querySelector(".borde_marca");
				borde.style.border = "none";
				campo_vacio.marca = "lleno";
			}

			if (valida_campo_vacio(modelo)) {
				let borde = document.querySelector(".borde_modelo");
				borde.style.border = "2px solid red";
				campo_vacio.modelo = "vacio";
			} else {
				let borde = document.querySelector(".borde_modelo");
				borde.style.border = "none";
				campo_vacio.modelo = "lleno";
			}

			if (valida_campo_vacio(year)) {
				let borde = document.querySelector(".borde_year");
				borde.style.border = "2px solid red";
				campo_vacio.year = "vacio";
			} else {
				let borde = document.querySelector(".borde_year");
				borde.style.border = "none";
				campo_vacio.year = "lleno";
			}

			if (valida_campo_vacio(clasificacion)) {
				let borde = document.querySelector(".borde_clasificacion");
				borde.style.border = "2px solid red";
				campo_vacio.clasificacion = "vacio";
			} else {
				let borde = document.querySelector(".borde_clasificacion");
				borde.style.border = "none";
				campo_vacio.clasificacion = "lleno";
			}

			if (valida_campo_vacio(condicion)) {
				let borde = document.querySelector(".borde_condicion");
				borde.style.border = "2px solid red";
				campo_vacio.condicion = "vacio";
			} else {
				let borde = document.querySelector(".borde_condicion");
				borde.style.border = "none";
				campo_vacio.condicion = "lleno";
			}

			if (valida_campo_vacio(transmision)) {
				let borde = document.querySelector(".borde_transmision");
				borde.style.border = "2px solid red";
				campo_vacio.transmision = "vacio";
			} else {
				let borde = document.querySelector(".borde_transmision");
				borde.style.border = "none";
				campo_vacio.transmision = "lleno";
			}

			if (fun_radio_button_value(licencia) == undefined) {
				let borde = document.querySelector(".borde_licencia");
				borde.style.border = "2px solid red";
				campo_vacio.licencia = "vacio";
			} else {
				let borde = document.querySelector(".borde_licencia");
				borde.style.border = "none";
				campo_vacio.licencia = "lleno";
			}

			if (fun_radio_button_value(full_lablel) == undefined) {
				let borde = document.querySelector(".borde_full_label");
				borde.style.border = "2px solid red";
				campo_vacio.full_lablel = "vacio";
			} else {
				let borde = document.querySelector(".borde_full_label");
				borde.style.border = "none";
				campo_vacio.full_lablel = "lleno";
			}

			if (fun_radio_button_value(multas) == undefined) {
				let borde = document.querySelector(".borde_multas");
				borde.style.border = "2px solid red";
				campo_vacio.multas = "vacio";
			} else {
				let borde = document.querySelector(".borde_multas");
				borde.style.border = "none";
				campo_vacio.multas = "lleno";

			}

			if (valida_campo_vacio(millaje)) {
				let borde = document.querySelector(".borde_millaje");
				borde.style.border = "2px solid red";
				campo_vacio.millaje = "vacio";
			} else {
				let borde = document.querySelector(".borde_millaje");
				borde.style.border = "none";
				campo_vacio.millaje = "lleno";
			}

			if (valida_campo_vacio(precio)) {
				let borde = document.querySelector(".borde_precio");
				borde.style.border = "2px solid red";
				campo_vacio.precio = "vacio";
			} else {
				let borde = document.querySelector(".borde_precio");
				borde.style.border = "none";
				campo_vacio.precio = "lleno";
			}

			if (fun_radio_button_value(statusprecio) == undefined) {
				let borde = document.querySelector(".borde_precio_final");
				borde.style.border = "2px solid red";
				campo_vacio.statusprecio = "vacio";
			} else {
				let borde = document.querySelector(".borde_precio_final");
				borde.style.border = "none";
				campo_vacio.statusprecio = "lleno";
			}

			if (valida_campo_vacio(descripcion)) {

				let borde = document.querySelector(".borde_descripcion");
				borde.style.border = "2px solid red";
				campo_vacio.descripcion = "vacio";
			} else {
				let borde = document.querySelector(".borde_descripcion");
				borde.style.border = "none";
				campo_vacio.descripcion = "lleno";
			}



			//  Valida los campos 
			function valida_campo_vacio(argument) {


				// console.log(argument.value);

				// if (!argument == null) {
				if (argument.value == "") {
					// console.log("vacio");
					return true;
				} else {
					// console.log("lleno");
					console.log(false);
					return false;
				}

				// } else {
				// 	return false;
				// }

			}

			// ================================================



			// =================================================
			//  valida solo el campo dela marca 
			function valida_campo_vacio_marca(argument) {
				console.log(argument.value);
				if (argument.value != "Selecciona una Marca") {

					console.log(true);
					return false;
				} else {
					console.log(false);
					return true;
				}
			}

			// =================================================



			// ==============================================
			// Captura los valores del radio buttons
			function fun_radio_button_value(btn_radio) {
				let resultado;
				for (var i = 0; i < btn_radio.length; i++) {
					// console.log("La seleccion " + i);
					// console.log(btn_radio[i].checked);

					if (btn_radio[i].checked) {

						resultado = btn_radio[i].value;
					}


				}
				// console.log(resultado);
				// console.log("======================");
				if (resultado != undefined) {

					return resultado;

				} else {

					return resultado;
				}

			}
			// ==============================================
			const entries = Object.entries(campo_vacio);

			// console.log(entries);
			let campos_llenos = [];
			for (var i = 0; i < entries.length; i++) {
				// console.log(entries[i][1]);
				campos_llenos.push(entries[i][1]);
			}



			let formData = new FormData();
			//  Agregamos los datos al formdata
			formData.append("nombre", nombre.value);
			formData.append("pagado", fun_radio_button_value(pagado));
			formData.append("idpueblo", pueblo.value);
			formData.append("year", year.value);
			formData.append("telefono", telefono.value);
			formData.append("correo", correo.value);
			formData.append("idcategoria", categoria.value);
			// ===================================================
			// NOTA para campo marca valor para el servidor 
			// 
			// Este campo debe extraer el texto del option
			// ya que se usa el valor numerico para retornar los modelos 
			// de lo contrario quebrara la aplicacion con 
			// repercuciones de fallas no deseadas 
			console.log('========================================================');
			// let option_marca = document.querySelectorAll("#marca option");
			// console.log(option_marca);
			// console.log(marca);
			// console.log(marca.value);

			// for (var i = 0; i < option_marca.length; i++) {
			// 	if (option_marca[i].value == marca.value) {
			// console.log(option_marca[i].value);
			// console.log();
			// 		formData.append("marca", option_marca[i].textContent);
			// 	}
			// }
			formData.append("idmarca", marca.value);
			// console.log('========================================================');
			// ===================================================
			formData.append("idmodelo", modelo.value);
			formData.append("idclasificacion", clasificacion.value);
			formData.append("idcondicion", condicion.value);
			formData.append("idtransmission", transmision.value);
			formData.append("licencia", fun_radio_button_value(licencia));
			formData.append("full_lablel", fun_radio_button_value(full_lablel));
			formData.append("multas", fun_radio_button_value(multas));
			formData.append("millaje", millaje.value);
			formData.append("precio", precio.value);
			formData.append("statusprecio", fun_radio_button_value(statusprecio));
			formData.append("descripcion", descripcion.value);

			//  Investigación aquí 
			// https://stackoverflow.com/questions/16104078/appending-array-to-formdata-and-send-via-ajax#28434829
			for (var i = 0; i < ficheros.length; i++) {
				// let nombre = "nombre" + i;
				formData.append("imagenes[]", ficheros[i]);
			}
			// ==================================================================
			//  Verifica campos y decide si enviar o no 
			var cantidad_imagenes = 0;
			if (campos_llenos.includes("vacio")) {
				// console.log("Verifica los datos");

			} else {

				for (var i = 0; i < ficheros.length; i++) {
					if (ficheros[i] != " ") {
						cantidad_imagenes += 1;
					}
				}

				if (cantidad_imagenes > 0) {
					let contenedor_anuncio = document.querySelector(".contenedor_anuncio");
					contenedor_anuncio.style.display = "none";
					// cantidad_imagenes = 0;
					fun_enviar(formData);
					// console.log("enviado");
				} else {

					// console.log("Verifica las imagenes ");
				}

				// console.log('============================');
				// console.log('Cantidad de ficheros');
				// console.log(ficheros.length);
				// console.log('Cantidad de iagenes');
				// console.log(cantidad_imagenes);
				// console.log(ficheros);
				// console.log('============================');
				console.log("Tienes campos vacios");
				cantidad_imagenes = 0;

				console.log(ficheros.length);
				console.log(cantidad_imagenes);
				console.log(ficheros);

				// fun_enviar(formData);
			}
			// ==================================================================
			// console.log(formData);
			// El formulario se  envía de igual forma  formdata evalúa los 
			// datos y no llegara como objeto JSON si no que llegaran 
			// tal y como se envían , PHP se encargara de lo demás 
			console.log(formData);
			// if (campo_vacio) {
			// 	alert("exito");
			// 	// fun_enviar(formData);
			// } else {
			// 	alert("Campo vacío");
			// }



		});


		// NOTA trabajar con la validacion 
		//////////////////////////////////////////////////////////
		// ==================================
		// Trabajar con los datos pues es un formdata se deben incluir objetos JSON 
		// dentro de los append para que pueda ser recibido  con éxito  
		// Envía los datos al servidor
		// https://stackoverflow.com/questions/35774898/how-to-get-data-from-formdata-in-a-php-file
		function fun_enviar(data) {

			let datos = data;

			$.ajax({
				url: './server/anuncio.php',
				type: 'POST',
				data: datos,
				contentType: false,
				cache: false,
				processData: false,
			}).done(function() {

				// console.log("success");

			}).fail(function(error) {

				// console.log(error);

			}).always(function(resultado) {

				// ========================================================
				// console.log(resultado);

				let respuesta = JSON.parse(resultado);

				if (respuesta.respuesta == "error") {
					let modal_error_enviar = document.getElementById("modal_error_enviar");
					modal_error_enviar.style.display = "block";
				} else if (respuesta.respuesta == "exito") {
					formData = null;
					// alert("Se inserto bien");
					let = modal_error_enviar = document.getElementById("modal_error_enviar");
					modal_error_enviar.style.display = "block";

					let btn_enviar = document.getElementById("enviar");
					let btn_aceptar = document.querySelector("#modal_error_enviar .btn_aceptar");
					btn_aceptar.addEventListener("click", function(argument) {
						modal_error_enviar.style.display = "none";
						window.location.replace("ver_anuncios.php");
					})
					// btn_enviar.disabled = true;
					// window.location.replace("ver_anuncios.php");
				}
				// Controlar la respuesta del servidor aquí en
				// relación con la inserción de datos incluidas las imágenes


				// ========================================================
			});

		}


	}


	console.log(all[i]);

	miniaturas();
	insertar_anuncio();


}


function campos_rellenados(argument) {



	// ========================================================
	// Selecciona el campo nombre  y aplica fondo rojo 
	// si esta vacío si no lo deja por defecto 
	let nombre = document.querySelector("[name=nombre]");
	nombre.style.backgroundColor = "#ffcccc";
	console.log(nombre);
	nombre.addEventListener("keyup", function(argument) {
		console.log(nombre.value);
		if (nombre.value == "") {
			nombre.style.backgroundColor = "#ffcccc";
		} else {
			nombre.style.backgroundColor = "";
		}
	});
	// ========================================================

	// ========================================================
	let pagado = document.querySelectorAll("[name=pagado]");
	// console.log(pagado);
	for (let i = 0; i < pagado.length; i++) {
		pagado[i].style.border = "1px solid ffcccc !important";
	}
	// object.addEventListener("change", myScript);


	// ========================================================
}