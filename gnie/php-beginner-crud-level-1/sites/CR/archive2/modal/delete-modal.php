<div class='modal fade' id='filesDeleteModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Confirm File Deletion</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      
      <form action='../delete.php' method='DELETE'>
      <div class='modal-body'>
        <div class='form-group'>
            <label for='inputFileName'>[File Name Here]</label>
        </div>
        <br>
      </div>
      <div class='modal-footer'>
        <button type='submit' name='delete' class='btn btn-success' onclick='delete_user({$id});'>Yes</button>
        <button type='button' class='btn btn-danger' data-dismiss='modal'>No</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Confirm delete file here -->
<script type='text/javascript'>
// confirm record deletion
function delete_user( id ){
     
    // var answer = confirm('Are you sure?');
    // if (answer){
        // if user clicked ok, 
        // pass the id to delete.php and execute the delete query
        window.location = 'delete.php?id=' + id;
    // } 
}
</script>