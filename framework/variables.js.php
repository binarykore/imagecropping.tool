<?php
Header("Content-Type:Text/Javascript");
echo("var preview = document.getElementById('preview');
var output = document.getElementById('output');
var container = document.getElementById('container');
var cropper = document.getElementById('cropper');
var range = document.getElementById('range');
var mouseMove = false;
var mouseDown = false;
var initMouseX = 0;
var initMouseY = 0;
var initImageX = 0;
var initImageY = 0;
var originalImageWidth = preview.clientWidth;
var originalImageHeight = preview.clientHeight;");
?>