<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

 ?>

<!DOCTYPE html>
<html>
    <head>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


<style>
          * {
  box-sizing: border-box;
}

body {
  margin: 0;
  background-color: #E8E8E8;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: grey;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

li a, .dropbtn{
     display: inline-block;
     color: white;
     text-align: center;
     padding: 14px 16px;
     text-decoration: none;
}

li.dropdown {
  display: inline-block;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  min-width: 100px;
  z-index: 1;
}

.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: grey}

.dropdown:hover .dropdown-content {
  display: block;
  background-color: grey;
}

.dropdown:hover .dropbtn {
  background-color: grey;
}

#contact {
  border: 0px solid #F8F8F8;
  padding: 0px;
  margin-left: 100px;
  margin-top: 0px;
  width:30%;
  height:200px;
  float: left;
}

#message {
  border: 1px solid #F8F8F8;
  padding: 10px;
  box-shadow: 2px 2px 5px #808080;
  margin: 20px;
  margin-left: 100px;
  margin-top: 80px;
  border-radius:5px;
  width:45%;
  height:500px;
  background-color: white;
  float: left;
}

input[type=text], select, textarea {
  width: 42%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  margin-left: 25px;
  resize: vertical;
}

input[type=submit] {
  background-color: #339966;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-left: 25px;
}

