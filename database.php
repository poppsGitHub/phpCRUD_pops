<?php       
$servername = "localhost";
$username = "root";
$password = "";
$database = "mycrud_operation";

$con = mysqli_connect($servername,$username,$password,$database);

if (!$con){
    die("connection ended: ". mysqli_connect_error());
    echo "Connection Error!";
}
// echo "Connected successfully!";
?>