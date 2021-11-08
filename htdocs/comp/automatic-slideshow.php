<div class="container-fluid pl-5 pr-5">
  <div class="w3-content w3-section" style="max-width:80%;">
    <img class="mySlides" src="img/chebtolete.png" style="width:100%;height: 300px;"/>
    <img class="mySlides" src="img/audi.png" style="width:100%;height: 300px;"/>
    <img class="mySlides" src="img/variosautos.png" style="width:100%;height: 300px;"/>
    <img class="mySlides" src="img/mwecedes.png" style="width:100%;height: 300px;"/>
  </div>
  <script>
    var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
  </script>
</div>
