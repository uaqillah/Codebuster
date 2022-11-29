<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html>
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

.booking {
  display: flex;
  background-color: white;
  margin-top: 50px;
}


.booking > div {
  margin: 10px;
  padding: 10px;
  font-size: 30px;
}
input[type=text], select, input[type=date]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  background-color: #339966;
  color: white;
  padding: 10px 20px;
  margin: 10px 0px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.container {
  display: flex;
  align-items: stretch;
}

.container > div {
  background-color:#383838;
  color: white;
  width: 100px;
  text-align: left;
}
p{
font-size: 20px;
margin-top: 10px;
margin-left:10px;
}

#grad1 {
  height: 50px;
  background-image: linear-gradient(to right, rgba(140, 217, 179), rgba(217, 140, 217));
}
h2{
padding-top: 5px;
text-align: center;
margin-top: 100px;
}
#grad2 {
  height: 50px;
  background-color: grey;
  width: 20%;
  border-radius:5px;
  float:left;
  
}
h3{
margin-top: 12px;
text-align: center;
color: white;
}
.para{
float:left;
margin-left:10px;
font-family: CenturyGothic, Geneva, AppleGothic, sans-serif;
font-size: 15px;
color: grey;
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
  <a href="logout.php">Logout</a>
  </div>
</li>
</ul>

<h1 style="text-align: center;">Packages</h1>

<div class="booking">
  <div style="margin-left: 30px;">
                                    <select class="" style="height: 47px;">
                                        <option selected>Destination</option>
                                        <option value="1">Sunset Cruise</option>
                                        <option value="2">Island Hoping</option>
                                        <option value="3">Mangrove Tour</option>
                                    </select>
                                </div>
                                <div style="font-size:15px; margin-top:30px; margin-right:0px">Date: </div>
                                <div  style="margin-left:0px;">
 <input type="date" id="date" name="date">
 </div>
  <div>
  <label style="font-size:15px" for="adult">Adult:</label>
 <input placeholder="0" style="width: 80px" type="text" id="adult" name="adult">
  </div> 
  <div>
  <label style="font-size:15px" for="children">Children:</label>
 <input placeholder="0" style="width: 80px" type="text" id="children" name="children">
  </div> 
  <div style="margin-left: 50px;">
  <input action="/package.php" type="submit" value="Book">
  </div>
  
</div>
<form style="float: right;" action="fav.php" method="post" style="width: 30%;">
  <input 
style="float: right;margin-top:0px;width:90px;padding:0px;margin-right:0px;"
type="submit" name="submit" Value="My Favourite"/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/>
<input style="margin-right:400px" type="checkbox" name="check_list[]" value="Sunset Cruise">
<p style="font-size: 15px;margin-left:0px;margin-top:0px">Add to fav</p>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<input style="margin-right:100px" type="checkbox" name="check_list[]" value="Mangrove Tour">
<p style="font-size: 15px;margin-left:0px;margin-top:0px">Add to fav</p>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<input style="margin-right:100px" type="checkbox" name="check_list[]" value="Island Hopping">
<p style="font-size: 15px;margin-left:0px;margin-top:0px">Add to fav</p>

</form>

<div class="container" style="margin-top: 50px;margin-left:50px;">
  <div style="flex-basis:300px"><img style="width: 100%; height: 100%" src="https://i.pinimg.com/564x/20/e6/70/20e670765ec0793e5ef8e296402430f5.jpg"></div>
  <div style="flex-basis:500px; ">
  <p style="margin-top: 20px;"><b>Sunset Cruise</b> <br/><br/> Great for travelling couples and honeymooners, it also includes buffet dinner on cruise <br/><br/><br/> <a style="color:white" href="sunset.php">Read more</a></p>
  </div>
 
</div>

<div class="container" style="margin-top: 50px;margin-left:50px;">
  <div style="flex-basis:300px"><img style="width: 100%; height: 100%" src="https://www.langkawi-insight.com/langkawi_i00001e.jpg"></div>
  <div style="flex-basis:500px; ">
  <p style="margin-top: 20px;"><b>Mangrove Tour</b> <br/><br/> 
  Offers some truly unforgettable sights and experiences on this tour while passing through
  winding river, you will observe the wonders of the park's marine ecosystem, its flora and fauna and the natural inhabitants
  <br/><br/><br/> <a style="color:white" href="mangrove.php">Read more</a></p>
  </div>
</div>

<div class="container" style="margin-top: 50px;margin-left:50px;">
  <div style="flex-basis:300px"><img style="width: 100%; height: 100%" src="https://tourslangkawi.com/wp-content/uploads/2021/10/Island-Hopping-Langkawi-04-1-300x300.jpg"></div>
  <div style="flex-basis:500px; ">
  <p style="margin-top: 20px;"><b>Island Hoping</b> <br/><br/> 
  Visit Langkawi's popular islands on a boat tour, perfect for nature lovers
    and also witness magnificent eagles
  <br/><br/><br/> <br/><br/><br/> <br/><a style="color:white" href="hoping.php">Read more</a></p>
  </div>
</div>

<div id="grad1">
<h2>List of Upcoming Packages</h2>
</div>

<div style="margin-top: 30px;margin-left:20px">
<div id="grad2">
<h3>MARCH</h3></div>
<p class="para"><b>PRIVATE MANGROVE TOUR WITH MEAL</b>
</p>
<br/><br/><br/>

<div id="grad2">
<h3>JUNE</h3></div>
<p class="para"><b>LANGKAWI FISHING TRIP</b>
</p>
<br/><br/><br/>

<div id="grad2">
<h3>AUGUST</h3></div>
<p class="para"><b>MANGROVE KAYAKING TOUR</b>
</p>
</div>
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
