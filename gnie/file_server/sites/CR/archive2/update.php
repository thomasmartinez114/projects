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
    <h3 class="title">Update a File</h3>
  </nav>

  <!-- Privacy Notice -->
  <div class="container">
    <div class="row row-top">
      <div>
      <div class="page-header">
      <h3>Update a File</h3>
      </div> 

    <?php
// get passed parameter value, in this case, the record ID
// isset() is a PHP function used to verify if a value is there or not
$id=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');

//include database connection
    include '../database.php';
    include './tableName.php';

// read current record's data
try {
    // prepare select query
    $query = "SELECT id, fileName FROM $tableName WHERE id = ? LIMIT 0,1";
    $stmt = $con->prepare( $query );

    // this is the first question mark
    $stmt->bindParam(1, $id);

    // execute our query
    $stmt->execute();

    // store retrieved row to a variable
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // values to fill up our form
    $fileName = $row['fileName'];
}

// show error
catch(PDOException $exception){
    die('ERROR: ' . $exception->getMessage());
}
?>

<?php

// check if form was submitted
if($_POST){

    try{

        // write update query
        // in this case, it seemed like we have so many fields to pass and 
        // it is better to label them and not use question marks
        $query = "UPDATE gnie_files.$tableName SET fileName=:fileName WHERE id = :id";

        // prepare query for excecution
        $stmt = $con->prepare($query);

        // posted values
        $fileName=htmlspecialchars(strip_tags($_POST['fileName']));

        // bind the parameters
        $stmt->bindParam(':fileName', $fileName);
        $stmt->bindParam(':id', $id);

        // Execute the query
        if($stmt->execute()){
            echo "<div class='alert alert-success'>Record was updated.</div>";
        }else{
            echo "<div class='alert alert-danger'>Unable to update record. Please try again.</div>";
        }

    }

    // show errors
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }
}
?>

<!--we have our html form here where new record information can be updated-->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?id={$id}");?>" method="post">
    <table class='table table-hover table-responsive table-bordered'>
        <tr>
            <td>File Name</td>
            <td><input type='text' name='fileName' value="<?php echo htmlspecialchars($fileName, ENT_QUOTES);  ?>" class='form-control' /></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type='submit' value='Save Changes' class='btn btn-primary' />
                <a href='index.php' class='btn btn-danger'>Back to files</a>
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

<!-- OnClick Event from Save Changes -->
<script>

function clickinner(target) { // Target refers to the clicked element
    location.href='index.php';
};

</script>

    <!-- Footer -->
    <footer class="page-footer">
        <div class="footer-container">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-sm-12">
                <p><img src="../../images/IGT_Logo_White.png" alt="IGT Logo" class="footer-logo" /></p>
                    <?php include('../../templates/footer.php');
