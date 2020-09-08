<?php

include('tableName.php');
include('../database.php');

$connection = mysqli_connect($host, $username, $password);
$db = mysqli_select_db($connection, $db_name);

$queryUpdate = "SELECT fileName FROM $tableName WHERE id = $id";
$query_run = mysqli_query($connection, $queryUpdate);

?>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit File</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="updateCode.php" method="POST">
                <div class="modal-body">

                    <input type="hidden" name="update_id" id="update_id">

                    <div class="form-group">
                        <label>File Name</label>
                        <input type="text" name="fileName" id="fileName" value="<?php echo $query_run ?>" class="form-control" placeholder="Enter name of file">
                    </div>

                    <div class="form-group">
                            Select file: <input type='file' name='fileUpload' id='fileUpload' class='form-control'><br>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" name="updateFile" class="btn btn-success">Update File</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </form>

        </div>
    </div>
</div>