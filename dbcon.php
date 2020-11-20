<?php

$server = 'localhost:3206';
$user = 'root';
$password = '';
$db = 'demo';

$con = mysqli_connect($server, $user, $password, $db);

if($con){
    echo "CONNECTION SUCCESSFULL";
}else{
    echo "NO CONNECTION";
}


?>