<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
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

.active {
  border-style: solid;
  border-width: 1px;
  padding-right: 10px;
  padding-left: 10px;
  padding-top: 4px;
  padding-bottom: 4px;
  color: white;
  font-size: 11px;
  border: 1px solid white;
  margin-top: 10px;
  margin-right: 5px;
}

/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
}

/* Left and right column */
.column.side {
padding-top: 30px;
  width: 40%;
}

/* Middle column */
.column.middle {
  width: 60%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column.side, .column.middle {
    width: 100%;
  }
}

div.gallery img {
  width: 90%;
  height: auto;
}

body{
    margin: 10;
}

.columns {
  float: left;
  width: 33.33%;
  padding: 15px;
}

/* Clear floats after the columns */
.rows:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width:600px) {
  .columns {
    width: 100%;
  }
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

.rating {
  background-color: #E8E8E8;
  width: 200px;
  height: 200px;
  border: 1px solid grey;
  padding: 20px;
  margin-left: 25px;
  margin-right: 40px;;
  border-radius: 5px;
  box-shadow: 2px 2px 5px lightblue;
  float:left;
}

.checked {
  color: orange;
}
</style>
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#news">Explore</a></li>
  <li><a href="#package">Package</a></li>
  <li><a href="#contact">Contact</a></li>
  <li style="float:right" class="dropdown">
  <a href="javascript:void(0)" class="dropbtn">Setting</a>
  <div class="dropdown-content">
  <a href="change-password.php">Change Password</a>
  <a href="logout.php">Logout</a>
  </div>
</li>
</ul>



<div class="row">
  <div class="column side">
    <h1 style="padding-left: 20px">Book Langkawi Tour Packages from Us!</h1>
    <p style="padding-left: 20px">We are dedicated to get you the best prices for Langkawi Sunset Cruise, Mangrove Tours, Island Hoping and other tours.</p>
  </div>
  
  <div class="column middle">
    <div class="gallery">
    <a target="_blank" href="img_5terre.jpg">
      <img src="https://images.unsplash.com/photo-1575397721733-c58fa48e80ff?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fGxhbmdrYXdpfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Cinque Terre" width="400" height="200">
    </a>
  </div>
  </div>
  <br/>
  <br/>
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
  <h3 style="text-align:center">Our hottest package</h3>
  <p style="text-align:center; padding-left:200px;padding-right:200px">Come and get our best selling tour activities. We will not disappoint you by our hottest packages. Grab now!</p>
  
  <div class="rows">
    <div class="columns">
      <div><img class="img" src="https://image.kkday.com/v2/image/get/w_960%2Cc_fit%2Cq_55%2Ct_webp/s1.kkday.com/product_132460/20220822065654_m5yKV/jpg" alt="Cinque Terre" width="210" height="180" style="margin-left:100px"></div>
    </div> 
    
    <div class="columns">
      <div><img class="img" src="https://tourslangkawi.com/wp-content/uploads/2021/10/Island-Hopping-Langkawi-04-1-300x300.jpg" alt="Cinque Terre" width="200" height="180" style="margin-left:100px"></div>
    </div> 
    
   <div class="columns">
      <div><img class="img" src="https://www.langkawi-insight.com/langkawi_i00001e.jpg" alt="Cinque Terre" width="200" height="180" style="margin-left:100px"></div>
    </div> 

    <div style="float:left; margin-left: 170px"> 
        Sunset Cruise <br/>  &ensp; RM200.00               
        </div>
        
        <div style="float:left; margin-left: 260px"> 
        Island Hoping <br/>  &ensp; RM50.00                    
        </div>
        
        <div style="float:left; margin-left: 300px"> 
        Mangrove Tour <br/>  &emsp; RM120.00                    
        </div>
  </div>
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
 
  <div>
          <h2 style="text-align:center;background-color: white;">Comment & Review</h2>
     </div>

     <div class="rating">
<h4>Ahmad Ali</h4>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<p>We can't thank you enough. We had such a fantastic honeymoon at Langkawi Island! </p>
</div>

<div class="rating">
<h4>Suhaila Mohamad</h4>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<p>Memang terbaik. Recommended kepada sesiapa yang ada plan nak ke Langkawi. </p>
</div>

<div class="rating">
<h4>Jason </h4>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<p>Recommended! Had great personal experience with them. </p>
</div>

<div class="rating">
<h4>Jenny Soh </h4>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<p>Everything was wonderful. What a beautiful spot for family. </p>
</div>

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
 


</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>