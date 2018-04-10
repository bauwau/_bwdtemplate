<?php
	include ('includes/lib/page.php');

	$page = new Page(
		'WEBSITENAME | PAGETITLE',
		'WEBSITENAME | PAGETITLE',
		'home', // optional body class
		'includes/content/FILENAME.php'
	);

	include ('look-and-feel.php');
?>
