<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "taruna";

$con = mysqli_connect($server, $user, $password, $database);

if( !$con ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>
