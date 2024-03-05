<?php 
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="top">
    <img src="georgian.png" class="small-image">
</div>


    <div class="login-box">
        <h2>New Registered Students</h2>
        <form action="login.php" method="post">
            <input type="text" name="username" placeholder="First and Last Name of Student" required>
            <input type="text" name="number" placeholder="Guardians Number" required>
            <input type="text" name="mail" placeholder="Guardians E-Mail" required>
            <input type="text" name="address" placeholder="Guardians Address" required>
            <input type="text" name="gname" placeholder="Guardians Name" required>
            <input type="submit" name = "submit" value="Submit">
        </form>
    </div>
    <p style="text-align: center; margin-top: 20px;">Georgian College founded on 2001</p>
</body>
</html>
