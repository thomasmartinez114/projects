<?php 
// connect to database
$host = "localhost";
$db_name = "gnie_files";
$username = "GNIEfiles";
$password = "test123#";

// check connection
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
    echo "Connection Successful!";
}
  
// show error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>