<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "akpol_pengasuhan";

$con = mysqli_connect($server, $user, $password, $database);

if( !$con ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>
