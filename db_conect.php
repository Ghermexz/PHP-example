<?php

$host = 'localhost';
$user = 'root';
$password = '';
$databse = 'ejemplo';

$conn = mysqli_connect($host, $user, $password, $databse);

if(!$conn){
    die("Error".mysqli_connect_error());
}



?>