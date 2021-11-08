<style>
   * {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  /*background-color: #e9e9e9;*/
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
   margin-bottom: 8px;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;

}

@media screen and (max-width: 600px) {
	.search-container{
		  display: block;
		   width: 100%;
	}
  .topnav .search-container {
    /*float: none;*/
  }
  .topnav input[type=text]{
  	width: 90%;
  }
  .topnav .search-container button {
  	width: 10%;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    /*float: none;*/
    /*display: block;*/
    text-align: left;
    /*width: 100%;*/
    margin: 5px 0px 5px 0px;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
}
</style>
<div class="topnav">
   <!--  <a class="active" href="#home">Home</a>
  <a href="#about">About</a>
  <a href="#contact">Contact</a> -->
   <div class="search-container">
      <div>
         <input name="search" placeholder="Codigo anuncio.." type="text"/>
         <button type="button">
            <i class="fa fa-search">
            </i>
         </button>
      </div>
   </div>
</div>
<!-- <div style="padding-left:16px">
  <h2>Responsive Search Bar</h2>
  <p>Navigation bar with a search box and a submit button inside of it.</p>
  <p>Resize the browser window to see the responsive effect.</p>
</div> -->
