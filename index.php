<?php
$servername = "localhost";
$username = "adit";
$password = "";

try {
    $conn = new PDO("mysql:host = $servername, dbname = hackday", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected to Database";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
echo "HELOO";
