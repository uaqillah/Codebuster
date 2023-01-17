<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <style>
    .container {
        display: flex;
      }
      img {
        max-width: 100%
      }
      .image {
        flex-basis: 20%
      }
      .text {
        font-size: 18px;
        padding-left: 20px;
        text-align:left;
        font-family: courier, monospace;
      }
   </style>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:#339966;color:whitesmoke">
        Booking History
    </nav>

    <div class="container">
        

        <table class="table table-hover text-center">
            
                <tr>
                <th scope="col">ID</th>
                <th scope="col" style="text-align:left;">&emsp;&emsp;&emsp;&emsp;&emsp;Details</th>
                
                </tr>
           
                <?php
                include "db_conn.php";

                $sql = "SELECT * FROM crud";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td>
                        <?php echo $row['id'] ?>
                        </td>
                        <td>
                        <div class="container">
                        <div class="image">
                            <?php
                            if($row['package_name']=='Mangrove Tour'){?>
                                <img src="https://www.langkawi-insight.com/langkawi_i00001e.jpg">
                            <?php }
                            else if($row['package_name']=='Island Hoping'){?>
                                <img class="img" src="https://tourslangkawi.com/wp-content/uploads/2021/10/Island-Hopping-Langkawi-04-1-300x300.jpg">
                            <?php }
                            else if($row['package_name']=='Sunset Cruise'){?>
                                <img class="img" src="https://image.kkday.com/v2/image/get/w_960%2Cc_fit%2Cq_55%2Ct_webp/s1.kkday.com/product_132460/20220822065654_m5yKV/jpg">
                            <?php }
                            ?>

                            
                        </div>
                        <div class="text">
                        <?php echo "Package Name: ".$row['package_name'] ?><br/>
                        <?php echo "Customer Name: ".$row['cust_name'] ?><br/>
                        <?php echo "Date: ".$row['date_booked'] ?><br/>
                        <?php echo "Total: RM".$row['total'] ?>
                        </div>
                        </div>
                        </td>

                        
                        
                        
                        
                        

                    </tr>
                
                    <?php

                }
                ?>
           
        </table>
    </div>

    <div>
    <form action="home.php">
  <div style="margin-right: 100px;width: 100px; float:right">
  <input type="submit" value="Home">
  </div></form>
    </div>

    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>