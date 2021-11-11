let select_categoria = document.querySelectorAll(".selccion .select_categoria");

for (let i = 0; i < select_categoria.length; i++) {
	// console.log(select_categoria[i].childNodes);
	selecionado(select_categoria[i]);
}

function selecionado(select) {
	let opcion = [];
	// console.log(select.children);

	for (let i = 0; i < select.children.length; i++) {

		// console.log(select.children[i]);
		if (select.value == select.children[i].value) {
			select.children[i].selected = true;
			console.log(select.children[i]);
			console.log(select.value);

			// opcion.push(select.children[i]);
		}
	}

	// console.log(opcion);
}