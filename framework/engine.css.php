<?php
Header("Content-Type:Text/CSS");
echo("html,body{
	Width:100vw;
	Height:100vh;
	Margin:0%;
	Padding:0%;
	Display:Inline-Flex;
	Justify-Content:Center;
	Text-Align:Center;
	Align-Items:Center;
}
body{
	Position:Relative;
}
img[id='output']{
	Border:None;
	Width:100%;
	Height:100%;
	Display:Inline-Flex;
	Justify-Content:Center;
	Align-Items:Center;
	Text-Align:Center;
	-khtml-user-select:None;
	-o-user-select:None;
	-moz-user-select:None;
	-webkit-user-select:None;
	-ms-user-select:None;
	user-select:None;
	Background-Color:rgba(0,0,0,0.2);
	Margin:0%;
	Padding:0%;
}
img[id='preview']{
	Border:None;
	Width:100%;
	Height:100%;
	Display:Block;
	Position:Relative;
	-khtml-user-select:None;
	-o-user-select:None;
	-moz-user-select:None;
	-webkit-user-select:None;
	-ms-user-select:None;
	user-select:None;
	Background-Color:rgba(0,0,0,0.2);
}
div[class='container']{
	Width:Auto;
	Height:Auto;
	Margin:0%;
	Padding:0%;
	Display:Inline-Block;
	Align-Items:Center;
	Text-Align:Center;
	Position:Fixed;
	Background-Color:rgba(0,0,0,0.4);
}
div[id='outputcontainer']{
	Width:280px;
	Height:280px;
	Margin:Auto;
	Overflow:Hidden;
	Display:Inline-Block;
	Position:Relative;
}
div[id='outputmargin']{
	Background-Color:rgba(0,0,0,0.4);
	Background-Size:100% 100%;
	Background-Position:100% 100%;
	Background-Repeat:No-Repeat;
	Width:100%;
	Height:100%;
	Display:Inline-Block;
	Margin:0%;
	Padding:0%;
	Position:Absolute;
	Top:0%;
	Left:0%;
	Right:0%;
	Bottom:0%;
}
div[id='container']{
	Width:280px;
	Height:280px;
	Margin:Auto;
	Overflow:Hidden;
	Display:Inline-Block;
	Position:Relative;
}
div[id='cropper']{
	Background-Image:url('//".$_SERVER["HTTP_HOST"]."/images/margin.png?".(date("s"))."');
	Background-Size:100% 100%;
	Background-Position:100% 100%;
	Background-Repeat:No-Repeat;
	Width:100%;
	Height:100%;
	Display:Inline-Block;
	Margin:0%;
	Padding:0%;
	Position:Absolute;
	Top:0%;
	Left:0%;
	Right:0%;
	Bottom:0%;
	Cursor:Move;
}
input[id='range']{
	Width:280px;
	Margin:Auto;
	Display:Block;
}");
?>