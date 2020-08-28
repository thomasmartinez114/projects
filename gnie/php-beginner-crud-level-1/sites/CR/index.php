<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styling -->
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <link rel="icon" type="image/png" href="../../../images/LogoGlobe.png" />

    <title>GNIE | FILES | CR |</title>
</head>

<body>

    <?php 
    // Database File
    include('../database.php');

    //  Create Modal
    include('../../templates/modals/create-modal.php'); 

    // Edit Modal
    include('../../templates/modals/edit-modal.php');
    ?>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-light bg-light">
        <a href="../../../index.php" class="navbar-brand"><img src="../../../images/GNIEDirect_logo.png"
                alt="GNIE Direct Logo" class="navbar-logo" /></a>
        <h3 class="title">Files</h3>
    </nav>

    <div class="container">
        <div class="">

            <!-- <div class="card">
                <h2>PHP Modal</h2>
            </div> -->

            <div class="">
                <div class="card-body">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addFileModal">
                        Add File
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <?php include('../../templates/modals/read-modal.php'); ?>
                </div>
            </div>

        </div>
    </div>

    <!-- Edit File Function -->
    <script>
    $(document).ready(function() {
        $('.editBtn').on('click', function() {

            $('#editModal').modal('show');


        });
    });
    </script>

    <!-- Footer -->
    <footer class="page-footer">
        <div class="footer-container">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-sm-12">
                    <p><img src="../../images/IGT_Logo_White.png" alt="IGT Logo" class="footer-logo" /></p>
                    <?php include('../../templates/footer.php');