<?php
require('config.php');
$file = $_POST['filename'];
$file = mb_ereg_replace("([^\w\s\d\-_~,;\[\]\(\).])", '', $file);
$file = mb_ereg_replace("([\.]{2,})", '', $file);

rename($FilePath.$file, $TrashPath.$file);
?>