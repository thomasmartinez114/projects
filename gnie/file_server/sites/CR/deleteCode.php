<?php

include('tableName.php');
include('../database.php');

$connection = mysqli_connect($host, $username, $password);
$db = mysqli_select_db($connection, $db_name);

if(isset($_POST['deleteFile']))
{
    $id = $_POST['delete_id'];

    // Remove file from MySQL DB
    $query = "DELETE FROM $tableName WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("File Removed"); </script>';
        header("location: index.php");
    }
    else
    {
        echo '<script> alert("File Was Not Removed"); </script>';
    }
}

?>