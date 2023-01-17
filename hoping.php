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
	<title>HOME</title>


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

a{
color:grey;
}
a:link {
  text-decoration: none;
  color: grey;
}

img{
width: 70%;
margin-left: 200px;
margin-top: 50px;
}

h1, h3, i{
    margin-left: 40px;
}

.font{
    font-size: x-large;
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
  <a style="color:white" href="javascript:void(0)" class="dropbtn">Setting</a>
  <div class="dropdown-content">
  <a href="change-password.php">Change Password</a>
  <a href="logout.php">Logout</a>
  </div>
</li>
</ul>

<div>
<img src="https://res.klook.com/image/upload/fl_lossy.progressive,q_65/w_800/activities/kame6d5rjjbcicmdxsix.webp">
</div>
<div class="font">
<p style="color:grey;margin-left:40px"><b><a href="home.php" target="_blank" >Home/</a>
<a href="package.php" target="_blank" >Package/</a>
Langkawi Island Hopping
</b></p>
<h1>Langkawi Island Hopping</h1>

<h3>RM50.00 per pax</h3>
<br/>

<i class="fa fa-ship"> &ensp;Visit 3 island include Pregnant Woman Island</i><br/><br/>
<i class="fa fa-clipboard">&ensp; Sharing basis</i>
<br/><br/>
<i style="margin-left:40px;" class="fa fa-exclamation">&ensp; Booking earlier suggested</i>
<br/><br/>
<i class="fa fa-star">&ensp; Cleanliness and safety</i>
<br/><br/>
<i class="fa fa-child">&ensp; Children aged 0-12 must be accompanied by a paying adult</i>
</div>
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>