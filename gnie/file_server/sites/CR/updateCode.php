<?php

///////////////////////////////////////////////////////////////////////

include('tableName.php');
include('../database.php');

$connection = mysqli_connect($host, $username, $password);
$db = mysqli_select_db($connection, $db_name);

///////////////////////////////////////////////////////////////////////

$target_dir = "../../uploads/CR/";
$target_file = $target_dir . basename($_FILES["updateFile"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

///////////////////////////////////////////////////////////////////////

if(isset($_POST['updateFile'])){

        // ID record of upload
    $id = $_POST['update_id'];
        // name of file
    $fileName = ltrim($_POST['fileName']);
        // get client username
    $modifiedBy = substr(strrchr($_SERVER['AUTH_USER'], '\\'), 1);
        // specify when this record was inserted to the database
    $modified = date('Y-m-d H:i:s');

    $query = "UPDATE $tableName SET fileName = '$fileName', modifiedBy = '$modifiedBy', modified = '$modified' WHERE id = '$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run) {
        
        echo '<script> alert("File Updated"); </script>';
        header("location: index.php");
    
    }
    
    else {
        
        echo '<script> alert("File Not Updated"); </script>';
    
    }

///////////////////////////////////////////////////////////////////////

    if($check !== false) {
  
        // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      
      } 
      
        else {
    
        // echo "File is not an image.";
        $uploadOk = 0;
      
      }
    }
    
      // Check if file already exists
    if (file_exists($target_file)) {
      
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    
    }
    
      // Check file size
    if ($_FILES["fileUpload"]["size"] > 500000) {
    
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    
    }
    
    // Allow certain file formats
    // if($imageFileType != "jpg" 
    // && $imageFileType != "oft" 
    // && $imageFileType != "pdf" 
    // && $imageFileType != "png" 
    // && $imageFileType != "jpeg" 
    // && $imageFileType != "doc"
    // && $imageFileType != "docx"
    // && $imageFileType != "xsl" 
    // && $imageFileType != "xlsx" 
    // && $imageFileType != "txt" 
    // && $imageFileType != "msg" 
    // && $imageFileType != "gif"
    // && $imageFileType != "log" ) {
    
    //   echo "Sorry, only JPG, JPEG, PNG, OFT, DOC, XLSX, TXT, MSG & GIF files are allowed.";
    //   $uploadOk = 0;
    
    // }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
    
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    
    } 
    
    else {
    
      if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
      
        echo "The file ". basename( $_FILES["fileUpload"]["name"]). " has been uploaded.";
      
      } 
      
      else {
      
        echo "Sorry, there was an error uploading your file.";
      
      }
}

///////////////////////////////////////////////////////////////////////

?>