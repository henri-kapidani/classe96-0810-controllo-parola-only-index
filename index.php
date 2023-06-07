<?php
$word = isset($_GET['word']) ? strtolower($_GET['word']) : '';
$arr_words = ['gatto', 'pasta', 'php', 'boolean', 'ciao', '0'];
$word_found = in_array($word, $arr_words); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Controllo parola</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"
		defer></script>
</head>

<body>
	<div class="container">
		<h1>Controllo parola</h1>
		<form action="" method="get">
			<div class="mb-3">
				<label for="word" class="form-label">Parola da cercare</label>
				<input type="text" class="form-control" id="word" name="word" value="<?= $word ?>">
			</div>
			<button class="btn btn-primary" type="submit">Cerca</button>
			<a href="/classe96-0800-controllo-parola-only-index" class="btn btn-secondary" >Reset</a>
		</form><?php

		if ($word !== '') {
			if ($word_found) { ?>
				<h2 style="color: red">La parola "<?= $word ?>" è stata trovata</h2><?php
			} else { ?>
				<h2 style="color: green">La parola "<?= $word ?>" NON è stata trovata</h2><?php
			}
		} ?>

	</div>
</body>

</html>