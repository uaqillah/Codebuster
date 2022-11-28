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

.polaroid a {
        background: #ffffff;
        padding: 0px 0px 30px;
        margin-top: 10px;
        margin-bottom: 50px;
        text-align: center;
        text-decoration: none;
        -webkit-box-shadow: 0 4px 6px rgba(0, 0, 0, .3);
        -moz-box-shadow: 0 4px 6px rgba(0, 0, 0, .3);
        box-shadow: 0 4px 6px rgba(0, 0, 0, .3);
        -webkit-transition: all .20s linear;
        -moz-transition: all .20s linear;
        transition: all .20s linear;
        z-index: 0;
        position: relative;
        float: left;
      }
      .polaroid a:after {
        color: #333;
        font-size: 15px;
        content: attr(title);
        position: relative;
        top: 15px;
      }
      .polaroid img {
        display: block;
        width: 250px;
      }
      .polaroid a:hover {
        -webkit-transform: scale(1.2);
        -moz-transform: scale(1.2);
        transform: scale(1.2);
        z-index: 10;
        -webkit-box-shadow: 0 10px 20px rgba(0, 0, 0, .7);
        -moz-box-shadow: 0 10px 20px rgba(0, 0, 0, .7);
        box-shadow: 0 10px 20px rgba(0, 0, 0, .7);
      }
      .explore{
        font-family: Georgia, Times, "Times New Roman", serif;
        font-size: xx-large;
       text-align: center;
       margin-top: 50px;
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

<div class="explore">
    <b>Explore</b>
</div>

<h2 style="text-align: center; margin-top: 100px">
    Sunset Cruise
</h2>
<div>
<div class="polaroid" style="margin-left: 150px">
      <a href="" title="Enjoy the view">
        <img height="250" src="https://i.pinimg.com/564x/20/e6/70/20e670765ec0793e5ef8e296402430f5.jpg"  />
      </a>
    </div>

    <div class="polaroid" style="margin-left: 550px ">
      <a href="" title="The docks">
        <img height="250" src="https://www.kkday.com/en/blog/wp-content/uploads/75580624_599734270797651_1193870272513754016_n-1024x805.jpg"  />
      </a>
    </div>

    <div class="polaroid" style="margin-left: 950px ">
      <a href="" title="Dinner on Cruise">
        <img height="250" src="https://www.kkday.com/en/blog/wp-content/uploads/119715810_1551829004989124_8973393147320337449_n.jpg"  />
      </a>
    </div>
    </div>
    <br/>

<div>
    <h2 style="text-align: center; margin-top: 400px; ">
   Mangrove Tour
</h2>
</div>

<div class="polaroid" style="margin-left: 150px">
      <a href="" title="Mangrove area">
        <img height="250" src="https://i.pinimg.com/236x/bc/17/3a/bc173a1829772f3a72be18383199f9b3.jpg"  />
      </a>
    </div>

    <div class="polaroid" style="margin-left: 550px ">
      <a href="" title="Fish farm">
        <img height="250" src="https://1.bp.blogspot.com/-tgeN0hB0RzE/VUn5XSnNiOI/AAAAAAAAVCw/39RjiuljDig/s1600/DSC_3476.JPG"  />
      </a>
    </div>

    <div class="polaroid" style="margin-left: 950px ">
      <a href="" title="Bat cave">
        <img height="250" src="https://kasbah.my/wp-content/uploads/2017/10/mangrove_cave.jpg"  />
      </a>
    </div>

    <div>
    <h2 style="text-align: center; margin-top: 450px; ">
  Island Hopping
</h2>
</div>

<div class="polaroid" style="margin-left: 150px">
      <a href="" title="Eagle watching">
        <img height="250" src="https://www.langkawi-insight.com/langkawi_i000272.jpg"  />
      </a>
    </div>

    <div class="polaroid" style="margin-left: 550px ">
      <a href="" title="Dayang Bunting Island">
        <img height="250" src="https://www.researchgate.net/profile/Tanot-Unjah/publication/324256138/figure/fig3/AS:612414458433537@1523022393605/The-figure-of-lying-pregnant-lady-at-Tasik-Dayang-Bunting-formed-by-series-of-mogotes_Q640.jpg"  />
      </a>
    </div>

    <div class="polaroid" style="margin-left: 950px ">
      <a href="" title="Beras Basah Island">
        <img height="250" src="https://res.klook.com/images/fl_lossy.progressive,q_65/c_fill,w_1295,h_720/w_80,x_15,y_15,g_south_west,l_Klook_water_br_trans_yhcmh3/activities/oeip0notjbakgq9khtcu/LangkawiIslandHoppingSharedSpeedboatTour.webp"  />
      </a>
    </div>
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>