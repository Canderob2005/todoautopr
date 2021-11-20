function getProveedores(id_serv, pueblo) {
	let xmlhttp;

	if (window.XMLHttpRequest) {

		xmlhttp = new XMLHttpRequest();

	} else {

		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

	}

	xmlhttp.onreadystatechange = function() {

		if (this.readyState == 4 && this.status == 200) {
			console.log(this.response);

			let pueblos = JSON.parse(this.response);
			console.log(pueblos);

			// let display = document.querySelector(".display");

			// display.textContent = pueblos;
			// genera_select_pueblos(pueblos);
		}

	};

	var datos = new FormData(); // Currently empty

	datos.append("id_serv", id_serv);
	datos.append("pueblo", pueblo);

	let url = "./php/get_preveedor.php";

	xmlhttp.open("POST", url, true);

	xmlhttp.send(datos);
}

function removeAllChildNodes(parent) {
	while (parent.firstChild) {
		parent.removeChild(parent.firstChild);
	}
}
let enviar = document.getElementById("enviar");
// let servicio = document.getElementById("servicio");
let pueblo = document.getElementById("pueblo");

// enviar.addEventListener("click", function(argument) {

// 	getProveedores(servicio.value, pueblo.value);

// });

function genera_select_pueblos(argument) {
	// console.log(argument.pueblo);
	// let opcion = document.createElement("option");
	let pueblo = document.getElementById("pueblo");
	removeAllChildNodes(pueblo);
	let opcion = [];
	for (var i = 0; i < argument.length; i++) {
		opcion.push(document.createElement("option"));
		console.log(argument[i].pueblo);
		opcion[i].textContent = argument[i].pueblo;
		pueblo.appendChild(opcion[i]);
	}
	// body...
}