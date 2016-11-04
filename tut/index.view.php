<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<h1>
			<?= $greeting; ?>
		</h1>
	</header>

	<ul>
		<?php foreach ($names as $name) : ?>
			<li><?= ucwords($name); ?></li>
		<?php endforeach ?>
	</ul>

	<ul>
		<?php foreach ($person as $key => $val) : ?>
			<li><strong><?= ucwords($key); ?></strong>: <?= $val; ?></li>
		<?php endforeach ?>
	</ul>
	
	<!-- ternary operator -->
	<h3>exmaple of the ternary operator</h3>
	<p>Does he have three legs? <strong><?= $person['hasThreeLegs'] ? 'Yes!' : 'No!'; ?></strong></p>

	<hr>

	<!-- if statement -->
	<h3>exmaple of an if statement</h3>
	<p>Does he have 3 legs? 
		<strong>
			<?php 
				if ($person['hasThreeLegs']) {
					echo 'Sure.';
				} else {
					echo 'Nope.';
				}
			?>
		</strong>
	</p>
</body>
</html>