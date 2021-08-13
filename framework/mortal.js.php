<?php
echo("function resize_image(){
	var w = preview.clientWidth;
	var h = preview.clientHeight;
	preview.style.width = (range.value / 10) * originalImageWidth;
	preview.style.height = (range.value / 10) * originalImageHeight;
	var w2 = preview.clientWidth;
	var h2 = preview.clientHeight;
	if(w - w2 != 0){
		var diff = (w - w2) / 2;
		var diff2 = (h - h2) / 2;
		
		var x = (preview.offsetLeft - container.offsetLeft) + diff;
		var y = (preview.offsetTop - container.offsetTop) + diff2;
		
		if(x > margin){x = margin}
		if(y > margin){y = margin}
		
		xlimit = container.clientWidth - preview.clientWidth - margin;
		if(x < xlimit){x = xlimit}
		
		ylimit = container.clientHeight - preview.clientHeight - margin;
		if(y < xlimit){y = ylimit}
		
		preview.style.left = x;
		preview.style.top = y;
	}
};
function mouseMove_on(event){
	mouseMove = true;
};
function mouseMove_off(event){
	mouseMove = false;
};
function mouseDown_on(event){
	mouseDown = true;
	initMouseX = event.clientX;
	initMouseY = event.clientY;
	initImageX = preview.offsetLeft - container.offsetLeft;
	initImageY = preview.offsetTop - container.offsetTop;
};
function mouseDown_off(event){
	mouseDown = false;
};");
?>