<?php

$name = $_POST['username'];
$password = $_POST['password'];

$server = "localhost";
$user = "root";
$pass = "";
$database = "phpdemo";

$connection = mysqli_connect($server, $user, $pass, $database);

if ($connection) {

    $query = "INSERT INTO users (username, password) VALUES ('$name', '$password')";
    $result = $connection->query($query);
    if($result){
        echo "Register Success";
    }else{
        echo "Register Failed";
    }
}

?>
