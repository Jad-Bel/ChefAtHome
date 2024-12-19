<?php

$servername = "localhost";
$username = "root";
$passwrd = "";
$database = "lamicheline_db";
                            
$connect = mysqli_connect($servername, $username, $passwrd, $database);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>