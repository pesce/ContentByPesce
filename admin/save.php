<?php
require('htmLawed/htmLawed.php');

$config = array('safe'=>1);
$content = htmLawed($_POST['mytextarea']);

$file = getcwd().'/content.html';
if (!file_put_contents($file, $content)) {
	header('Location: index.php?success=no');
}else{
	header('Location: index.php?success=yes');
}
?>