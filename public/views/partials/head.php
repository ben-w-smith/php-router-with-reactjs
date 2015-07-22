<!doctype html>
<html>

<head>
	<title><?php echo ucwords(str_replace(array("_", "-"), array(" ", " "), end(array_diff(explode('/', $_SERVER["REQUEST_URI"]), array(''))))); ?> / React / AltoRouter</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="assets/css/main.min.v1437147412195.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<?php include 'header.php'; ?>