<?php

include('tableName.php');
include('../database.php');

$connection = mysqli_connect($host, $username, $password);
$db = mysqli_select_db($connection, $db_name);

if(isset($_POST['updateFile']))
{
    $id = $_POST['update_id'];
    $fileName = $_POST['fileName'];

    $query = "UPDATE $tableName SET fileName='$fileName' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("File Updated"); </script>';
        header("location: index.php");
    }
    else
    {
        echo '<script> alert("File Not Updated"); </script>';
    }
}

?>