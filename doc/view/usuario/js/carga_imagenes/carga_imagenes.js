function testImage(URL) {
	var tester = new Image();
	tester.onload = imageFound;
	tester.onerror = imageNotFound;
	tester.src = URL;
}

function imageFound() {
	alert('That image is found and loaded');
}

function imageNotFound() {
	alert('That image was not found.');
}

testImage("http://foo.com/bar.jpg");