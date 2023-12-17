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
$username = $_GET["usernameSelect"];

// Perform the select operation
$sql = "SELECT * FROM Login WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "Username: " . $row["username"] . "<br>";
        echo "Password: " . $row["password"] . "<br>";
    }
} else {
    echo "No records found.";
}

// Close the connection
$conn->close();
?>
