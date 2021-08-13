<?php
echo("<html>");
echo("<head>");
echo("<script defer='defer' src='//".$_SERVER["HTTP_HOST"]."/framework/variables.js.php'></script>");
echo("<script defer='defer' src='//".$_SERVER["HTTP_HOST"]."/framework/mortal.js.php'></script>");
echo("<script src='//".$_SERVER["HTTP_HOST"]."/framework/rimage.js.php'></script>");
echo("<link rel='stylesheet' href='//".$_SERVER["HTTP_HOST"]."/framework/engine.css.php'/>");
echo("<noscript><link rel='stylesheet' href='//".$_SERVER["HTTP_HOST"]."/framework/engine.css.php'/></noscript>");
echo("</head>");
echo("<body>");
echo("<div class='container'>");
echo("<div id='container' onmousedown='javascript:mouseDown_on(event);' onmouseup='javascript:mouseDown_off(event);' onmouseenter='javascript:mouseMove_on(event);' onmouseleave='javascript:mouseMove_off(event);'>");
echo("<img id='preview' onLoad='javascript:reset_image();' src='//".$_SERVER["HTTP_HOST"]."/images/beta.png?".(date("s"))."'/>");
echo("<div id='cropper'></div>");
echo("</div>");
echo("<div id='outputcontainer'>");
echo("<div id='outputmargin'></div>");
echo("<img id='output' src='//".$_SERVER["HTTP_HOST"]."/images/cropped.jpg?".(date("s"))."'/>");
echo("</div>");
echo("<input id='range' type='range' min='10' max='40' onChange='javascript:resize_image(event);'/>");
echo("<button onclick='javascript:crop(event);'>Crop</button>");
echo("<input onchange='javascript:image_upload(this);' type='FILE' name='image_crop'/>");
echo("</div>");
echo("<script src='//".$_SERVER["HTTP_HOST"]."/framework/engine.js.php'></script>");
echo("</body>");
echo("</html>");
?>