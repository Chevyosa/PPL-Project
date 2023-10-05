<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "patient_checkup";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Failed to Connect with Database.')</script>");
}

?>
