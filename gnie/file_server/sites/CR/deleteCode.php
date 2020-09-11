<?php

///////////////////////////////////////////////////////////////////////

include('tableName.php');
include('../database.php');

$connection = mysqli_connect($host, $username, $password);
$db = mysqli_select_db($connection, $db_name);

///////////////////////////////////////////////////////////////////////

if(isset($_POST['deleteFile']))
{
    $id = $_POST['delete_id'];

    {
        $query_delete = "SELECT * FROM $tableName WHERE id = '$id'";
        $query_delete_run = mysqli_query($connection, $query_delete);

        foreach($query_delete_run as $row){
        
        // Path desired
        $target_dir = '../../uploads/cr/archive/';

        // Current Full File Name
        $fullName = $row['fullName'];
        

        // Trim the path from the $fullName
        // $removeDir = '../../uploads/cr/';
        $trimmedPath = substr($fullName, 17);
        // echo $trimmedPath;

        // Set new path
        $newPath = $target_dir.$trimmedPath;
        // echo $newPath;

        // Move File
        $moveFile = rename($fullName, $newPath);

        }
    }
    
    {
        // Remove file from MySQL DB
        $query = "DELETE FROM $tableName WHERE id = '$id'";
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
    
}
?>