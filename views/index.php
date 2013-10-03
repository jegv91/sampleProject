<!DOCTYPE html>
<html class="">

<head>
<meta charset=utf-8 />
<title>BGX - Template</title>
<link rel="stylesheet" href="../furatto/css/normalize.css" />
<link rel="stylesheet" href="../furatto/css/furatto.css" />
<link rel="stylesheet" href="../furatto/css/font-awesome.css" />
<link rel="stylesheet" href="../furatto/css/examples.css" />
<link rel="shortcut icon" href="../furatto/img/favicon.ico" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
</head>

<body>
	<div class="panels ">
	  <div class="panel panel-left">
	  </div>
	</div>

<?php 
	/* Load the menu and the content of the page */
	include_once("../views/menu.html"); 
	include_once("../views/content.html");
	include_once("../views/footer.html");
?>

<script src="../furatto/js/jquery.js"></script>
<script src="../furatto/js/furatto.min.js"></script>
</body>

</html>