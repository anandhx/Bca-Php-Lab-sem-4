<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bca2k23";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the values from the form
$username = $_GET["username"];
$newPassword = $_GET["newPassword"];

// Perform the update operation
$sql = "UPDATE Login SET password = '$newPassword' WHERE username = '$username'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully!";
} else {
    echo "Error updating record: " . $conn->error;
}

// Close the connection
$conn->close();
?>
