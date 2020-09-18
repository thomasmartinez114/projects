<div class="modal fade" id="addFileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add a File</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method='post' action='upload.php' enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="form-group">
                        <label>File Name</label>
                        <input type="text" name="fileName" class="form-control" placeholder="Enter Name of File">
                    </div>
					
					<div class="form-group">
                        <label>Article ID</label>
                        <input type="text" name="articleId" class="form-control" placeholder="Enter Article ID">
                    </div>

                    <div class="form-group">
                        <label>Select file:</label>
                        <input type='file' name='fileUpload' id='fileUpload' class='form-control'><br>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" name="saveFile" class="btn btn-success">Save File</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>

        </div>
    </div>
</div>