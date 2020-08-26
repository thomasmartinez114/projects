<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Styling -->
<link rel="stylesheet" href="../../css/styles.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="icon" type="image/png" href="../../../images/LogoGlobe.png" />

<title>GNIE | FILES | CR</title>
</head>

<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-light bg-light">
    <a href="../../../index.php" class="navbar-brand"><img src="../../../images/GNIEDirect_logo.png" alt="GNIE Direct Logo" class="navbar-logo" /></a>
    <h3 class="title">Home</h3>
</nav>
    
<!-- Modals -->
<!-- Upload -->
<?php include('./modal/upload-modal.php'); ?>
<!-- Edit -->
<?php include('./modal/edit-modal.php'); ?>
<!-- Delete -->
<?php include('./modal/delete-modal.php'); ?>


<div class="container">
    <br>
<!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#filesAddModal">Upload File</button>
  <br>
  <br>
<?php

// include database connection
    include '../database.php';
    include './tableName.php';

// PAGINATION VARIABLES
// page is the current page, if there's nothing set, default is page 1
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// set records or rows of data per page
$records_per_page = 9;

// calculate for the query LIMIT clause
$from_record_num = ($records_per_page * $page) - $records_per_page;


// delete message prompt will be here 
$action = isset($_GET['action']) ? $_GET['action'] : "";

// if it was redirected from delete.php
if($action=='deleted'){
    echo "<div class='alert alert-success'>Record was deleted.</div>";
}

  // select data for current page
$query = "SELECT id, fileName, modified FROM $tableName ORDER BY modified DESC
    LIMIT :from_record_num, :records_per_page";

$stmt = $con->prepare($query);
$stmt->bindParam(":from_record_num", $from_record_num, PDO::PARAM_INT);
$stmt->bindParam(":records_per_page", $records_per_page, PDO::PARAM_INT);
$stmt->execute();

  // this is how to get number of rows returned
$num = $stmt->rowCount();

  //check if more than 0 record found
if($num>0){

      //start table
    echo "<table class='table table-hover table-responsive table-bordered'>";

    //creating our table heading
    echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>File Name</th>";
        echo "<th>Modified</th>";
        echo "<th>Actions</th>";
    echo "</tr>";

    // retrieve our table contents
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){

  // extract row
    extract($row);

    // creating new table row per record
    echo "<tr>";
        echo "<td>{$id}</td>";
        echo "<td>{$fileName}</td>";
        echo "<td>{$modified}</td>";
        echo "<td>";

              // Download file
            echo "<a href='#' class='btn btn-info m-r-1em'>Download</a>";

              // Edit file
            // echo "<a href='update.php?id={$id}' class='btn btn-primary m-r-1em'>Edit</a>";
            echo "<button type='button' class='btn btn-primary m-r-1em' data-toggle='modal' data-target='#filesEditModal'>Edit</button>";

              // Delete file
            // echo "<a href='#' onclick='delete_user({$id});'  class='btn btn-danger'>Delete</a>";
            echo "<button type='button' class='btn btn-danger m-r-1em' data-toggle='modal' data-target='#filesDeleteModal'>Delete</button>";
        echo "</td>";
    echo "</tr>";
}

// end table
echo "</table>";

// PAGINATION
  // count total number of rows
$query = "SELECT COUNT(*) as total_rows FROM $tableName";
$stmt = $con->prepare($query);

  // execute query
$stmt->execute();

  // get total rows
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$total_rows = $row['total_rows'];

  // paginate records
$page_url="index.php?";
include_once "paging.php";

}

  // if no records found
else{

    echo "<div class='alert alert-danger'>No records found.</div>";

}

?>
</div>

<!-- Confirm delete file here -->
<script type='text/javascript'>
// confirm record deletion
function delete_user( id ){
     
    var answer = confirm('Are you sure?');
    if (answer){
        // if user clicked ok, 
        // pass the id to delete.php and execute the delete query
        window.location = 'delete.php?id=' + id;
    } 
}
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- Footer -->
<footer class="page-footer">
  <div class="footer-container">
    <div class="row">
      <div class="col-lg-4 col-md-8 col-sm-12">
        <p><img src="../../images/IGT_Logo_White.png" alt="IGT Logo" class="footer-logo" /></p>
        <?php include('../../templates/footer.php');