<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  border-radius: 40%;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>
</head>
<body>

<!-- MAIN (Center website) -->
<div class="main">

<h1>My Gallery</h1>
<hr>

<h2>Best seller</h2>

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> All</button>
  <button class="btn" onclick="filterSelection('cleanser')"> Cleanser</button>
  <button class="btn" onclick="filterSelection('lipstick')"> Lipstick</button>
  <button class="btn" onclick="filterSelection('perfume')"> Perfume</button>
  <button class="btn" onclick="filterSelection('powder')"> Powder</button>
  <button class="btn" onclick="filterSelection('eyeliner')"> Eyeliner</button>
  <button class="btn" onclick="filterSelection('remover')"> Remover</button>
</div>

<!-- Gallery Grid -->
<div class="row">
  <div class="column lipstick">
    <div class="content">
      <img src="img/gallery1.jpg" alt="Lipstick" style="width:100%">
      <h4>Lipstick</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column perfume">
    <div class="content">
    <img src="img/gallery2.png" alt="Perfume" style="width:100%">
      <h4>Perfume</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column eyeliner">
    <div class="content">
    <img src="img/gallery3.webp" alt="Eyeliner" style="width:100%">
      <h4>Eyeliner</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  
  <div class="column cleanser">
    <div class="content">
      <img src="img/gallery4.jpg" alt="Cleanser" style="width:100%">
      <h4>Cleanser</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column powder">
    <div class="content">
    <img src="img/gallery5.webp" alt="Powder" style="width:100%">
      <h4>Powder</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column remover">
    <div class="content">
    <img src="img/gallery6.webp" alt="Remover" style="width:100%">
      <h4>Remover</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
</div>
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
</body>
</html>
