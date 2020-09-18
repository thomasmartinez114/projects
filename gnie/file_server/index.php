<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styling -->
    <link rel="stylesheet" href="./css/styles.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Tab Icon -->
    <link rel="icon" type="image/png" href="./images/LogoGlobe.png" />
    <title>GNIE | Home</title>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-light bg-light">
        <?php include('./templates/components/navbar/logo.php'); ?>
            
            <!-- Navbar 2nd Column -->
            <div class="links">
                <?php include('./templates/components/navbar/spark.php'); ?>
                <?php include('./templates/components/navbar/identity.php'); ?>
            </div>
    </nav>

    <!-- Photo Grid -->
    <div class="container text-center images">

        <!-- 1st row -->
        <div class="row row-top">
            <?php include('./templates/flags/us-flag.php'); ?>
            <?php include('./templates/flags/ca-flag.php'); ?>
            <?php include('./templates/flags/cr-flag.php'); ?>
            <?php include('./templates/flags/cz-flag.php'); ?>
        </div>

        <!-- 2nd row -->
        <div class="row">           
            <?php include('./templates/flags/do-flag.php'); ?>
            <?php include('./templates/flags/jm-flag.php'); ?>
            <?php include('./templates/flags/mx-flag.php'); ?>
            <?php include('./templates/flags/pl-flag.php'); ?>
        </div>

        <!-- 3rd row -->
        <div class="row">
            <?php include('./templates/flags/sk-flag.php'); ?>
            <?php include('./templates/flags/es-flag.php'); ?>
            <?php include('./templates/flags/tt-flag.php'); ?>
        </div>

        <!-- 4th row -->
    </div>

    <!-- Footer -->
    <footer class="page-footer">
        <div class="footer-container">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-sm-12">
                    <p><img src="./images/IGT_Logo_White.png" alt="IGT Logo" class="footer-logo" /></p>
                    <?php include('./templates/footer.php');



