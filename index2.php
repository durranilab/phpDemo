<?php

$name = $_GET['username'];
$password = $_GET['password'];


$server = "localhost";
$user = "root";
$pass = "";
$database = "phpdemo";

// Create Connection
$connection = mysqli_connect($server, $user, $pass, $database);

if ($connection) {

    $query = "SELECT * FROM users WHERE username = '$name' AND password = '$password'";
    $result = $connection->query($query);

    if ($result->num_rows > 0) {
        echo "Login Success";
        foreach ($result as $row) {
                    echo '
<form action="delete.php" method="get">
<input type="hidden" name="id" value="' . $row['id'] . '"/>
<input type="submit" value="Delete"/>
 </form>
 
 <form action="update.php" method="get">
 <input type="hidden" name="id" value="' . $row['id'] . '"/>
 <input type="text" name="username" value="' . $row['username'] . '"/>
 <input type="text" name="password" value="' . $row['password'] . '"/>
 <input type="submit" value="Update"/>
</form>
 
 
';}

    } else {
        echo "Login Failed";
    }

} else {
    echo "Connection Failed";
}


if($connection){
    $query = 'SELECT * FROM users ORDER BY id DESC LIMIT 2';
    $result = $connection->query($query);

    foreach ($result as $row) {
        echo $row['id'] . ' ' . $row['username'] . ' ' . $row['password'] . '<br/>';
    }
}


?>


