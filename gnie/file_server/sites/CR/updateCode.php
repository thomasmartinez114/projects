<?php

///////////////////////////////////////////////////////////////////////

include('tableName.php');
include('../database.php');

$connection = mysqli_connect($host, $username, $password);
$db = mysqli_select_db($connection, $db_name);

$target_dir = "../../uploads/cr/";
$target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
$uploadOk = 1;

///////////////////////////////////////////////////////////////////////

if(isset($_POST['updateFile']))
{
    $id = $_POST['update_id'];

    {        
            $query_update = "SELECT * FROM $tableName WHERE id = '$id'";
            $query_update_run = mysqli_query($connection, $query_update);

            // Loop through Database Row
            foreach($query_update_run as $row)
            {

            // Move the original file to archive folder
            $target_archive_dir = '../../uploads/cr/archive/';

            // Current Full File Name
            $fullName = $row['fullName'];

            // Trim the path from the $fullName
            // $removeDir = '../../uploads/cr/';
            $trimmedPath = substr($fullName, 17);

            // Set archive path
            $archivePath = $target_archive_dir.$trimmedPath;

            // Move the file from directory to archive
            // unlink($fullName);
            $moveFile = rename($fullName, $archivePath);

            
        }
            // // Upload the file that will overwrite the previous

            // // name of file
            // $fileName = ltrim($_POST['fileName']);
            // // echo $fileName;

            // // Add new file into folder
            // $moveFile = rename($newPath, $newPath);

            //     // get client username
            // $modifiedBy = substr(strrchr($_SERVER['AUTH_USER'], '\\'), 1);

            // // specify when this record was inserted to the database
            // $modified = date('Y-m-d H:i:s');

            // $query = "UPDATE $tableName SET fileName = '$fileName', fullName = '$newPath', modifiedBy = '$modifiedBy', modified = '$modified' WHERE id = '$id'";
            // $query_run = mysqli_query($connection, $query);


        if($query_run)
        {
            // redirect back to the index page
            header('Location: index.php');
        }
    }

}

?>