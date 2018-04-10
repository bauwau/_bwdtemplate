<?php
	include ($_SERVER['DOCUMENT_ROOT'].'/includes/lib/page.php');

	$page = new Page(
		'WEBSITENAME | Styleguide Forms',
		'WEBSITENAME | Styleguide Forms',
		'styleguide', // optional body class
		'includes/content/styleguide/_forms.php'
	);

	include ($_SERVER['DOCUMENT_ROOT'].'/look-and-feel.php');
?>
