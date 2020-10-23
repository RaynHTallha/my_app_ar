<?php

$servername = "localhost";
$username = "root";
$password = "";
$dBName = "loginsystemtut";


// Create connection
$conn = new mysqli($servername, $username, $password, $dBName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
