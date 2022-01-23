<?php
	if($_GET['status'] !== "success") {
		header("location: javascript://history.go(-1)");
	}
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Transaction Successful</title>
</head>
<body>

	<h1>You have successfully made your payent, you will receive a mail concerning your product as well as receipt for payment.</h1>

</body>
</html>