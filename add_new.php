<?php 

include "db_conn.php";

if(isset($_POST['submit'])){
    $package_name = $_POST['package_name'];
    $cust_name = $_POST['cust_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $date_booked = $_POST['date_booked'];
    $add_on = $_POST['add_on'];
    $total = $_POST['total'];

    $sql = "INSERT INTO crud(`id`, `package_name`, `cust_name`, `email`, `gender`, `date_booked`, `add_on`, `total`) VALUES (NULL,'$package_name','$cust_name','$email','$gender', '$date_booked', '$add_on', '$total')";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: booking.php?msg=New record created successfully");
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.standalone.min.css">
    
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Booking Page</title>

    <style>
       select {
  width: 60%;
  height: 45%;
  padding: 6px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 1px;
  margin-bottom: 30px;
  margin-left: 0px;
  resize: vertical;
}
    </style>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
        Booking Page
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Add New Booking</h3>
            <p class="text-muted">Complete the form below to book new package</p>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width: 50vw; min-width: 300px;">
            <div class="row">
                <div class="col">
                <br/>
                    <select name="package_name" required>
                            <option style="color:gray" value="" disabled selected hidden>Choose a destination</option>
                            <option value="Sunset Cruise">Sunset Cruise</option>
                            <option value="Mangrove Tour">Mangrove Tour</option>
                            <option value="Island Hoping">Island Hoping</option>
                        </select>
                    
                </div>
                <div class="col" style="margin-top: 25px;">
                    <input type="text" class="form-control" name="cust_name" placeholder="Name">
                </div>
            </div>

            <div>
                <div class="mb-3">
                    <input type="email" class="form-control" name="email" placeholder="name@example.com">
                </div>
            </div>

            <div class="form-group mb-3">
                <input type="radio" class="form-check-input" name="gender" id="male" value="male">
                <label for="male" class="form-input-label">Male</label>
                
                <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                <label for="female" class="form-input-label">Female</label>
            </div>
            <div class="form-group">
                    <input placeholder="Date" type="text" class="form-control datepicker" name="date_booked" id="date_booked" required>
            </div><br/>

            <div class="form-group">
                    <select name="add_on" required>
                        <option value="" disabled selected hidden>Add On</option>
                            <option value="Lunch">Lunch</option>
                            <option value="Transport">Transport</option>
                            </select>
            </div>

            <div class="form-group">
                <h3>Payment with Credit Card</h3>
            </div>


            <div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="card name" placeholder="Cardholder's Name">
                </div>
            </div>

            <div>
                <div class="mb-3">
                <label for="">Valid thru</label>    
                <input type="text" class="form-control" name="valid" placeholder="MM/YY">
                </div>
            </div>

            <div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="cvv/cvc" placeholder="CVV/CVC">
                    
                </div>
            </div>

            <div>
                <div class="mb-3">
                <label for="">Total</label>
                    <input type="text" class="form-control" name="total" placeholder="0.00">
                   
                </div>
            </div>
            
            <div>
                <button type="submit" class="btn btn-success" name="submit">Save</button>
                <a href="booking.php" class="btn btn-danger">Cancel</a>
            </div>

            </form>
        </div>
    </div>

    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.datepicker').datepicker({
                autoclose: true,
                todayHighlight: true,
                todayBtn: 'linked',
                startDate: 'today',
            });

            $('#datatable').DataTable();

            $('#date_booked').keypress(function(e) {
                e.preventDefault();
            });
        });
    </script>
</body>
</html>