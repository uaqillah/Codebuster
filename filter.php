<?php
    session_start();
    include "db_conn.php";

    if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
    ?>
<!doctype html>
<head>
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
<li style="float: right; ">
    <form action="search.php" method="GET">
		<input style="width:100px; height: 10px;" type="text" name="query" placeholder="Search.." />
	</form>
  </li>
</ul>


<h1 style="text-align: center;">Packages</h1>

<div class="booking">
  </div><form action="book.php">
  <div style="margin-left: 50px;width: 100px">
  <input type="submit" value="Book">
  </div></form>

  
</div>

</br>

<form style="float:left; margin-left:50px" action="filter.php" method="GET">
<div>
<div>
<label for="">Start Price</label>
<input style="width:100px;" type="text" name="start_price" value="<?php if(isset($_GET['start_price'])){echo $_GET['start_price']; }else{echo "0";} ?>" >
</div>
<div>
<label>End Price</label>
<input style="width:100px;" type="text" name="end_price" value="<?php if(isset($_GET['end_price'])){echo $_GET['end_price']; }else{echo "250";} ?>">
</div>
<div>
<button type="submit">Filter</button>
</div>
</div>
</form>
</br></br></br></br></br></br></br>
    <div>
        <div>
            

            <div >
                <div>
                   
                    <div>
                        <div>
                        <?php  
                        $con = mysqli_connect("localhost","root","","test_db");

                        if(isset($_GET['start_price']) && isset($_GET['end_price']))
                        {
                            $startprice = $_GET['start_price'];
                            $endprice = $_GET['end_price'];

                            $query = "SELECT * FROM package WHERE price BETWEEN $startprice AND $endprice ";
                        }
                        else
                        {
                            $query = "SELECT * FROM package";
                        }
                        
                        $query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            foreach($query_run as $items)
                            {
                                if($items['title']=="Sunset Cruise"){?>
                                    <div class="container" style="margin-top: 50px;margin-left:50px;">
                                    <div style="flex-basis:300px"><img style="width: 100%; height: 100%" src="https://i.pinimg.com/564x/20/e6/70/20e670765ec0793e5ef8e296402430f5.jpg"></div>
                                    <div style="flex-basis:500px; ">
                                    <p style="margin-top: 20px;"><b>Sunset Cruise (RM200)</b> <br/><br/> Great for travelling couples and honeymooners, it also includes buffet dinner on cruise <br/><br/><br/> <a style="color:white" href="sunset.php">Read more</a></p>
                                    </div>
                                    </div> 
                                <?php
                                }
                                else if($items['title']=="Mangrove Tour"){?>
                                    <div class="container" style="margin-top: 50px;margin-left:50px;">
                                    <div style="flex-basis:300px"><img style="width: 100%; height: 100%" src="https://www.langkawi-insight.com/langkawi_i00001e.jpg"></div>
                                    <div style="flex-basis:500px; ">
                                    <p style="margin-top: 20px;"><b>Mangrove Tour (RM120)</b> <br/><br/> 
                                    Offers some truly unforgettable sights and experiences on this tour while passing through
                                    winding river, you will observe the wonders of the park's marine ecosystem, its flora and fauna and the natural inhabitants
                                    <br/><br/><br/> <a style="color:white" href="mangrove.php">Read more</a></p>
                                    </div>
                                    </div>
                                <?php
                                }
                                else if($items['title']=="Island Hoping"){?>
                                <div class="container" style="margin-top: 50px;margin-left:50px;">
                                <div style="flex-basis:300px"><img style="width: 100%; height: 100%" src="https://tourslangkawi.com/wp-content/uploads/2021/10/Island-Hopping-Langkawi-04-1-300x300.jpg"></div>
                                <div style="flex-basis:500px; ">
                                <p style="margin-top: 20px;"><b>Island Hoping (RM50)</b> <br/><br/> 
                                Visit Langkawi's popular islands on a boat tour, perfect for nature lovers
                                    and also witness magnificent eagles
                                <br/><br/><br/> <br/><br/><br/> <br/><a style="color:white" href="hoping.php">Read more</a></p>
                                </div>
                                </div>
                                <?php
                                }
                               
                            }
                        }
                        else
                        {
                            echo "No Record Found";
                        }
                        ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>