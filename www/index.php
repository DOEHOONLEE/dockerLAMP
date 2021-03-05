<?php
$host = 'mysql';
$user = 'root';
$pass = 'rootpassword';
$dbname = 'lamp_test_db';
$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected to MySQL successfully!<br>";

$conn->close();
echo "done<br>";
