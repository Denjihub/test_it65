<?php
$servername = "localhost";
$username = "it65309010005";
$password = "it12345";
$dbname = "it65309010005";

// $servername = "localhost";
// $username = "root";
// $password = "12345678";
// $dbname = "web2111";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
