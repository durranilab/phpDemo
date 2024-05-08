<?php

$id = $_GET['id'];
$name = $_GET['username'];
$password = $_GET['password'];

$server = "localhost";
$user = "root";
$pass = "";
$database = "phpdemo";

// Create Connection
$connection = mysqli_connect($server, $user, $pass, $database);

if ($connection) {

    $query = "UPDATE users SET username = '$name', password = '$password' WHERE id = $id";
    $result = $connection->query($query);
    if($result){
        echo "Update Success";
    }else{
        echo "Update Failed";
    }
}

?>
