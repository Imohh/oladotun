<?php
	$con = new mysqli( 'locahost', 'root', '' 'fashionys');
	if(!$con) {
		echo "Not connected to database".mysqli_error($con);
	}
?>