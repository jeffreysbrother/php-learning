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
			<li><?= $name; ?></li>
		<?php endforeach ?>
	</ul>

	<ul>
		<?php foreach ($person as $key => $val) : ?>
			<li><strong><?= $key; ?></strong>: <?= $val; ?></li>
		<?php endforeach ?>
	</ul>
</body>
</html>