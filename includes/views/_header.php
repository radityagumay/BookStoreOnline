<!DOCTYPE html> 
<html> 
	<head> 
	<title><?php echo formatTitle($title)?></title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1" /> 

	<link rel="stylesheet" href="assets/css/jquery.mobile-1.0b2.css"/>
    <link rel="stylesheet" href="assets/css/styles.css" />
	<script type="text/javascript" src="assets/js/jquery-1.6.2.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.mobile-1.0b2.min.js"></script>
</head> 
<body> 

<div data-role="page">

	<div data-role="header" data-theme="b">
	    <a href="./" data-icon="home" data-iconpos="notext" data-transition="fade">Home</a>
		<h1><?php echo $title?></h1>
	</div>

	<div data-role="content">