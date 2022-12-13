<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php
    session_start();
    include "db_conn.php";
	
	
?>
</head>
<body>
    <?php
	$query = $_GET['query']; 
	
	$min_length = 1;
	
	if(strlen($query) >= $min_length){ 
		
		$query = htmlspecialchars($query); 
		
		$query = $conn->real_escape_string($query);
		
		$raw_results = $conn->query("SELECT * FROM articles WHERE (`title` LIKE '%".$query."%') OR (`text` LIKE '%".$query."%')") or die($conn->error);
			
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
