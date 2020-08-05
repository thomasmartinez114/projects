<?php 
// connect to database
$host = "localhost";
$db_name = "gnie_files";
$username = "gnietest";
$password = "test123#";

try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}

// show error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>