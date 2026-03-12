<?php

$hostname = 'localhost';
$dbname = 'enrollment';
$username = 'demo';
$password = 'abc123';
$conn = new mysqli($hostname, $username, $password, $dbname);

function getConnection() {
    global $conn;
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // ตั้งค่าภาษาไทย
    $conn->set_charset("utf8mb4");
    return $conn;
}
