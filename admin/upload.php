<?php require('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo $BaseURL ?>/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="<?php echo $BaseURL ?>/js/jquery/jquery.min.js"></script>
<script src="<?php echo $BaseURL ?>/js/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container-fluid" >
<?php
	$file = mb_ereg_replace("([^\w\s\d\-_~,;\[\]\(\).])", '', basename($_FILES['userfile']['name']));
	$file = mb_ereg_replace("([\.]{2,})", '', $file);
	$file = rand(000,999).'_'.$file;
	$uploadfile = $FilePath . $file;
	
	if ($_FILES['userfile']['error'] == 2) {
		echo "File too large<p />&nbsp;<p />";
		echo '<a href="file_manager.php" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Back</a>';
		die;
	}
	
	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
		echo "File is valid, and was successfully uploaded.<p />&nbsp;<p />";
		echo "URL = $BaseURL/$file <p />&nbsp;<p />";
		echo '<a href="file_manager.php" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Back</a>';
	} else {
		echo "Error!<p />&nbsp;<p />";
		echo '<a href="file_manager.php" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Back</a>';
		print_r($_FILES);
	}
?>
</div>
</body>
</html>