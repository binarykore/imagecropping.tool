<?php
Header("Content-Type:Text/Javascript");
echo("function reset_image(){
	if(preview.naturalWidth > preview.naturalHeight){
		ratio = preview.naturalWidth / preview.naturalHeight;
		preview.style.height = container.clientHeight;
		preview.style.width = container.clientWidth * ratio;
		preview.style.top = 0;
		var extra = (preview.clientWidth - container.clientWidth) / 2;
		preview.style.left = extra * -1;
	}
	range.value = 10;
};");
?>