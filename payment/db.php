<?php
	$con = new mysqli('localhost', 'root', '', 'fashiony_ogs');
	if(!$con) {
	echo "Not connected to database".mysqli_error($con);
	}
?>