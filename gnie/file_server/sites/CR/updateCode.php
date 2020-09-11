<?php

///////////////////////////////////////////////////////////////////////

include('tableName.php');
include('../database.php');

$connection = mysqli_connect($host, $username, $password);
$db = mysqli_select_db($connection, $db_name);

///////////////////////////////////////////////////////////////////////

if(isset($_POST['updateFile']))
{
    $id = $_POST['update_id'];

    {
        $query_update = "SELECT * FROM $tableName WHERE id = '$id'";
        $query_update_run = mysqli_query($connection, $query_update);

        $target_dir = "../../uploads/cr/";
        $target_file = $target_dir . basename($_FILES["fileEdit"]["name"]);
        echo "<br>";
        echo "Target File: ".$target_file;
        echo "<br>";
        $uploadOk = 1;

        foreach($query_update_run as $row){

        // Current Full File Name
        $fullName = $row['fullName'];
        

        // Trim the path from the $fullName
        // $removeDir = '../../uploads/cr/';
        $trimmedPath = substr($fullName, 17);
        echo "<br>";
        echo "Trimmed Path: ".$trimmedPath;
        echo "<br>";

        // Set new path
        $newPath = $target_dir.$trimmedPath;
        echo "<br>";
        echo "New Path: ".$newPath;
        echo "<br>";

        // Move File
        $moveFile = rename($fullName, $newPath);

                // name of file
        $fileName = ltrim($_POST['fileName']);

                    // get client username
        $modifiedBy = substr(strrchr($_SERVER['AUTH_USER'], '\\'), 1);

            // specify when this record was inserted to the database
        $modified = date('Y-m-d H:i:s');

        $query = "UPDATE $tableName SET fileName = '$fileName', fullName = '$newPath', modifiedBy = '$modifiedBy', modified = '$modified' WHERE id = '$id'";
        $query_run = mysqli_query($connection, $query);

        }

        if($query_update_run)
        {
            echo '<script> alert("File Update"); </script>';
            // header("location: index.php");
        }
        else
        {
            echo '<script> alert("File Was Not Update"); </script>';
        }
    }
    
}
?>