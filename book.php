<?php
    session_start();
    include "db_conn.php";

    if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

    if(isset($_POST["btnReserve"])) {
        $name = trim($conn->real_escape_string($_POST["txtName"]));
        $room = trim($conn->real_escape_string($_POST["txtRoom"]));
        $date = trim($conn->real_escape_string($_POST["txtDate"]));
        $addOn = trim($conn->real_escape_string($_POST["txtAddOn"]));

        if ($stmt = $conn->prepare("INSERT INTO `book`(`name`, `package`, `date_booked`, `add_on`) VALUES (?, ?, ?, ?)")) {
            $stmt->bind_param("ssss", $name, $room, $date, $addOn);
            $stmt->execute();
            $stmt->close();
        } else {
            die('prepare() failed: ' . htmlspecialchars($conn->error));
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/c82e9a37b7.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.standalone.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
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

    <main>
        <div class="row">
            <div class="offset-2 col-8 font-size-xl">
                
                <form action="" method="post" class="my-5">
                    <div class="form-group">
                        <label for="txtName">Name:</label>
                        <input type="text" class="form-control" name="txtName" required>
                    </div>
                    <div class="form-group">
                        <label for="txtRoom">Destination:</label>
                        <select class="form-control" name="txtRoom" required>
                            <option value="Sunset Cruise">Sunset Cruise</option>
                            <option value="Mangrove Tour">Mangrove Tour</option>
                            <option value="Island Hoping">Island Hoping</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="txtDate">Date:</label>
                        <input type="text" class="form-control datepicker" name="txtDate" id="txtDate" required>
                    </div>
                    <div class="form-group">
                        <label for="txtAddOn">Add On:</label>
                        <select class="form-control" name="txtAddOn" required>
                            <option value="Lunch">Lunch</option>
                            <option value="Transport">Transport</option>
                            </select>
                    </div>
                    <button type="submit" class="btn btn-dark" name="btnReserve">Book Now!</button>
                </form>
            </div>
        </div>
        <div class="row mt-5">
            <div class="offset-2 col-8 mt-5">
                <table class="table table-striped table-bordered" id="datatable">
                    <legend class="bg-secondary p-3 text-light text-center rounded">
                        <h2 class="m-0">My Booking</h2>
                    </legend>
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Destination</th>
                        <th>Date</th>
                        <th>Add On</th>
                        <th>Edit</th>
                    </thead>
                    <tbody>
                        <?php                         
                            // Display database table data
                            if ($stmt = $conn->prepare("SELECT * FROM `book`")) {
                                $stmt->execute();
                                $result = $stmt->get_result();
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>".
                                            "<td>".$row["id"]."</td>".
                                            "<td>".$row["name"]."</td>".
                                            "<td>".$row["package"]."</td>".
                                            "<td>".$row["date_booked"]."</td>" .
                                            "<td>".$row["add_on"]."</td>" 
                                            ?>
                                            <td><a href="cancel.php?id=<?php echo $row["id"]; ?>">Cancel</a></td>
                                            <?php
                                        "</tr>";
                                }
                                $stmt->close();
                            } else {
                                die('prepare() failed: ' . htmlspecialchars($conn->error));
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

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

            $('#txtDate').keypress(function(e) {
                e.preventDefault();
            });
        });
    </script>
</body>
</html>
<?php
}else{
    header("Location: index.php");
    exit();
}
?>
