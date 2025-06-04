<?php
$host = "localhost";
$user = "root";
$password = ""; // empty password for local development
$dbname = "web_dev_exercise";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
