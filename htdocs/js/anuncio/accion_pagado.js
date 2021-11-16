function accion_pagado(argument) {
	let pagado =
		document.querySelectorAll(
			'[name="pagado"]'
		);

	for (var i = 0; i < pagado.length; i++) {

		pagado[i].addEventListener("click", function() {
			// console.log("El valor de img_cantidad es :" + img_cantidad);

			//  Selecciona  de todas las cajas contenedoras de imágenes 
			let img_caja_contenedor =
				document.querySelectorAll(".img_caja_contenedor");
			console.log(img_caja_contenedor);
			//  Si el elemento seleccionado tiene un valor de si entonces  
			// realizara el condicional a continuación 
			if (this.value == "si") {
				// console.log('si');
				img_cantidad = 4;

				mensaje =
					"Anuncios pagados pueden publicar " + img_cantidad + " imágenes";

				console.log("El valor de img_cantidad es :" + img_cantidad);

				for (var i = 0; i < img_caja_contenedor.length; i++) {

					img_caja_contenedor[i].style.display = "block";
				}

			}
			//  Si le elemento tiene el  valor de no entonces realizara 
			// las siguientes instrucciones 
			if (this.value == "no") {
				// console.log('no');
				img_cantidad = 2;
				mensaje =
					"Anuncios gratuitos pueden  publicar " +
					img_cantidad + " imágenes";

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
	}
}

console.log("accion_pagado");