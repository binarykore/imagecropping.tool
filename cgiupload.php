<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$_filename = (base64_encode(file_get_contents($_FILES["cropped_file"]["tmp_name"])));
	echo($_filename);
}//
?>