<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bca2k23"; 



$connection = new mysqli($servername, $username, $password, $dbname);

if (!$connection)
 {
    die("Connection failed: " . mysqli_connect_error());
}
else
{
    echo ("connection sucess");
}


$name = $_GET['username'];
$pswd = $_GET['password'];

$sql = "INSERT INTO Login VALUES ('$name','$pswd')";
if($connection->query($sql) === TRUE )
{
    echo("value inserted sucess");

}else{
    echo("error");
}
?>
