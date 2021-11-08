// ========================================
// Borra los nodos de elementos de selección 
function borra_nodos(argument) {

	while (argument.firstChild) {

		argument.removeChild(argument.lastChild);

	}
}

// ========================================


// =======================================
// Elimina texto interno de la caja  del área 
// de texto en el formulario al cargar 
// la pagina  al recargar la pagina se enjutara 
function cleartexarea(argument) {

	let textarea = document.querySelectorAll("textarea");

	for (var i = 0; i < textarea.length; i++) {
		textarea[i].innerHTML = "";
	}

}
// =======================================



// =======================================
// Se seleccionan todos los input incluido 
// el textarea  para ver selección, 
// función de prueba. 
function selectInput(argument) {
	let elemento = document.querySelectorAll("input, textarea");

	for (var i = 0; i < elemento.length; i++) {
		console.log(elemento[i]);
	}
}
// =======================================



// ================================================
// Se implementaba anteriormente la zona de ventana 
// emergente usando la librería sweetalert 
// Ya no se usa esta aquí por cuestiones de cambios 



// swal("A wild Pikachu appeared! What do you want to do?", {
//  buttons: {
//    cancel: "Run away!",
//    catch: {
//      text: "Throw Pokéball!",
//      value: "catch",
//    },
//    defeat: true,
//  },
// })
// .then((value) => {
//  switch (value) {

//    case "defeat":
//      swal("Pikachu fainted! You gained 500 XP!");
//      break;

//    case "catch":
//      swal("Gotcha!", "Pikachu was caught!", "success");
//      break;

//    default:
//      swal("Got away safely!");
//  }
// });
// ======================================



// ======================================
// Obtiene las marcas con una consulta 
// al servidor y rellena el elemento de 
// selección destinado para marcas 
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
// ========================================



// ========================================
// Obtiene las clasificares existentes en la 
// base de datos y despliega en el elemento 
// de selección correspondiente  
function getclasificacion(argument) {
	$.getJSON('../php/anuncio.php', {
		fun: 'getclasificacion'
	}, function(json, textStatus) {

		// console.log(textStatus);
		console.log(json);

		let opcion = [];

		let clasificacion = document.getElementById('clasificacion');

		borra_nodos(clasificacion);
		opcion[0] = document.createElement("OPTION");
		opcion[0].value = "";
		opcion[0].innerHTML = "Elige una clasificacion";
		opcion[0].setAttribute("selected", "");
		clasificacion.appendChild(opcion[0]);

		for (var i = 0; i < json.length; i++) {

			opcion[i + 1] = document.createElement("OPTION");
			opcion[i + 1].value = json[i]['idclasificacion'];
			opcion[i + 1].innerHTML = json[i]['nombre'];

			clasificacion.appendChild(opcion[i + 1]);

		}

	});
}
// ====================================



// ===================================
// Obtiene los datos revolucionados a 
// las condiciones de vehículos existentes 
// para seleccione en el anuncio y despliega 
// en elemento de selección correspondiente 
function getcondicion(argument) {
	$.getJSON('../php/anuncio.php', {
		fun: 'getcondicion'
	}, function(json, textStatus) {

		// console.log(textStatus);
		console.log(json);

		let opcion = [];

		let condicion = document.getElementById('condicion');

		borra_nodos(condicion);
		opcion[0] = document.createElement("OPTION");
		opcion[0].value = "";
		opcion[0].innerHTML = "Elige una condicion";
		opcion[0].setAttribute("selected", "");
		condicion.appendChild(opcion[0]);

		for (var i = 0; i < json.length; i++) {

			opcion[i + 1] = document.createElement("OPTION");
			opcion[i + 1].value = json[i]['idcondicion'];
			opcion[i + 1].innerHTML = json[i]['nombre'];

			condicion.appendChild(opcion[i + 1]);

		}

	});
}
// ===========================================================



