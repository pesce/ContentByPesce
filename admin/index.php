<?php require('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>
<link href="<?php echo $BaseURL ?>/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $BaseURL ?>/js/sweetalert/sweet-alert.css" rel="stylesheet">
<script src="<?php echo $BaseURL ?>/admin/tinymce/tinymce.min.js"></script>
<script src="<?php echo $BaseURL ?>/js/jquery/jquery.min.js"></script>
<script src="<?php echo $BaseURL ?>/js/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo $BaseURL ?>/js/sweetalert/sweet-alert.min.js"></script>
<?php if ($_GET['success'] == 'yes') { ?>
<script>
    $( document ).ready(function() {
      swal({
          title: "Yay!",   
          text: "Saved!",   
          type: "success",   
          showCancelButton: false,   
          confirmButtonText: "OK!",   
          closeOnConfirm: true }, 
          function(){
              window.location = "index.php";
      });	
    })
   </script>
<?php die;} ?>
<?php if ($_GET['success'] == 'no') { ?>
<script>
$( document ).ready(function() {
  swal({
      title: "Boo!",   
      text: "Failed! Please try again or call Pesce",   
      type: "error",   
      showCancelButton: false,   
      confirmButtonText: "OK!",   
      closeOnConfirm: true }, 
      function(){
          window.location = "index.php";
  });	
})
</script>
<?php } ?>
<script>

tinymce.init({
  selector: '#mytextarea',
  plugins: 'table, link, code',
  toolbar: 'table link code undo redo, visualaid, cut, copy, paste, selectall, bold, italic, underline, strikethrough, subscript, superscript, removeformat, formats',
  table_default_attributes: {
      class: 'table table-striped',
      style: 'width: 100%; margin-left: auto; margin-right: auto;'
  },
});
</script>
</head>

<body style="background-color:#FAA !important">
<div class="container" style="background-color:#FFF">
  <div class="page-header">
    <h1><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> Content By Pesce Admin</h1>
    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> File Manager</button>
    <a href="<?php echo $BaseURL ?>" class="btn btn-info" target="new"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> View Page</a> </div>
      <form method="post" action="save.php" class="text-center">
      <textarea id="mytextarea" name="mytextarea">
              <?php $file = getcwd().'/content.html' ?>
              <?php include($file) ?>
            </textarea>
      <p/>
      &nbsp;
      <p />
      <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Save</button>
      </form>
  </div>
  <div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">File Manager</h4>
        </div>
          <div class="modal-body">
          <section id="about" data-type="background" data-speed="10" class="pages">
              <iframe src="file_manager.php" align="center" frameborder="0"  scrolling="auto" width="99.6%" marginheight="0" marginwidth="0"></iframe>
            </section>
        </div>
     </div>
   </div>
</div>
<script>
  $('iframe').load(function() {
	  this.style.height = this.contentWindow.document.body.offsetHeight + 'px';
  });
</script>
</body>
</html>
