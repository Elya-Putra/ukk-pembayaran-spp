<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "db_spp";

$conn = mysqli_connect($server, $user, $password, $database);

if(!$conn){
    echo "gagal konek";
}

?>