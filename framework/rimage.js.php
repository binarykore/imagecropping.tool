<?php
Header("Content-Type:Text/Javascript");
echo("var ratio = 1;
var margin = 50;
function reset_image(){
	if(preview.naturalWidth > preview.naturalHeight){
		ratio = preview.naturalWidth / preview.naturalHeight;
		preview.style.height = container.clientHeight - (margin * 2);
		preview.style.width = (container.clientWidth - (margin * 2)) * ratio;
		preview.style.top = margin;
		var extra = (preview.clientWidth - container.clientWidth) / 2;
		preview.style.left = extra * -1;
	}else{
		ratio = preview.naturalHeight / preview.naturalWidth;
		preview.style.width = container.clientWidth - (margin * 2);
		preview.style.height = (container.clientHeight - (margin * 2)) * ratio;
		preview.style.left = margin;
		var extra = (preview.clientHeight - container.clientHeight) / 2;
		preview.style.top = extra * -1;
	}
	range.value = 10;
};");
?>