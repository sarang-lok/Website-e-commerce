<?php 
function get_safe_value($connect,$str){
	if($str!=''){
		return mysqli_real_escape_string($connect,$str);
	}
	
}

?>