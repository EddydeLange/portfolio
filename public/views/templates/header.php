<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
    <?php
	/*$filename got the controllers class
	* CAUTION!!!!!!!!!
	* keep in mind if your class in the controller is register then your html page must be register.php!
	*/
	$fileName = $this->router->class;
	$CI =& get_instance();
	$CI->basic();

    //Standard lay out page
    echo link_tag('public/css/standardLayout.css');
	//
	if (isset($fileName)) {
		//Your CSS example register.css
		echo link_tag('public/css/'. $fileName .'.css');
	}
	?>
</head>
<body>
