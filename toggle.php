<?php

$servername = "sql311.infinityfree.com";
$username = "if0_42464366";
$password = "AsrarFahad12345";
$dbname = "if0_42464366_frist";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];

$sql = "SELECT Status FROM User WHERE ID=$id";
$result = $conn->query($sql);

$row = $result->fetch_assoc();

if ($row['Status'] == 0) {
    $newStatus = 1;
} else {
    $newStatus = 0;
}

$conn->query("UPDATE User SET Status=$newStatus WHERE ID=$id");

header("Location: n.php");

$conn->close();

?>