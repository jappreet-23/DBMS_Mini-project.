<!DOCTYPE html>
<html lang="en">
<head>
  <title>welcome page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="stylesheet1.css">
</head>
<style>


li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
.button {
  border-radius: 2px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 15px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}.bg-img {
  /* The image used */
  background-image: url("hhi.jpg");

  min-height: 380px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.dropbtn {
  background-color: #806699;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}

</style>


<body>

	 <h1 style="margin-left: 500px;font-family: impact;text-shadow: 1px 2px 15px red">TAGORE BIRD SANCTUARY </h1> 
     <br><br>
     
<nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
       <li><a href="#home">Home</a></li>
  <li><a href="#news">News</a></li>

  <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">visiting times</button>
  <div id="myDropdown" class="dropdown-content">
    <a>MONDAY - 9:00am to 4:00pm</a>
    <a>TUESDAY - 9:00am to 4:00pm</a>
    <a>WEDNESDAY - 9:00am to 4:00pm</a>
    <a>THRUSDAY - 9:00am to 4:00pm</a>
<a>FRIDAY - 9:00am to 4:00pm</a>
<a>SATURDAY - 9:00am to 4:00pm</a>
<a>SUNDAY IS HOLIDAY</a>
  </div>
</div>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-cog"></span> settings</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>

 

<div class="bg-img">
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    
    
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>

<h3> Importance of birds</h3>
  <p class="class">Birds, also known as Aves or avian dinosaurs, are a group of endothermic vertebrates, characterised by feathers, toothless beaked jaws, the laying of hard-shelled eggs, a high metabolic rate, a four-chambered heart, and a strong yet lightweight skeleton. Birds live worldwide and range in size from the 5 cm (2 in) bee hummingbird to the 2.75 m (9 ft) ostrich. They rank as the world's most numerically successful class of tetrapods, with approximately ten thousand living species,[3] more than half of these being passerine, or "perching" birds. Birds have wings whose development varies according to species; the only known groups without wings are the extinct moa and elephant birds. Wings, which evolved from forelimbs, gave birds the ability to fly, although further evolution has led to the loss of flight in some birds, including ratites, penguins, and diverse endemic island species of birds. The digestive and respiratory systems of birds are also uniquely adapted for flight. Some bird species of aquatic environments, particularly seabirds and some waterbirds, have further evolved for swimming.
  Birds have been integral to humans since prehistory. To birds’ detriment, they and their eggs have been an important human food source since humans evolved, and we have hunted many species to extinction. Feathers, usually obtained by killing their original owners, have been used as adornment in hats, headdresses, and capes. Birds are popular as “pets” throughout the world, and the pet trade has driven many species to the edge of extinction.

More benignly, birds appear in ancient art and mythology worldwide. Birdsong enriches the outdoors for many people, and birdwatching is one of the fastest-growing recreational activities. Birds also were the primary inspiration for human flight.</p>

<h3> Importance of sanctuaries</h3>
  <p class="class">
    <b>Endangered species protection</b>

Sanctuaries have been created to protect endangered species. On Kangaroo Island and the Fleurieu Peninsula sanctuaries are protecting sheoak habitat for glossy-black cockatoos. Other sanctuaries have been established to protect pygmy bluetongue lizards living in native grasslands in the northern agricultural districts.

<b>Production and biodiversity conservation</b>

There are many sanctuaries that combine other land uses with biodiversity conservation. Sanctuary landowners are involved in:
farming, grazing and horticultural enterprises
production and distribution of electricity
organic horticulture and wine production.
Ecotourism

<b>A number of sanctuaries are involved in ecotourism offering:</b>

bed and breakfast accommodation
guided tours and nature walks
opportunities for tourists to come in contact with Australia's unique wildlife
</p>


<form class="modal-content animate" method="POST" action="bookings.html" >

<button class="button"><span>BOOK NOW!!!</span></button>

</form>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>


</body>
</html>