// ===========================================================
// Obtiene todos los pueblos y despliega los 
// datos en ele elemento de selección de turno 
function getpueblo(argument) {
	$.getJSON('../php/anuncio.php', {
		fun: 'getpueblo'
	}, function(json, textStatus) {

		// console.log(textStatus);
		console.log(json);

		let opcion = [];

		let pueblo = document.getElementById('pueblo');

		borra_nodos(pueblo);
		opcion[0] = document.createElement("OPTION");
		opcion[0].value = "";
		opcion[0].innerHTML = "Elige un Pueblo";
		opcion[0].setAttribute("selected", "");
		pueblo.appendChild(opcion[0]);

		for (var i = 0; i < json.length; i++) {

			opcion[i + 1] = document.createElement("OPTION");
			opcion[i + 1].value = json[i]['idpueblo'];
			opcion[i + 1].innerHTML = json[i]['nombre'];

			pueblo.appendChild(opcion[i + 1]);

		}

	});
}
// =============================================



// ===========================================
// Obtiene los tipos de transiciones como dato 
// existente en la base de datos y los despliega 
// en el elemento de selección correspondiente 
function gettransmision(argument) {
	$.getJSON('../php/anuncio.php', {
		fun: 'gettransmision'
	}, function(json, textStatus) {

		// console.log(textStatus);
		console.log(json);

		let opcion = [];

		let transmision = document.getElementById('transmision');

		borra_nodos(transmision);
		opcion[0] = document.createElement("OPTION");
		opcion[0].value = "";
		opcion[0].innerHTML = "Elige una transmision";
		opcion[0].setAttribute("selected", "");
		transmision.appendChild(opcion[0]);

		for (var i = 0; i < json.length; i++) {

			opcion[i + 1] = document.createElement("OPTION");
			opcion[i + 1].value = json[i]['idtransmission'];
			opcion[i + 1].innerHTML = json[i]['nombre'];

			transmision.appendChild(opcion[i + 1]);

		}

	});
}

// ====================================



// ===================================
// Obtiene los modelos existentes en la base de datos 
// ESte contiene evento dentro definido que sera
// activado cuando el botón de marca cambie de 
// valor entonces buscara  solo los relacionados con esta marca 
function getmodelo(argument) {
	let marca = document.getElementById('marca');

	marca.addEventListener("change", function(argument) {
		console.log(this.value);

		$.getJSON('../server/getmodelos.php', {
			fun: 'getmodelo',
			id: this.value
		}, function(json, textStatus) {

			console.log(textStatus);
			console.log(json);

			let opcion = [];

			let modelo = document.getElementById('modelo');

			borra_nodos(modelo);
			opcion[0] = document.createElement("OPTION");
			opcion[0].value = "";
			opcion[0].innerHTML = "Elige un modelo";
			opcion[0].setAttribute("selected", "");
			modelo.appendChild(opcion[0]);

			for (var i = 0; i < json.length; i++) {

				opcion[i + 1] = document.createElement("OPTION");
				opcion[i + 1].value = json[i]['idmodelo'];
				opcion[i + 1].innerHTML = json[i]['nombre'];

				modelo.appendChild(opcion[i + 1]);

			}
			/*optional stuff to do after success */
		});
	});
}
// ===================================
// getmodelo();
// =====================================

// =====================================
// Función  se en carga de determinar si existe o no la marca 
function marcaNoesiste(argument) {

	let agregar_una_marca = document.querySelector(".agregar_una_marca");
	// ------------------------------------------------
	// let input = document.createElement("INPUT");
	// input.type = "text";
	// ------------------------------------------------
	// Evento que se activa si el usuario presiona 
	// el botón de marca no existe en el formulario
	// No esta en uso y se definió con el propósito 
	// de no recargar la pagina.  
	agregar_una_marca.addEventListener("click", function(argument) {
		// console.log(this);

		swal({
			text: 'Introduce nombre de la marca.',
			content: "input",
			button: {
				text: "Guardar!",
				closeModal: true,
			},
		}).then(marca => {

			console.log(marca);

			// console.log(input.value);

			// marca = input.value;

			if (marca == "" || marca.length == 0) {
				swal({
					title: "Error!",
					text: "El campo no puede star vacio",
					icon: "error",
				});
			} else {

				$.post(
					'../server/insertamarca.php', {
						fun: 'marcaNoesiste',
						marca: marca,
					},
					function(respuesta) {

						respuesta = JSON.parse(respuesta);

						console.log(respuesta);
						// console.log(respuesta);

						if (respuesta['respuesta'] == "si") {
							// getmarcas();
							// getmodelo();

							swal({
								title: "Perfecto!",
								text: "Registro Insertado",
								icon: "success",
							});
						} else if (respuesta['respuesta'] == "no") {
							swal({
								title: "Error!",
								text: "La marca ya existe",
								icon: "error",
							});
						}

					});
				// console.log("no");
			}
			// ======================================
			//  
			// =======================================
			// swal.stopLoading();
			// swal({
			//    title: "Top result:",
			//    text: name,

			// });
			// if (!name) throw null;

			// return fetch(`https://itunes.apple.com/search?term=${name}&entity=movie`);
			// ======================================
			// =======================================
		}).catch(err => {
			if (err) {
				swal("Oh noes!", "The AJAX request failed!", "error");
			} else {
				swal.stopLoading();
				swal.close();
			}
		});
	});
}
// =====================================



