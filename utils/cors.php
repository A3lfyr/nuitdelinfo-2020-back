<?php
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header('Access-Control-Allow-Headers: *');

if($_SERVER['REQUEST_METHOD'] == "OPTIONS") {
    http_response_code(200);
    exit(0);
}
?>