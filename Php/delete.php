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

// Retrieve the value from the form
$username = $_GET["usernameDelete"];

// Perform the delete operation
$sql = "DELETE FROM Login WHERE username = '$username'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully!";
} else {
    echo "Error deleting record: " . $conn->error;
}

// Close the connection
$conn->close();
?>