// =====================================
// Obtiene las categorías disponibles 
// en la base de datos 
function getCategoria(argument) {
	$.getJSON('../php/anuncio.php', {
		fun: 'getCategoria'
	}, function(json, textStatus) {

		// console.log(textStatus);
		console.log(json);

		let opcion = [];

		let categoria = document.getElementById('categoria');

		borra_nodos(categoria);
		opcion[0] = document.createElement("OPTION");
		opcion[0].value = "";
		opcion[0].innerHTML = "Elige una categoria";
		opcion[0].setAttribute("selected", "");
		categoria.appendChild(opcion[0]);

		for (var i = 0; i < json.length; i++) {

			opcion[i + 1] = document.createElement("OPTION");
			opcion[i + 1].value = json[i]['idcategoria'];
			opcion[i + 1].innerHTML = json[i]['nombre'];

			categoria.appendChild(opcion[i + 1]);

		}
		// getmodelo();
	});
}
// ====================================

// ===================================
// Esta función deberá activar el formulario
// de manera asíncrona con javascript
// La misma deberá ser avaluada pues fue 
// interrumpida su con figuración por lo 
// que su propósito nomo esta totalmente 
// definitorio y no logra su objetivo en 
// concreto. Al parecer la función no esta siendo llamada 
// correctamente  
// function activaform(argument) {

// 	// En el futuro dese debe trabajar el objeto 
// 	// leer detenidamente para implementar 
// 	// objeto original aquí 
// 	// https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequest
// 	$("form").on("submit", function(event) {
// 		event.preventDefault();
// 		let data = capturavalores();
// 		console.log(data);

// 		$.ajax({
// 				url: '../php/anuncio.php',
// 				type: 'POST',
// 				data: capturavalores(),
// 				contentType: false,
// 				cache: false,
// 				processData: false,
// 			})
// 			.done(function() {
// 				console.log("success");
// 			})
// 			.fail(function() {
// 				console.log("error");
// 			})
// 			.always(function(respuesta) {

// 				respuesta = JSON.parse(respuesta);
// 				console.log(respuesta);
// 			});

// 	});
// }
// ===================================
// function capturavalores(argument) {

// 	// =================================================
// 	// radio buttons
// 	let pagado1 = document.getElementById("pagado1");
// 	let pagado2 = document.getElementById("pagado2");

// 	let licencia1 = document.getElementById("licencia1");
// 	let licencia2 = document.getElementById("licencia2");

// 	let multas1 = document.getElementById("multas1");
// 	let multas2 = document.getElementById("multas2");

// 	let precio_final1 = document.getElementById("precio_final1");
// 	let precio_final2 = document.getElementById("precio_final2");

// 	// =================================================

// 	let nombre = document.getElementById("nombre");
// 	let direccion = document.getElementById("direccion");
// 	let telefono = document.getElementById("telefono");
// 	let correo = document.getElementById("correo");
// 	let categoria = document.getElementById("categoria");
// 	let marca = document.getElementById("marca");
// 	let modelo = document.getElementById("modelo");
// 	let year = document.getElementById("year");
// 	let clasificacion = document.getElementById("clasificacion");
// 	let condicion = document.getElementById("condicion");
// 	let transmision = document.getElementById("transmision");
// 	let millaje = document.getElementById("millaje");
// 	let precio = document.getElementById("precio");
// 	let descripcion = document.getElementById("descripcion");
// 	let imagen = document.getElementById("imagen");

