<?php
Header("Content-Type:Text/Javascript");
echo("window.onmousemove = function(event){
	if(mouseMove && mouseDown){
		var x = event.clientX - initMouseX;
		var y = event.clientY - initMouseY;
		x = initImageX + x;
		y = initImageY + y;
		
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
window.onmouseup = function(event){
	mouseDown = false;	
};
function crop(){
	if(preview.naturalWidth > preview.naturalHeight){
		ratio = preview.naturalHeight / (container.clientHeight - (margin * 2));
	}else{
		ratio = preview.naturalWidth / (container.clientWidth - (margin * 2));
	}	
	var x1 = preview.style.left;
	x1 = x1.replace('px','');
	x1 = x1 - margin;
	if(x1 < 0){x1 = x1 * -1}
	
	var y1 = preview.style.top;
	y1 = y1.replace('px','');
	y1 = y1 - margin;
	if(y1 < 0){y1 = y1 * -1}
	
	var x2 = (x1 + (container.clientWidth - (margin * 2)));
	var y2 = (y1 + (container.clientHeight - (margin * 2)));
	
	var width = (x2 - x1) * ratio;
	var height = (y2 - y1) * ratio;
	
	x1 = x1 * ratio;
	y2 = y2 * ratio;
	
	var zoomFactor = (range.value / 10);
	
	x1 = x1 / (zoomFactor * 2);//Edit for Accuracy
	y1 = y1 / (zoomFactor * 2);//Edit for Accuracy
		
	width = width / zoomFactor;
	height = height / zoomFactor;
	
	console.log('X:'+x1);
	console.log('Y:'+y1);
	
	var req = new XMLHttpRequest();
	req.open('GET','//".$_SERVER["HTTP_HOST"]."/crop.php?x='+x1+'&y='+y1+'&width='+width+'&height='+height,true);
	req.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
			document.getElementById('output').setAttribute('src','data:image/png;base64,'+this.responseText);
			reset_image();
		};
	};
	req.send();
};
function image_upload(f){
  var d = new FormData();
  d.append('cropped_file',f.files[0]);
  var req = new XMLHttpRequest();
  req.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		var x = window.btoa(this.responseText);
		document.getElementById('preview').setAttribute('src','data:image/png;base64,'+this.responseText);
	};
  };
  req.open('POST','//".$_SERVER["HTTP_HOST"]."/cgiupload.php',true);
  req.send(d);
};");
?>