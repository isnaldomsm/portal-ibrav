<?php 

function anti_injection($sql) {
    	$sql = mysql_real_escape_string($sql);
    	return $sql;
}



?>