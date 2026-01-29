<?php
$host = 'localhost';
$db   = 'ipam_db';
$user = 'ipam_user';
$pass = 'SECRET_PASSWORD';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>