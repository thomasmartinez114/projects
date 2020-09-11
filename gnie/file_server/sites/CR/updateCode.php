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
        // Current Full File Name
        $fullName = $row['fullName'];

        // Trim the path from the $fullName
        // $removeDir = '../../uploads/cr/';
        $trimmedPath = substr($fullName, 17);

        // Set new path
        $newPath = $target_dir.$trimmedPath;

        // Delete the file from directory
        unlink($fullName);

        /////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////

        // Upload the file
        // name of file
        $fileName = ltrim($_POST['fileName']);

            // get client username
        $modifiedBy = substr(strrchr($_SERVER['AUTH_USER'], '\\'), 1);

        // specify when this record was inserted to the database
         $modified = date('Y-m-d H:i:s');

         $query = "UPDATE $tableName SET fileName = '$fileName', fullName = '$newPath', modifiedBy = '$modifiedBy', modified = '$modified' WHERE id = '$id'";
         $query_run = mysqli_query($connection, $query);

         
        }
        
        
    }

    if($query_run)
    {
        // redirect back to the index page
        header('Location: index.php');
    }

    
}

// need to upload file now to directory
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {

    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  
  } 
  
  else {
  
    if (move_uploaded_file($_FILES["fileEdit"]["tmp_name"], $target_file)) {
    
      echo "The file ". basename( $_FILES["fileEdit"]["name"]). " has been uploaded.";
    
    } 
    
    else {
    
      echo "Sorry, there was an error uploading your file.";
    
    }
  }




?>