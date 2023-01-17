<?php 

include "db_conn.php";
$id = $_GET['id'];

if(isset($_POST['submit'])){
    $first_name = $_POST['package_name'];
    $cust_name = $_POST['cust_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $sql = "UPDATE crud SET `package_name`='$first_name',`cust_name`='$cust_name',`email`='$email',`gender`='$gender' WHERE id=$id";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: booking.php?msg=Data updated successfully");
    }
    else{
        echo "Failed: " . mysqli_error($conn);
    }
}

?>


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

    <title>PHP CRUD Application</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
        Booking Page
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Edit Booking Information</h3>
            <p class="text-muted">Click update after changing any information</p>
        </div>

        <?php
        $id = $_GET['id'];
        $sql = "SELECT * FROM crud WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        ?>
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width: 50vw; min-width: 300px;">
            <div class="row">
                <div class="col">
                    <label class="form-label">package name</label>
                    <input type="text" class="form-control" name="package_name" value="<?php echo $row['package_name'] ?>">
                </div>
                <div class="col">
                    <label class="form-label">cust_name</label>
                    <input type="text" class="form-control" name="cust_name" value="<?php echo $row['cust_name'] ?>">
                </div>
            </div>

            <div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="emsil" class="form-control" name="email" value="<?php echo $row['email'] ?>">
                </div>
            </div>

            <div class="form-group mb-3">
                <label>Gender</label> &nbsp;
                <input type="radio" class="form-check-input" name="gender" id="male" value="male" <?php echo ($row['gender'] == 'male') ? "checked" : ""; ?>>
                <label for="male" class="form-input-label">Male</label>
                
                <input type="radio" class="form-check-input" name="gender" id="female" value="female" <?php echo ($row['gender'] == 'female') ? "checked" : ""; ?>>
                <label for="female" class="form-input-label">Female</label>
            </div>

            <div>
                <button type="submit" class="btn btn-success" name="submit">Update</button>
                <a href="booking.php" class="btn btn-danger">Cancel</a>
            </div>

            </form>
        </div>
    </div>

    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>