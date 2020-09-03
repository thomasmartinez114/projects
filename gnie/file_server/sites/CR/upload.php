<?php

///////////////////////////////////////////////////////////////////////

include('tableName.php');
include('../database.php');

$connection = mysqli_connect($host, $username, $password);
$db = mysqli_select_db($connection, $db_name);

$target_dir = "../../uploads/CR/";
$target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

///////////////////////////////////////////////////////////////////////


// Check if image file is a actual image or fake image
if(isset($_POST["saveFile"])) {

  $fileName = $_POST['fileName'];
      
  // specify when this record was inserted to the database
  $created = date('Y-m-d H:i:s');
      
  // get client username
  $username = getenv('USERNAME');

  $check = getimagesize($_FILES["fileUpload"]["tmp_name"]);

  // Query to MySQL storing the fileName, created, username
  $query = "INSERT INTO $tableName (`fileName`,`created`,`username`) VALUES ('$fileName','$created','$username')";
  $query_run = mysqli_query($connection, $query);

  if($query_run) {

      // echo '<script> alert("File Saved"); </script>';
     header('Location: index.php');
    
      }
    
    else {
        // echo '<script> alert("File Not Saved"); </script>';
    }

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
if($imageFileType != "jpg" && $imageFileType != "oft"  && $imageFileType != "pdf" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "doc" && $imageFileType != "xlsx" && $imageFileType != "txt" && $imageFileType != "msg" && $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG, OFT, DOC, XLSX, TXT, MSG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileUpload"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>