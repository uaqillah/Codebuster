<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

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

#contact {
  border: 1px solid #F8F8F8;
  padding: 10px;
  box-shadow: 2px 2px 5px #808080;
  margin: 20px;
  margin-left: 100px;
  margin-top: 80px;
  border-radius:5px;
  width:30%;
  height:200px;
  background-color: white;
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
  width: 40%;
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

<h1 style="text-align: center;">Get In Touch With Us!</h1>

<div id="contact">
  <i class="fa fa-envelope" style="float:left;margin-top:30px; margin-left:15px;font-size:20px" ></i>
  <p style="font-family: Consolas, monaco, monospace;font-size:15px;margin-top:30px; margin-left:40px"><b> &emsp;aisyahsha321@gmail.com</b> </p>
  <i class="fa fa-phone" style="font-size:20px; margin-top:14px;margin-left:15px;float:left"></i>
  <p style="font-family: Consolas, monaco, monospace;font-size:15px;margin-top:29px;margin-left:40px"><b> &emsp;01124254231</b> </p>
</div>

<div id="message">
<form action="">
    <input style="float:left" type="text" id="fname" name="firstname" placeholder="first name">
    <input style="margin-left:40px" type="text" id="lname" name="lastname" placeholder="last name">
<br/>
<input style="float:left" type="text" id="email" name="email" placeholder="email">
    <input style="margin-left:40px" type="text" id="phone" name="phone" placeholder="phone number">
    <br/>
    <input type="text" id="subject" name="subject" placeholder="subject">
<br/>

    <textarea id="write" name="write" placeholder="Write something.." style="height:200px;width:88%"></textarea>
<br/>
    <input type="submit" value="Send message">
  </form>
</div>

</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>