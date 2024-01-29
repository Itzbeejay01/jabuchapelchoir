<?php
$servername = 'db4free.net';
$username = "choirmembers";
$password = "choirmembers";
$dbname = "choir_members";
$dbport = 3306;

// $servername = '127.0.0.1';
// $username = 'root';
// $password = 'root';
// $dbname = 'choir_members'; 
// $dbport = 8889;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $dbport);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
  //echo "Connected";
}