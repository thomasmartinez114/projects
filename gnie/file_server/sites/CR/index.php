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

    <!-- Data Tables CDN -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

    <!-- IGT Globe Icon -->
    <link rel="icon" type="image/png" href="../../../images/LogoGlobe.png" />

    <title>GNIE | FILES | CR |</title>
</head>

<body>

    <?php 
    
    // Database File
    include('../database.php');

    //  Create Modal
    include('./modals/create-modal.php'); 

    // Edit Modal
    include('./modals/update-modal.php');

    // Delete Modal
    include('./modals/delete-modal.php');
    
    ?>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-light bg-light">
        <a href="../../../index.php" class="navbar-brand"><img src="../../../images/logos/GNIEfiles.png"
                alt="GNIE Files Logo" class="navbar-logo" /></a>
        <h3 class="title">Files</h3>
    </nav>

    <div class="container">
        <div class="">

            <div class="">
                <div class="card-body">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addFileModal">
                        Add File
                    </button>
                </div>
            </div>

            <div class="card">
                <div>
                    <?php include('./modals/read-modal.php'); ?>
                </div>
            </div>

        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"> </script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"> </script>


    <!-- Database JQuery Function -->

    <!-- Download File Function -->
 

    <!-- Edit File Function -->
    <script>
    $(document).ready(function() {
        $('.editBtn').on('click', function() {

            // Display Edit Modal
            $('#editModal').modal('show');

            // Display file information on the edit modal
            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#update_id').val(data[0]);
            $('#fileName').val(data[1]);

        });
    });
    </script>

    <!-- Delete File Function -->
    <script>
    $(document).ready(function() {
        $('.deleteBtn').on('click', function() {

            // Display delete Modal
            $('#deleteModal').modal('show');

            // Display file information on the delete modal
            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#delete_id').val(data[0]);

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