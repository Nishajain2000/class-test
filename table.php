<?php


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql1 = "CREATE TABLE post (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
title VARCHAR(255) NOT NULL,
comment TEXT() NOT NULL,
link VARCHAR(255),
dater TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql1) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();


$sql2 = "CREATE TABLE register (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
username VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL,
password VARCHAR(255),
)";

if ($conn->query($sql2) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>