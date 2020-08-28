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

            <form action="insertCode.php" method="POST">
                <div class="modal-body">

                    <div class="form-group">
                        <label>File Name</label>
                        <input type="text" name="fileName" class="form-control" placeholder="Enter name of file">
                    </div>

                    <!-- <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div> -->

                </div>
                <div class="modal-footer">
                    <button type="submit" name="saveFile" class="btn btn-success">Save File</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>

        </div>
    </div>
</div>