input[type=submit]:hover {
  background-color: #009966;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

.kolom {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.baris:after {
  content: "";
  display: table;
  clear: both;
}

a:link {
  text-decoration: none;
}
</style>
</head>

<body>

<h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="explore.php">Explore</a></li>
  <li><a href="package.php">Package</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li style="float:right" class="dropdown">
  <a href="javascript:void(0)" class="dropbtn">Setting</a>
  <div class="dropdown-content">
  <a href="change-password.php">Change Password</a>
  <a href="history.php">Booking History</a>
  <a href="logout.php">Logout</a>
  </div>
</li>
</ul>

<h1 style="text-align: center;">Get In Touch With Us!</h1>

<div class="container">
  <div class="mySlides">
    <img src="https://media.gettyimages.com/id/1235327413/photo/visitors-walk-atop-the-lookout-point-near-langkawi-skycab-cable-car-in-langkawi-on-september.jpg?s=612x612&w=0&k=20&c=tAkU6kgufDsQDQeo51yhtTGYGRk-uqjnehDhD28m48g=" style="width:50%; margin-left:300px">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="https://media.gettyimages.com/id/1235327090/photo/this-picture-shows-a-landmark-eagle-statue-in-langkawi-on-september-18-as-the-holiday-island.jpg?s=612x612&w=0&k=20&c=JzJ4npVEQ5wvlZHwxEtqPUKyZaVpVWQrh4Ghw-Ku8sM="  style="width:50%; margin-left:300px">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="https://media.gettyimages.com/id/481586373/photo/malaysia-kedah-langkawi-datai-bay-beach.jpg?s=612x612&w=0&k=20&c=nESBhYck5GLgWYseqlppu0_KaKlsQ8-vqgBi2Cwec3A=" style="width:50%; margin-left:300px">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="https://media.gettyimages.com/id/1235311407/photo/passengers-swim-in-the-sea-as-a-catamaran-yacht-sails-in-langkawi-on-september-17-as-the.jpg?s=612x612&w=0&k=20&c=aeRvWxIIDiK1kguBa4mbaNdXZPDLJI-Nyj4SbuddLqY=" style="width:50%; margin-left:300px">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="https://media.gettyimages.com/id/157727694/photo/langkawi-island-malaysia.jpg?s=612x612&w=0&k=20&c=fLGyUgcyI6UIYUThm-hSiqF1EotYdtyD9ofEDdZPisY=" style="width:50%; margin-left:300px">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="https://media.gettyimages.com/id/1209823834/photo/langkawi-cable-car-also-known-as-langkawi-skycab-is-one-of-the-major-attractions-in-langkawi.jpg?s=612x612&w=0&k=20&c=GYMsZbdWvWNig6N3hlXVGDaQw8ai5VFTf_FI7gPOwN4=" style="width:50%; margin-left:300px">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="https://media.gettyimages.com/id/1235327413/photo/visitors-walk-atop-the-lookout-point-near-langkawi-skycab-cable-car-in-langkawi-on-september.jpg?s=612x612&w=0&k=20&c=tAkU6kgufDsQDQeo51yhtTGYGRk-uqjnehDhD28m48g=" style="width:100%" onclick="currentSlide(1)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="https://media.gettyimages.com/id/1235327090/photo/this-picture-shows-a-landmark-eagle-statue-in-langkawi-on-september-18-as-the-holiday-island.jpg?s=612x612&w=0&k=20&c=JzJ4npVEQ5wvlZHwxEtqPUKyZaVpVWQrh4Ghw-Ku8sM=" style="width:100%" onclick="currentSlide(2)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="https://media.gettyimages.com/id/481586373/photo/malaysia-kedah-langkawi-datai-bay-beach.jpg?s=612x612&w=0&k=20&c=nESBhYck5GLgWYseqlppu0_KaKlsQ8-vqgBi2Cwec3A=" style="width:100%" onclick="currentSlide(3)">
    </div>
    <div class="column">
      <img class="demo cursor" src="https://media.gettyimages.com/id/1235311407/photo/passengers-swim-in-the-sea-as-a-catamaran-yacht-sails-in-langkawi-on-september-17-as-the.jpg?s=612x612&w=0&k=20&c=aeRvWxIIDiK1kguBa4mbaNdXZPDLJI-Nyj4SbuddLqY=" style="width:100%" onclick="currentSlide(4)">
    </div>
    <div class="column">
      <img class="demo cursor" src="https://media.gettyimages.com/id/157727694/photo/langkawi-island-malaysia.jpg?s=612x612&w=0&k=20&c=fLGyUgcyI6UIYUThm-hSiqF1EotYdtyD9ofEDdZPisY=" style="width:100%" onclick="currentSlide(5)">
    </div>    
    <div class="column">
      <img class="demo cursor" src="https://media.gettyimages.com/id/1209823834/photo/langkawi-cable-car-also-known-as-langkawi-skycab-is-one-of-the-major-attractions-in-langkawi.jpg?s=612x612&w=0&k=20&c=GYMsZbdWvWNig6N3hlXVGDaQw8ai5VFTf_FI7gPOwN4=" style="width:100%" onclick="currentSlide(6)">
    </div>
  </div>
</div>

<br/><br/>
<div id="contact">
    <p style="font-family: Consolas, monaco, monospace;font-size:15px;margin-top:30px; margin-left:40px"><b> &emsp;SHUHAILA TRAVEL AGENCIES</b> </p>
  <img src="call.png" style="float:left;margin-top:15px; margin-left:50px;height:17px" >
  <p style="font-family: Consolas, monaco, monospace;font-size:15px;margin-top:30px; margin-left:80px"><b> &emsp;01124254231</b> </p>
  <img src="facebook-app-symbol.png" style="float:left;margin-top:15px; margin-left:50px;height:20px" >
  <p style="font-family: Consolas, monaco, monospace;font-size:15px;margin-top:29px;margin-left:80px"><b> &emsp;Shuhaila Travel Agencies</b> </p>
  <img src="email.png" style="float:left;margin-top:15px; margin-left:50px;height:20px" >
  <p style="font-family: Consolas, monaco, monospace;font-size:15px;margin-top:29px;margin-left:80px"><b> &emsp;aisyahsha321@gmail.com</b> </p>
</div>

<form class="contact-form" action="contactform.php" method="post">
  <input style="width:20%" type="text" name="name" placeholder="Full name">
  <input style="width:20%" type="text" name="mail" placeholder="Your e-mail">
  <input type="text" name="subject" placeholder="Subject">
  <textarea style="height:150px" type="message" placeholder="Message"></textarea><br/>
  <button style="margin-left:530px; background-color:black;color:white;padding:10px;border:none;border-radius:4px;font-family: Consolas, monaco, monospace;" type="submit" name="submit">SEND MAIL</button>
</form>

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
 
 <br/>
  <ul style="height:250px;color:white;font-family: Georgia, Times, "Times New Roman", serif;">
  <div class="baris" style="margin-left:100px;margin-top:20px">
  <div class="kolom" style="text-align:center">
    <h3>OUR MOTTO</h3>
    <p>Making your travel experience unforgettable can crafting unique and personalized itineraries, providing exceptional customer service, and going above and beyond to exceed your expectations, every step of the way</p>
    <a href="https://www.facebook.com/Shuhaila-Travel-Agencies-114482994869639/"><img src="facebook2.png" style="height:35px"></a>
    <a href="https://wa.link/x2oa9d"><img src="whatsapp2.png" alt="" style="height:35px"></a>
    <a href=" https://www.instagram.com/shuhailatravelagencies/"><img src="instagram2.png" alt="" style="height:35px"></a>
  </div>
  <div class="kolom" style="text-align:center">
    <h3>CONTACT INFO</h3>
    <p>Phone:<br/>+601124254231</p>
    <p >Email:<br/>aisyahsha321@gmail.com</p>
  </div>
  <div class="kolom" style="text-align:center">
    <h3>QUICK LINKS</h3>
    <p><a style="color:white" href="explore.php">Explore</a></p>
    <p><a style="color:white" href="package.php">Package</a></p>
    <p>Terms & Conditions</p>
    <p>Disclaimers</p>
  </div>
</div>
  
</ul>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
