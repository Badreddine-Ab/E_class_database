<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e_classe_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE courses(
  
)";

if ($conn->query($sql) === TRUE) {
  echo "Table courses created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close(); 