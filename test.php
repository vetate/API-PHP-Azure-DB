<?php
// Fetch top songs data using the API
$endpoint = "Endpoints here";
$result = file_get_contents($endpoint);

// Print out the response to inspect its format
echo $result;
?>


