<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php
    session_start();
    include "db_conn.php";
	
	
?>
<style>
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
</style>
</head>
<body>
    <?php
	$query = $_GET['query']; 
	
	$min_length = 1;
	
	if(strlen($query) >= $min_length){ 
		
		$query = htmlspecialchars($query); 
		
		$query = $conn->real_escape_string($query);
		
		$raw_results = $conn->query("SELECT * FROM package WHERE (`title` LIKE '%".$query."%') OR (`text` LIKE '%".$query."%')") or die($conn->error);
			
		if(mysqli_num_rows($raw_results) > 0){ 
			
			while($results = mysqli_fetch_array($raw_results)){
			
				echo "<p><h3>".$results['title']."</h3>".$results['text']."</p>";
                if($results['title']=='Sunset Cruise'){
                    echo '<a href="sunset.php">Read more</a>';
                }
                else if($results['title']=='Mangrove Tour'){
                    echo '<a href="mangrove.php">Read more</a>';
                }
                else if($results['title']=='Island Hoping'){
                    echo '<a href="hoping.php">Read more</a>';
                }
				else if($results['title']=='enjoy the view'){
					echo '<div class="polaroid" style="margin-left: 10px">
					<a href="" title="Enjoy the view">
					  <img height="250" src="https://i.pinimg.com/564x/20/e6/70/20e670765ec0793e5ef8e296402430f5.jpg"  />
					</a>
				  </div>';
				}
				else if($results['title']=='the docks'){
					echo '<div class="polaroid" style="margin-left: 10px ">
					<a href="" title="The docks">
					  <img height="250" src="https://www.kkday.com/en/blog/wp-content/uploads/75580624_599734270797651_1193870272513754016_n-1024x805.jpg"  />
					</a>
				  </div>';
				}
				else if($results['title']=='dinner on cruise'){
					echo '<div class="polaroid" style="margin-left: 10px ">
					<a href="" title="Dinner on Cruise">
					  <img height="250" src="https://www.kkday.com/en/blog/wp-content/uploads/119715810_1551829004989124_8973393147320337449_n.jpg"  />
					</a>
				  </div>';
				}
				else if($results['title']=='Mangrove area'){
					echo '<div class="polaroid" style="margin-left: 10px">
					<a href="" title="Mangrove area">
					  <img height="250" src="https://i.pinimg.com/236x/bc/17/3a/bc173a1829772f3a72be18383199f9b3.jpg"  />
					</a>
				  </div>';
				}
				else if($results['title']=='Fish farm'){
					echo '<div class="polaroid" style="margin-left: 10px ">
					<a href="" title="Fish farm">
					  <img height="250" src="https://1.bp.blogspot.com/-tgeN0hB0RzE/VUn5XSnNiOI/AAAAAAAAVCw/39RjiuljDig/s1600/DSC_3476.JPG"  />
					</a>
				  </div>';
				}
				else if($results['title']=='Bat cave'){
					echo '<div class="polaroid" style="margin-left: 10px ">
					<a href="" title="Bat cave">
					  <img height="250" src="https://kasbah.my/wp-content/uploads/2017/10/mangrove_cave.jpg"  />
					</a>
				  </div>';
				}
				else if($results['title']=='Eagle watching'){
					echo '<div class="polaroid" style="margin-left: 10px">
					<a href="" title="Eagle watching">
					  <img height="250" src="https://www.langkawi-insight.com/langkawi_i000272.jpg"  />
					</a>
				  </div>';
				}
				else if($results['title']=='Dayang Bunting Island'){
					echo '<div class="polaroid" style="margin-left: 10px ">
					<a href="" title="Dayang Bunting Island">
					  <img height="250" src="https://www.researchgate.net/profile/Tanot-Unjah/publication/324256138/figure/fig3/AS:612414458433537@1523022393605/The-figure-of-lying-pregnant-lady-at-Tasik-Dayang-Bunting-formed-by-series-of-mogotes_Q640.jpg"  />
					</a>
				  </div>';
				}
				else if($results['title']=='Beras Basah Island'){
					echo '<div class="polaroid" style="margin-left: 10px ">
					<a href="" title="Beras Basah Island">
					  <img height="250" src="https://res.klook.com/images/fl_lossy.progressive,q_65/c_fill,w_1295,h_720/w_80,x_15,y_15,g_south_west,l_Klook_water_br_trans_yhcmh3/activities/oeip0notjbakgq9khtcu/LangkawiIslandHoppingSharedSpeedboatTour.webp"  />
					</a>
				  </div>';
				}
			}
			
		}
		else{ 
            	echo "No results";
		}
		
	}
	else{
		echo "Minimum length is ".$min_length;
	}
?>
</body>
</html>