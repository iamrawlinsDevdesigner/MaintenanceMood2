<?php
$host = 'localhost';
$user = 'freeuser';
$pass = 'freepassword';
$db = 'site_maintenance';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die('Database Connection Failed: ' . $conn->connect_error);
}
?>
