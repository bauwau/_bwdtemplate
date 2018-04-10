<?php
	include ($_SERVER['DOCUMENT_ROOT'].'/includes/lib/page.php');

	$page = new Page(
		'WEBSITENAME | Styleguide',
		'WEBSITENAME | Styleguide',
		'styleguide', // optional body class
		'includes/content/styleguide/index.php'
	);

	include ($_SERVER['DOCUMENT_ROOT'].'/look-and-feel.php');
?>
