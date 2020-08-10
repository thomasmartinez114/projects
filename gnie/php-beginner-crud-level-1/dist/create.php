<!DOCTYPE HTML>
<html>
<head>
    <title>GNIE - Costa Rica | Upload</title>

    <!-- Styling -->
    <link rel="stylesheet" href="../../../css/styles.css">
    <!-- Tab Icon -->
    <link rel="icon" type="image/png" href="../../../images/LogoGlobe.png" />      
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
          
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-light bg-light">
        <a href="index.php" class="navbar-brand"><img src="../../../images/GNIEDirect_logo.png" alt="GNIE Direct Logo" class="navbar-logo" /></a>
        <h3 class="title">Upload a File</h3>
    </nav>
  
    <!-- container -->
    <div class="container">
      
<?php
if($_POST){
 
    // include database connection
    include '../../files/database.php';
 
    try{
     
        // insert query
        $query = "INSERT INTO files_cr_cc SET fileName=:fileName, created=:created";
 
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
<div class="row row-top">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
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
          
    </div> <!-- end .container -->

      
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</body>

        <!-- Footer -->
    <footer class="page-footer">
        <div class="footer-container">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-sm-12">
                    <p><img src="../../../images/IGT_Logo_White.png" alt="IGT Logo" class="footer-logo" /></p>
                    <?php include('../../../templates/footer.php');