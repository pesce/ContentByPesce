<?php require('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>File Manager</title>
<link href="<?php echo $BaseURL ?>/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $BaseURL ?>/js/sweetalert/sweet-alert.css" rel="stylesheet">
<script src="<?php echo $BaseURL ?>/js/jquery/jquery.min.js"></script>
<script src="<?php echo $BaseURL ?>/js/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo $BaseURL ?>/js/sweetalert/sweet-alert.min.js"></script>
<script>
$(document).on('change', ':file', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
	$("#filename").html(label);
	$("#uploadbutton").css("visibility","visible");
});
</script>
<script>
function deletefile(filename) {
	swal({   
		title: "Are you sure?",   
		text: "Delete "+ filename + "?",
		type: "warning",   
		showCancelButton: true,   
		confirmButtonColor: "#DD6B55",   
		confirmButtonText: "Yes, delete it!",   
		cancelButtonText: "No!",   
		closeOnConfirm: false,   
		closeOnCancel: false }, 
			function(isConfirm){   
				if (isConfirm) {     
					$.post( "delete.php", {filename:filename}, function( data ) {
						swal({   
							title: "Deleted!",   
							text: filename + " has been deleted.",   
							type: "success",   
							showCancelButton: false,   
							confirmButtonColor: "#DD6B55",   
							confirmButtonText: "OK",   
							closeOnConfirm: true }, 
								function(){   
									window.location.href = "file_manager.php"
								});
					});					
					
				} else {     
					swal("Cancelled", filename + " is safe :)", "error");   
				} 
			}
		);
}
</script>
</head>

<body>
<div class="container-fluid" >
  <form enctype="multipart/form-data" method="post" action="upload.php">
    <h4>Add a file</h4>
    <label class="btn btn-primary btn-file"><span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span> Browse (step 1)
      <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
      <input type="file" style="display: none;" accept=".pdf,image/*" name="userfile">
    </label>
    <button type="submit" class="btn btn-success" style="visibility:hidden" id="uploadbutton"><span class="glyphicon glyphicon-paste" aria-hidden="true"></span> Upload <span id="filename"></span> (step 2)</button>
  </form>
  <p />
  &nbsp;
  <p />
  <table class="table table-striped">
    <tr>
      <th>Filename</th>
      <th>URL</th>
      <th></th>
    </tr>
    <?php 
    $files = scandir($FilePath);
    foreach ($files as $file) {
    if ($file != '.' and $file != '..') {
    ?>
    <tr>
      <td><a href="<?php echo "$BaseURL/files/$file" ?>" target="new" title="Click to view"><?php echo $file ?></a></td>
      <td><?php echo "$BaseURL/files/$file" ?></td>
      <td><button class="btn btn-danger btn-xs" onMouseUp="deletefile('<?php echo $file ?>')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
    </tr>
    <?php }} ?>
  </table>
  <h1>&nbsp; </h1>
</div>
</body>
</html>