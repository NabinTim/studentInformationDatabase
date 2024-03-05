<?php
include("connection.php");

if(isset($_POST['submit'])){
    
    $username = $_POST['username'];
    $number = $_POST['number'];
    $mail = $_POST['mail'];
    $address = $_POST['address'];
    $guardiansname = $_POST['gname'];

    // Check if the username and number combination doesn't already exist
    $sql_check = "SELECT * FROM information WHERE Name = '$username' AND Number = '$number'";
    $result_check = mysqli_query($conn, $sql_check);
    $count = mysqli_num_rows($result_check);

    if($count == 0) {
        // Username and number combination doesn't exist, proceed to insert
        $sql_insert = "INSERT INTO information (name, number, email, address, gname) VALUES ('$username', '$number', '$mail', '$address', '$guardiansname')";
        if(mysqli_query($conn, $sql_insert)) {
            // Redirect to view_students.php after successful insertion
            header("Location: view_students.php");
            exit(); // Stop further execution
        } else {
            echo "Error: " . $sql_insert . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Username and number combination already exists!";
    }
}else {
    echo "madarchod";
}
?>
