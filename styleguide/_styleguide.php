<?php
	include ($_SERVER['DOCUMENT_ROOT'].'/includes/lib/page.php');

	$page = new Page(
		'WEBSITENAME | Styleguide Styles',
		'WEBSITENAME | Styleguide Styles',
		'styleguide', // optional body class
		'includes/content/styleguide/_styleguide.php'
	);

	include ($_SERVER['DOCUMENT_ROOT'].'/look-and-feel.php');
?>
