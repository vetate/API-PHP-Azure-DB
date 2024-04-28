<?php
// Database connection parameters
$connectionInfo = array(
    "UID" => "#",                      // Username
    "pwd" => "#",                   // Password
    "Database" => "#",           // Database name
    "LoginTimeout" => 30,                   // Login timeout (in seconds)
    "Encrypt" => 1,                         // Encrypt data sent over the network (1 for true, 0 for false)
    "TrustServerCertificate" => 0           // Trust the server certificate (1 for true, 0 for false)
);
$serverName = "#"; // Server name and port

// Attempt to establish connection
$sql_conn = sqlsrv_connect($serverName, $connectionInfo);

// Check if connection is successful
if ($sql_conn === false) {
    // If connection fails, retrieve detailed error information
    $errors = sqlsrv_errors();
    foreach ($errors as $error) {
        echo "SQLSTATE: " . $error['SQLSTATE'] . "<br />";
        echo "Code: " . $error['code'] . "<br />";
        echo "Message: " . $error['message'] . "<br />";
    }
    exit(); // Exit script if connection failed
}

?>
