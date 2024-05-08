<?php

$id = $_GET['id'];

$server = "localhost";
$user = "root";
$pass = "";
$database = "phpdemo";

// Create Connection
$connection = mysqli_connect($server, $user, $pass, $database);

if ($connection) {

    $query = "DELETE FROM users WHERE id = $id";
    $result = $connection->query($query);
    if($result){
        echo "Delete Success";
    }else{
        echo "Delete Failed";
    }
}

?>
