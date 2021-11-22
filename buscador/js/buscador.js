function postdata(id_serv) {
	let xmlhttp;

	if (window.XMLHttpRequest) {

		xmlhttp = new XMLHttpRequest();

	} else {

		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

	}

	xmlhttp.onreadystatechange = function() {

		if (this.readyState == 4 && this.status == 200) {
			// console.log(this.response);                                                            

			let pueblos = JSON.parse(this.response);
			// console.log(pueblos);                                                            
			genera_select_pueblos(pueblos);
		}

	};

	var datos = new FormData(); // Currently empty

	datos.append("id_serv", id_serv);

	let url = "./php/get_pueblo.php";

	xmlhttp.open("POST", url, true);

	xmlhttp.send(datos);
}

function removeAllChildNodes(parent) {
	while (parent.firstChild) {
		parent.removeChild(parent.firstChild);
	}
}
let servicio = document.getElementById("servicio");

servicio.addEventListener("change", function(argument) {

	postdata(this.value);

});

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