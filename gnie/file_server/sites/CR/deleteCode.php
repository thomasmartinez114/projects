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
    
    // Remove file from directory
    $query_delete = "SELECT * FROM $tableName WHERE id='$id'";
    $query_delete_run = mysqli_query($connection, $query_delete);
    
    if($query_delete_run)
    {
        // Delete from the Directory
        foreach($query_delete_run as $row){
            $filePath = substr(strrchr($row['fullName'], '../../'), 1);
            echo $filePath;
            unlink($filePath);
        }
    }
    
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