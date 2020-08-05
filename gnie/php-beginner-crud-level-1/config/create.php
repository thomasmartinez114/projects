<!DOCTYPE HTML>
<html>
<head>
    <title>GNIE - Costa Rica | Upload</title>
      
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
          
</head>
<body>
  
    <!-- container -->
    <div class="container">
   
        <div class="page-header">
            <h1>Upload a File</h1>
        </div>
      
<?php
if($_POST){
 
    // include database connection
    include 'config/database.php';
 
    try{
     
        // insert query
        $query = "INSERT INTO files_cr_cc SET fileName=:fileName";
 
        // prepare query for execution
        $stmt = $con->prepare($query);
 
        // posted values
        $fileName=htmlspecialchars(strip_tags($_POST['fileName']));
 
        // bind the parameters
        $stmt->bindParam(':fileName', $fileName);
         
        // specify when this record was inserted to the database
        $modified=date('Y-m-d H:i:s');
        $stmt->bindParam(':modified', $modified);
         
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
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <table class='table table-hover table-responsive table-bordered'>
        <tr>
            <td>File Name</td>
            <td><input type='text' fileName='fileName' class='form-control' /></td>
        </tr>
            <td></td>
            <td>
                <input type='submit' value='Save' class='btn btn-primary' />
                <a href='index.php' class='btn btn-danger'>Back to view Files</a>
            </td>
        </tr>
    </table>
</form>
          
    </div> <!-- end .container -->
      
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</body>
</html>