<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Styling -->
  <link rel="stylesheet" href="../../css/styles.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- Tab Icon -->
  <link rel="icon" type="image/png" href="../../../images/LogoGlobe.png" />

  <title>GNIE | FILES | CR</title>
</head>

<body>
  <!-- Navigation Bar -->
  <nav class="navbar navbar-light bg-light">
    <a href="../../index.php" class="navbar-brand"><img src="../../images/GNIEDirect_logo.png" alt="GNIE Direct Logo" class="navbar-logo" /></a>
    <h3 class="title">Upload a File</h3>
  </nav>

  <!-- Privacy Notice -->
  <div class="container">
    <div class="row row-top">
      <div>
      <?php
if($_POST){
 
    // include database connection
    include '../database.php';
    include './tableName.php';

 
    try{
     
        // insert query
        $query = "INSERT INTO $tableName SET fileName=:fileName, created=:created";
 
        // prepare query for execution
        $stmt = $con->prepare($query);
 
        // posted values
        $fileName=htmlspecialchars(strip_tags($_POST['fileName']));
 
        // bind the parameters
        $stmt->bindParam(':fileName', $fileName);
         
        // specify when this record was inserted to the database
        $created=date('Y-m-d H:i:s');
        $stmt->bindParam(':created', $created);
        
         
        // Execute the query
        if($stmt->execute()){
            echo "<div class='alert alert-success'>Record was saved.</div>";
        }else{
            echo "<div class='alert alert-danger'>Unable to save record.</div>";
        }
         
    }
     
    // show error
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }
}
?>
 
<!-- html form here where the product information will be entered -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
    <table class='table table-hover table-responsive table-bordered'>
        <tr>
            <td>File Name</td>
            <td><input type='text' name='fileName' class='form-control' /></td>
        </tr>
            <td></td>
            <td>
                <input type='submit' value='Save' class='btn btn-success' />
                <a href='index.php' class='btn btn-danger'>Go Back</a>
            </td>
        </tr>
    </table>
</form>
            
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Footer -->
    <footer class="page-footer">
      <div class="footer-container">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-sm-12">
            <p><img src="../../images/IGT_Logo_White.png" alt="IGT Logo" class="footer-logo" /></p>
            <?php include('../../templates/footer.php');
