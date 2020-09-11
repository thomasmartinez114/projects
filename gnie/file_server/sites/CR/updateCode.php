<?php

include('tableName.php');
include('../database.php');

$connection = mysqli_connect($host, $username, $password);
$db = mysqli_select_db($connection, $db_name);

if(isset($_POST['updateFile']))
{
    $id = $_POST['update_id'];

    {
        $query_update = "SELECT * FROM $tableName WHERE id='$id'";
        $query_update_run = mysqli_query($connection, $query_update);

        foreach($query_update_run as $row){
        
        // Path desired
        $target_dir = '../../uploads/cr/';

        // File Name
        $target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);

        // Current Full File Name
        $fullName = $row['fullName'];

        // name of file
        $fileName = ltrim($_POST['fileName']);

        // get client username
        $modifiedBy = substr(strrchr($_SERVER['AUTH_USER'], '\\'), 1);

        // specify when this record was inserted to the database
        $modified = date('Y-m-d H:i:s');

        // Trim the path from the $fullName
        // $removeDir = '../../uploads/CR/';
        $trimmedPath = substr($fullName, 17);
        // echo $trimmedPath;

        // Set new path
        $newPath = $target_dir.$trimmedPath;
        // echo $newPath;

        // Move File
        $moveFile = rename($fullName, $newPath);

        $query = "UPDATE $tableName SET fileName = '$fileName', fullName = '$target_file', modifiedBy = '$modifiedBy', modified = '$modified' WHERE id = '$id'";
        $query_run = mysqli_query($connection, $query);

        }

    }
    
    {
        // $query = "UPDATE $tableName SET fileName = '$fileName', fullName = '$newPath', modifiedBy = '$modifiedBy', modified = '$modified' WHERE id = '$id'";
        // $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("File Updated"); </script>';
            header("location: index.php");
        }
        else
        {
            echo '<script> alert("File Was Not Updated"); </script>';
        }
    }
    
}
?>