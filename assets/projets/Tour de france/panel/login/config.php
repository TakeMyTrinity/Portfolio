<?php

$server = "db803219001.hosting-data.io";
$user = "dbo803219001";
$pass = "BMw1234*";
$database = "db803219001";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}