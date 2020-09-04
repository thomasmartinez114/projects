<?php

include('tableName.php');
include('../database.php');

$connection = mysqli_connect($host, $username, $password);
$db = mysqli_select_db($connection, $db_name);

if(isset($_POST['saveFile']))
{
    $fileName = $_POST['fileName'];
	$fileUpload = $_POST['fileUpload'];

    $query = "INSERT INTO $tableName (`fileName`, 'fileUpload') VALUES ('$fileName', '$fileUpload')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("File Saved"); </script>';
        header('Location: index.php');
    }
    else
    {
        echo '<script> alert("File Not Saved"); </script>';
    }
}

?>