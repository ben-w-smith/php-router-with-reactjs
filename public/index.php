<?php

require_once 'include/AltoRouter/AltoRouter.php';

// Router setup
//---
$router = new AltoRouter();
$viewPath = 'views/';

// Router matches
//---
// Manual
$router->map('GET', '/', $viewPath . 'reactjs.html', 'reactjs');

$result = $viewPath . '404.php';

$match = $router->match();
if($match) {

	$result = $match['target'];

}

// Return route match 
//---
include $result;

?>