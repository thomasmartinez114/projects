<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Styling -->
  <!-- <link rel="stylesheet" href="../../../css/styles.css"> -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- Tab Icon -->
  <link rel="icon" type="image/png" href="../../../images/LogoGlobe.png" />
    <style>
        /* light blue #1b9ddb */
/* dark blue #0c51a1; */
/* darker blue #003865 */
/* orange #ff671f */

/* Imported Font */
@import url('https://fonts.googleapis.com/css?family=Work+Sans:400,700&display=swap');

/* Removing hyperlink blue */
.rmv-link {
  text-decoration: none;
  color: white;
}

.rmv-link:hover {
  color: #ff671f;
  font-weight: bold;
}

/* Line space between links */
.rmv-link>p {
  line-height: 15px;
}

/* Navigation Bar */
.navbar {
  position: relative;
}

.navbar-logo {
  height: 87px;
}

.title {
  font-family: 'Work Sans', sans-serif;
  /* font-weight: bold; */
  text-transform: uppercase;
  color: #0c51a1;
}

/* Header */

.page-header {
  position: relative;
}

.image-header {
  width: 100%;
  height: 110px;
  position: relative;
}

/* Photo Grid */
.container {
  background-color: #e8f7ff;
  position: relative;
  height: relative;
}

.image-tile {
  height: 100px;
  transition: 0.4s;
}

.image-tile:hover {
  box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.6);
}

.row-top {
  padding-top: 5%;
}

.row {
  padding-bottom: 5%;
  padding-right: 5%;
  padding-left: 5%;
}

/* .overlay:hover {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #1b9ddb;
} */

/* Footer */
.page-footer {
  background-color: #0c51a1;
  color: white;
  /* padding: top right/left bottom */
  padding: 20px 0 10px;
}

.footer-logo {
  height: 45px;
}

.footer-col-title {
  font-size: 20px;
  padding-bottom: 10px;
}

.underline {
  text-decoration: underline;
}

p {
  line-height: 20px;
}

/* Remove space between # and toll free text */
#space-bottom {
  margin-bottom: 0;
  font-size: 20px;
  font-weight: bold;
}

.space-top {
  margin-top: 0;
  font-size: 15px;
}

/* .footer-info {
  height: auto;
  border: solid black 2px;
} */

/* Return to GNIE Button - Radar */
/* .return-gnie-btn {
  margin-bottom: 10px;
} */

.rmv-btnlink {
  text-decoration: none;
  color: black;
  font-weight: bold;
}

/* iFrame styling */
iframe {
  /* border: solid 2px black; */
  height: 500px;
  width: 800px;
}
    </style>

  <title>GNIE | Privacy Notice</title>
</head>

<body>
  <!-- Navigation Bar -->
  <nav class="navbar navbar-light bg-light">
    <a href="../index.php" class="navbar-brand"><img src="../../../images/GNIEDirect_logo.png" alt="GNIE Direct Logo" class="navbar-logo" /></a>
    <h3 class="title">Upload a File</h3>
  </nav>

  <!-- Privacy Notice -->
  <div class="container">
    <div class="row row-top">
      <div>
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
            <p><img src="../../../images/IGT_Logo_White.png" alt="IGT Logo" class="footer-logo" /></p>
            <?php include('../../../templates/footer.php');
