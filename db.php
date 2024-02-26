<?php

// Database connection parameters
$hostname = 'localhost';  // Or your host IP
$username = 'root';       // MySQL username
$password = '1234';       // MySQL password
$database = 'ecommerce';  // Database name

// Attempt to connect to MySQL database
$connection = mysqli_connect($hostname, $username, $password, $database);

// Check connection
if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}

// Example query execution
$q = "SET SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO'";
if ($connection->query($q) === TRUE) {
    echo "SQL mode set successfully";
} else {
    echo "Error setting SQL mode: " . $connection->error;
}

// Close the connection
mysqli_close($connection);

?>
