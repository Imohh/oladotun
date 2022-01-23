<?php
	$con = new mysqli( 'locahost', 'root', '', 'fashiony_ogs');
	if(!$con) {
		echo "Not connected to database".mysqli_error($con);
	}
?>