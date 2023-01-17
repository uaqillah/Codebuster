<?php
session_start();
include "db_conn.php";

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

$id=$_REQUEST['id'];
$query = "DELETE FROM book WHERE id=$id"; 
$result = mysqli_query($conn,$query);
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}
header("Location: book.php"); 

}else{
    header("Location: index.php");
    exit();
}
?>