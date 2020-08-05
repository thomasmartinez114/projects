<?php 
// connect to database
$host = "localhost";
$db_name = "gnie_files";
$username = "gnietest";
$password = "test123#";
$con = mysqli_connect({$host}, $username, $password, {$db_name});

// check connection
if(!$con){
    echo 'Connection error: ' . mysqli_connect_error();
}

?>