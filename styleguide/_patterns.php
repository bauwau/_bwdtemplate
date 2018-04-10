<?php
	include ($_SERVER['DOCUMENT_ROOT'].'/includes/lib/page.php');

	$page = new Page(
		'WEBSITENAME | Styleguide Patterns',
		'WEBSITENAME | Styleguide Patterns',
		'styleguide', // optional body class
		'includes/content/styleguide/_patterns.php'
	);

	include ($_SERVER['DOCUMENT_ROOT'].'/look-and-feel.php');
?>
