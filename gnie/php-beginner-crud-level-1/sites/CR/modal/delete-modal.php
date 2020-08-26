<div class="modal fade" id="filesDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm File Deletion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form action="insertcode.php" method="POST">
      <div class="modal-body">
        <div class="form-group">
            <label for="inputFileName">[File Name Here]</label>
        </div>
        <br>
      </div>
      <div class="modal-footer">
        <button type="submit" name="upload" class="btn btn-success">Yes</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
      </div>
      </form>
    </div>
  </div>
</div>