<?php
$username = "root";
$password = "";
$database = "tenten";
$server = "localhost";

$c = mysqli_connect($server, $username, $password, $database) or die('Koneksi ke database bermasalah');
