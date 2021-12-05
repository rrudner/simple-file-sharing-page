<?php
$target_dir = "../shared/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
