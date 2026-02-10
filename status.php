<?php
header('Access-Control-Allow-Origin: *'); // This kills the CORS error
header('Content-Type: application/json');
$serverID = 'exdjk3';
$url = "https://servers-frontend.cfx.re/api/servers/single/" . $serverID;

// Your server fetches the data, NOT the user's browser
echo file_get_contents($url);
?>