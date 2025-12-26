<?php
date_default_timezone_set('Asia/Jakarta');

$servername = "localhost";
$username = "root";
$passowrd = "";
$db = "webdailyjournal";

$conn = new mysqli($servername,$username,$passowrd,$db);

if($conn->connect_error){
    die("connection failed : ".
    $conn->connect_error);
}

// echo "Connected successfully<hr>";
?>