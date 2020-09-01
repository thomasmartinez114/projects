<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Styling -->
  <link rel="stylesheet" href="../../css/styles.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- Tab Icon -->
  <link rel="icon" type="image/png" href="../../../images/LogoGlobe.png" />

  <title>GNIE | FILES | CR</title>
</head>

<body>

<div class="container">

    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal">Upload file</button>

      <!-- Modal -->
      <div id="uploadModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">File upload form</h4>
            </div>
            <div class="modal-body">
              <!-- Form -->
              <form method='post' action='' enctype="multipart/form-data">
                Select file : <input type='file' name='file' id='file' class='form-control' ><br>
                <input type='button' class='btn btn-info' value='Upload' id='btn_upload'>
              </form>

              <!-- Preview-->
              <div id='preview'></div>
            </div>
      
          </div>

        </div>
      </div>
</div>


<script type='text/javascript'>
        $(document).ready(function(){
          $('#btn_upload').click(function(){

            var fd = new FormData();
            var files = $('#file')[0].files[0];
            fd.append('file',files);

            // AJAX request
            $.ajax({
              url: './ajaxfile.php',
              type: 'post',
              data: fd,
              contentType: false,
              processData: false,
              success: function(response){
                if(response != 0){
                  // Show image preview
                  $('#preview').append("<img src='"+response+"' width='100' height='100' style='display: inline-block;'>");
                }else{
                  alert('file not uploaded');
                }
              }
            });
          });
        });
</script>


</body>
  </html>