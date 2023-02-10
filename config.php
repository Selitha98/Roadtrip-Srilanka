<?php

$server = "localhost";
$username = "root";
$pass = "123456";
$database = "userregistration";

$conn = mysqli_connect($server, $username, $pass, $database);

if(!$conn) {
    die ("<script>alert('Connection Failed.')</script>");
}

?>
