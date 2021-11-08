// Ver argumentos sobre escribir html con innerHTML 
// https://www.javascripttutorial.net/dom/manipulating/remove-all-child-nodes/

function buscador_anucios(argument) {
	let tabla_aumcio = document.querySelector(".tabla_aumcio table tbody");
	console.log(tabla_aumcio);

	// let btn_prueba = document.querySelector(".btn_prueba input");

	// btn_prueba.addEventListener("click", function(argument) {
	// 	removeAllChildNodes(tabla_aumcio)
	// });

	let txt_busca_id = document.querySelector(".txt_busca_id");

	txt_busca_id.addEventListener("keyup", function(argument) {
		// console.log(this.value);
		getanuncio(this.value, tabla_aumcio);


	});


}

function removeAllChildNodes(parent) {
	while (parent.firstChild) {
		parent.removeChild(parent.firstChild);
	}
}

// /server/
function getanuncio(id, tabla_aumcio) {
	$.get('../server/buscador/busca_pot_id.php', {
		idanuncio: id
	}, function(json, textStatus) {
		removeAllChildNodes(tabla_aumcio)
		console.log(textStatus);
		console.log(json);
		tabla_aumcio.innerHTML = json;

	});
}
buscador_anucios();