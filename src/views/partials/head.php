<!doctype html>
<html>

<head>
	<title>Standard Optical - <?php echo ucwords(str_replace(array("_", "-"), array(" ", " "), end(array_diff(explode('/', $_SERVER["REQUEST_URI"]), array(''))))); ?></title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="/portfolio/assets/css/main.min.v<%= timestamp %>.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<?php include 'header.php'; ?>