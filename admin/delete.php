<?php
require('config.php');
$file = $_POST['filename'];
rename($FilePath.$file, $TrashPath.$file);
?>