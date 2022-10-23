<?php
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "project-prison";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);
if (!$conn) {
    die("Csatlakozás sikertelen: " . mysqli_connect());
}