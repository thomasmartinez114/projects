<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete File</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="deleteCode.php" method="POST">
                <div class="modal-body">

                    <input type="hidden" name="update_id" id="update_id">

                    <p>Confirm deletion of file</p>

                </div>
                <div class="modal-footer">
                    <button type="submit" name="updateFile" class="btn btn-success">Yes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                </div>
            </form>

        </div>
    </div>
</div>