	//  Trabaja todo lo relacionado al as miniaturas de fotos 
	function miniaturas(argument) {

		// Elemento que recoje multiples imagenes 
		let imagenes = document.getElementById("imagenes");

		//  Elementos  para imagenes 
		let imagen1 = document.getElementById("imagen1");
		let imagen2 = document.getElementById("imagen2");
		let imagen3 = document.getElementById("imagen3");
		let imagen4 = document.getElementById("imagen4");
		// ////////////////////////////////////////////////////
		//   Elementos  para emular acciones individuales de las imagenes 
		let add1 = document.getElementById("add1");
		let remove1 = document.getElementById("remove1");

		let add2 = document.getElementById("add2");
		let remove2 = document.getElementById("remove2");

		let add3 = document.getElementById("add3");
		let remove3 = document.getElementById("remove3");

		let add4 = document.getElementById("add4");
		let remove4 = document.getElementById("remove4");


		// ////////////////////////////////////////////////////
		let secion_img =
			document.querySelectorAll(".img_display");

		// console.log("------------------------------");
		// console.log('Secciones de imagenes');
		// console.log(secion_img);
		// console.log("------------------------------");
		// ////////////////////////////////////////////////////



		let agregar_multiple =
			document.getElementById("agregar_multiple");
		// ===============================================
		let rutas = [];

		let url_fondo = "./img/fondo.jpeg";

		//  Guardamos la ruta definida y se generan 3 incides 
		for (var i = 0; i < 4; i++) {
			rutas.push(url_fondo);
			ficheros.push("");
		}

		// ===================
		// console.log("-------------------------------");
		// console.log("Ficheros");
		// console.log(ficheros);
		// console.log("-------------------------------");



		// ===================
		// console.log("-------------------------------");
		// console.log("Rutas");
		// console.log(rutas);
		// console.log("-------------------------------");

		// ===============================================

		// Todos los contenedores para las imágenes 
		// que vera el usuario 
		let img_caja_contenedor =
			document.querySelectorAll(".img_caja_contenedor");


		for (var i = 0; i < img_caja_contenedor.length; i++) {
			img_caja_contenedor[i].style.display = "none";
		}

		// ===================
		//  Evento: Agregar múltiples 
		agregar_multiple.addEventListener("click", function(argument) {

			//  Se restablece en 0 la variable matriz ficheros  con  ruta por defecto 
			ficheros = [];
			//  Al activarse el Evento emula click en el elemento oculto 
			imagenes.click();

		});

		//  Obtiene todas las imágenes en un solo elemento de entrada 
		// Este elemento espera a cambios y su evento click es emulado por otro elemento. 
		imagenes.addEventListener("change", function() {

			// ===================
			// console.log("-----------------------------");
			// console.log("Rutas > evento change imágenes ");
			// console.log(rutas);
			// console.log("-----------------------------");
			// ===================
			// =======================
			// console.log('------------------------------');
			// console.log('Cantidad de ficheros seleccionados');
			// console.log(this.files.length);
			// console.log('------------------------------');

			// Rellenamos la matriz fichero con los 
			// elementos que selecciono el usuario 
			for (var i = 0; i < this.files.length; i++) {
				ficheros[i] = this.files[i];
			}


			// console.log('--------------------------');
			// console.log('Ficheros en matriz');
			// console.log(ficheros);
			// console.log('--------------------------');



			// =======================
			if (!this.files.length) {
				//  NOTA: Condicional innecesario por la prisa 
			} else {

				// La variable {img_cantidad} fuer declarada global  en 
				// el fichero {anuncio.js} en este mismo directorio  

				if (img_cantidad == 0) {
					//  NOTA: Condicional innecesario por la prisa 
				} else {
					// Variable cantidad se usa para 
					// saber si se excede de la cantidad de imágenes permitidas 
					if (this.files.length > img_cantidad) {
						// =================
						// console.log(
						"No puedes agregar mas de " +
						img_cantidad + " imágenes ";
						// =================
					} else {

						// let contenedor = [];
						let img_element = [];
						//  Generamos un objeto de acuerdo 
						// al as imágenes seleccionadas por le usuario 
						for (var i = 0; i < this.files.length; i++) {

							img_element[i] = new Image();
							img_element[i].width = 75;
							img_element[i].height = 75;

						}

						//  Re establecemos la matriz rutas. 
						rutas = [];

						for (let i = 0; i < this.files.length; i++) {

							img_element[i].src = URL.createObjectURL(this.files[i]);

							rutas.push(URL.createObjectURL(this.files[i]));

							// Tan pronto la imagen este cargada 
							// se revoca quedando generando pila de posesos  
							img_element[i].addEventListener("load", function() {

								URL.revokeObjectURL(this.src);

							}, false);

						}
						// console.log("-------------------------------");
						// console.log("Rutas");
						// console.log(rutas);
						// console.log("-------------------------------");

						// 	===========================================
						//  Mismo fondo a todos 
						for (var i = 0; i < secion_img.length; i++) {
							secion_img[i].src = url_fondo;
						}
						//  fondo distinto de pendiendo la longitud 
						//  de selección por el usuario 
						for (var i = 0; i < rutas.length; i++) {
							secion_img[i].src = rutas[i];
						}
						// 	===========================================


					}

				}

			}
			// ===========================
			// Re establecemos el elemento 
			// que recogió todas las imágenes 
			imagenes.value = "";
			// ===========================

		}, false);



		// NOta:
		// Sección de botones con objetivo único es fácil de comprender 
		// No necesita una descripción de su funcionamiento.
		// Debería hacerse una evaluación para compactar 
		// las introducciones mediante bucles y condicionales 

		// =======================================================
		//  Eventos individuales  para eliminar y agregar imágenes 
		// en los cuatros  por separado 
		// ================================================
		add1.addEventListener("click", function(argument) {
			imagen1.click();

		}, false);

		imagen1.addEventListener("change", function() {
			// =======================
			// console.log(this.files);
			// =======================
			let img = new Image();
			img.src = URL.createObjectURL(this.files[0]);
			rutas[0] = URL.createObjectURL(this.files[0]);
			img.width = 75;
			img.height = 75;

			img.addEventListener("load", function() {
				URL.revokeObjectURL(this.src);

			}, false);
			secion_img[0].src = rutas[0];
			ficheros[0] = this.files[0];
			// ===================
			// console.log(rutas);
			// console.log(ficheros);
			// ===================
		}, false);

		// ================================================
		add2.addEventListener("click", function(argument) {
			imagen2.click();
		}, false);

		imagen2.addEventListener("change", function() {
			// ====================
			// console.log(this.files);
			// ====================
			let img = new Image();
			img.src = URL.createObjectURL(this.files[0]);
			rutas[1] = URL.createObjectURL(this.files[0]);
			img.width = 75;
			img.height = 75;

			img.addEventListener("load", function() {
				URL.revokeObjectURL(this.src);

			}, false);
			secion_img[1].src = rutas[1];
			ficheros[1] = this.files[0];
			// ===================
			// console.log(rutas);
			// console.log(ficheros);
			// ===================
		}, false);

		// ================================================
		add3.addEventListener("click", function(argument) {
			imagen3.click();
		}, false);

		imagen3.addEventListener("change", function() {
			// =====================
			// console.log(this.files);
			// =====================
			let img = new Image();
			img.src = URL.createObjectURL(this.files[0]);
			rutas[2] = URL.createObjectURL(this.files[0]);
			img.width = 75;
			img.height = 75;

			img.addEventListener("load", function() {
				URL.revokeObjectURL(this.src);

			}, false);
			secion_img[2].src = rutas[2];
			ficheros[2] = this.files[0];
			// ================
			// console.log(rutas);
			// console.log(ficheros);
			// ================
		}, false);

		// ================================================
		add4.addEventListener("click", function(argument) {
			imagen4.click();
		}, false);

		imagen4.addEventListener("change", function() {
			// =====================
			// console.log(this.files);
			// =====================
			let img = new Image();
			img.src = URL.createObjectURL(this.files[0]);
			rutas[3] = URL.createObjectURL(this.files[0]);
			img.width = 75;
			img.height = 75;

			img.addEventListener("load", function() {
				URL.revokeObjectURL(this.src);

			}, false);
			secion_img[3].src = rutas[3];
			ficheros[3] = this.files[0];
			// ================
			// console.log(rutas);
			// console.log(ficheros);
			// ================
		}, false);

		remove1.addEventListener("click", function(argument) {

			rutas[0] = url_fondo;
			secion_img[0].src = rutas[0];
			ficheros[0] = " ";
			// console.log(rutas);
			// console.log(ficheros);
		}, false);

		remove2.addEventListener("click", function(argument) {
			rutas[1] = url_fondo;
			secion_img[1].src = rutas[1];
			ficheros[1] = " ";
			// =================
			// console.log(rutas);
			// console.log(ficheros);
			// =================
		}, false);

		remove3.addEventListener("click", function(argument) {
			rutas[2] = url_fondo;
			secion_img[2].src = rutas[2];
			ficheros[2] = " ";
			// ===================
			// console.log(rutas);
			// console.log(ficheros);
			// ===================
		}, false);

		remove4.addEventListener("click", function(argument) {
			rutas[3] = url_fondo;
			secion_img[3].src = rutas[3];
			ficheros[3] = " ";
			// ===========================
			// console.log(rutas);
			// console.log(ficheros);
			// ===========================
		}, false);

	}