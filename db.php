<?php

$conn = mysqli_connect("localhost", "root", "", "doctor2_db");

if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}
// connection successful, no echo here
?>
