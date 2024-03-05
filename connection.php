<?php
$servername = "localhost";
$username = "root";
$password = ""; // Define your database password here
$db_name = "database1";
$conn = new mysqli($servername, $username, $password, $db_name); 
if($conn->connect_error){
    die("Connection Failed Man :) " .$conn->connect_error);
}
echo "";
?>
