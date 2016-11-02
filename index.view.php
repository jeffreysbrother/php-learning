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
</body>
</html>