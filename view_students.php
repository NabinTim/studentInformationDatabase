<?php
include("connection.php");
$sql_select = "SELECT * FROM information";
$result = mysqli_query($conn, $sql_select);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Registered Students</title>
    <link rel="stylesheet" type="text/css" href="styles2.css">
</head>
<body>
    <div class="container">
        <h2>Registered Students</h2>
        <table>
            <tr>
                <th>Username</th>
                <th>Number</th>
                <th>Email</th>
                <th>Address</th>
                <th>Guardian's Name</th>
            </tr>
            <?php
            // Check if there are any records
            if (mysqli_num_rows($result) > 0) {
                // Output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["Name"] . "</td>";
                    echo "<td>" . $row["Number"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["address"] . "</td>";
                    echo "<td>" . $row["gname"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No records found</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>

<?php
mysqli_close($conn);
?>
