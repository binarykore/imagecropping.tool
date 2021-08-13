<?php
$_width = 280;
$_height = 280;
$_destination = imagecreatetruecolor($_width,$_height);
$_source = imagecreatefrompng($_SERVER["DOCUMENT_ROOT"]."/images/beta.png");//Calculation is based on Javascript
imagecopyresampled($_destination,$_source,0,0,$_GET["x"],$_GET["y"],$_width,$_height,$_GET["width"],$_GET["height"]);
imagejpeg($_destination,$_SERVER["DOCUMENT_ROOT"]."/images/cropped.jpg",90);
echo(base64_encode(file_get_contents($_SERVER["DOCUMENT_ROOT"]."/images/cropped.jpg")));
?>