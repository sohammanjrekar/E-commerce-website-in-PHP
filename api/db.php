<?php
// Database connection parameters
$hostname = 'localhost';             // Hostname or IP address
$port = 3306;                        // MySQL port
$username = 'root';                  // MySQL username
$password = '1234';                  // MySQL password
$database = 'usersystem';            // Database name
// Attempt to connect to MySQL database
$connection = mysqli_connect($hostname, $username, $password, $database, $port);
// Check connection
if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}
// Example query execution
$q = "SET SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO'";
if (mysqli_query($connection, $q)) {
    echo "SQL mode set successfully";
} else {
    echo "Error setting SQL mode: " . mysqli_error($connection);
}
// Close the connection
mysqli_close($connection);
?>
