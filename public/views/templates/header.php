<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
    <?php
    /*filename of your class in controller
    	* CAUTION!!!!!!!!!
    	* keep in mind if your class in the controller is register then your html page must be register.php!
    */
    $fileName = $this->router->class;

    //Standard lay out page
    echo link_tag('public/css/standardLayout.css');
    //Your CSS example register.css
    echo link_tag('public/css/'. $fileName .'.css');
	
	?>
</head>
<body>
