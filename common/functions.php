<?php 
function to($module,$action,$param = false){
	if ($param) {
		echo 'index.php?module='.$module.'&action='.$action.'&id='.$param;
	}else{
		echo 'index.php?module='.$module.'&action='.$action;
	}
	
}