// 	let pagado, licencia, multas, precio_final;

// 	pagado = verificaradio(pagado1, pagado2);
// 	licencia = verificaradio(licencia1, licencia2);
// 	multas = verificaradio(multas1, multas2);
// 	precio_final = verificaradio(precio_final1, precio_final2);

// 	console.log(pagado);
// 	console.log(licencia);
// 	console.log(multas);

// 	// =============================================================

// 	// Falta colocar comentarios sobre  implementar 
// el uso de [FormData();] para enviar datos al servidor 
// 	let formData = new FormData();
// 	// Funciona agregando valores a la i
// nstancia de FormData() usando método append()
// 	formData.append('fun', 'insertdata');
// 	formData.append('nombre', nombre.value);
// 	formData.append('pagado', pagado);
// 	formData.append('direccion', direccion.value);
// 	formData.append('telefono', telefono.value);
// 	formData.append('correo', correo.value);
// 	formData.append('categoria', categoria.value);
// 	formData.append('marca', categoria.value);
// 	formData.append('modelo', modelo.value);
// 	formData.append('year', year.value);
// 	formData.append('clasificacion', clasificacion.value);
// 	formData.append('condicion', condicion.value);
// 	formData.append('transmision', transmision.value);
// 	formData.append('licencia', licencia);
// 	formData.append('multas', multas);
// 	formData.append('millaje', millaje.value);
// 	formData.append('precio', precio);
// 	formData.append('precio_final', precio_final);
// 	formData.append('descripcion', descripcion.value);
// 	// ===================================================================
// 	// Si pagado es = no solo recibe 2 imágenes de lo contrario recibe 4
// 	// formData.append('imagen1', ficheros[0]);
// 	// formData.append('imagen2', ficheros[1]);
// 	// formData.append('imagen3', ficheros[2]);
// 	// formData.append('imagen4', ficheros[3]);
// 	// ===================================================================

// 	return formData;

// }

// =============================================
// Función para validar los elementos de selección radio
// La función retorna cierto o falso pues son solo dos 
// selecciones radio. Entonces  se le pasa por 
// parámetro los dos elementos/ Las función debería 
// devolver valué y no el texto, sin embargo cumple 
// el objetivo, esta puede ser modificada en el futuro
// para que sea mas genérica.
function verificaradio(argument1, argument2) {

	console.log(argument1.checked);
	console.log(argument2.checked);

	if (argument1.checked) {
		return "si";
	} else if (argument2.checked) {
		return "no";
	} else {
		return "error";
	}

}
// =============================================



// =================================
// Sera eliminada con definiciones propias 
// usando expresiones regulares a la medida 
// Función  recuperada de  https://jsfiddle.net/emkey08/zgvtjc51
// function setInputFilter(textbox, inputFilter) {
// ["input",
// "keydown",
// "keyup",
// "mousedown",
// "mouseup",
// "select", 
// "contextmenu",
// "drop"].forEach(function(event) {
// 		textbox.addEventListener(event, function() {
// 			if (inputFilter(this.value)) {
// 				this.oldValue = this.value;
// 				this.oldSelectionStart = this.selectionStart;
// 				this.oldSelectionEnd = this.selectionEnd;
// 			} else if (this.hasOwnProperty("oldValue")) {
// 				this.value = this.oldValue;
// 				this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
// 			} else {
// 				this.value = "";
// 			}
// 		});
// 	});

// }

// setInputFilter(document.getElementById("precio"), function(value) {

// 		// return /?=$\d*$/.test(value);
// 		return /^-?\d*$/.test(value);
// 	}

// );
// setInputFilter(document.getElementById("millaje"), function(value) {

// 		return /^-?\d*$/.test(value);
// 	}

// );
// setInputFilter(document.getElementById("year"), function(value) {

// 		return /^-?\d*$/.test(value);
// 	}

// );

// setInputFilter(document.getElementById("nombre"), function(value) {
// 	return /^[a-z]*$/i.test(value);
// });
// =======================================