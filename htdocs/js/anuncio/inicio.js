window.addEventListener('load', (event) => {
	let contenedor_formulario = document.querySelector(".contenedor_formulario");
	contenedor_formulario.style.display = "block";
	let pagado = document.querySelectorAll(".pagado");
	for (var i = 0; i < pagado.length; i++) {
		pagado[i].checked = false;
	}
	let marca_selecionada_defecto = document.getElementById("marca_selecionada_defecto");
	marca_selecionada_defecto.selected = true;
	trabajoConAnuncio();
});