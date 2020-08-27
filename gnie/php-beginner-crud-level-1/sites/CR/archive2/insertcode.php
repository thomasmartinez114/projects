<?php

    // Call the required files
    include '../database.php';
    include './tableName.php';

$connection = mysqli_connect($host, $username, $password);
$db = mysqli_select_db($connection, $db_name);

if(isset($_POST['upload']))
{
    $fileName = $_POST['fileName'];
    $file = $_POST['file'];
    // specify when this record was inserted to the database
    $created=date('Y-m-d H:i:s');
    $stmt->bindParam(':created', $created);

    $query = "INSERT INTO $tableName ('fileName', 'file', 'created') VALUES ('$fileName', '$file', '$created')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("File Uploaded"); </script>';
        header('Location: index.php');
    }
    else
    {
        echo '<script> alert("File Did Not Upload"); </script>';
    }
}

?>