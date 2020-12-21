<?php ?>

<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">


  <!-- The title tag we show the title of our site and the title of the current page -->
  <title><?= $page->title() ?> | <?= $site->title() ?></title>

	<meta name="description" content="<?= $site->description() ?>">
	<meta name="keywords" content="<?= $site->keywords() ?>">
	<meta name="author" content="<?= $site->author() ?>">
	<meta name="Copyright" content="Copyright <?= $site->copyright() ?>">

	<!-- Set the viewport to device width and allow users to zoom. -->
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />

	<!-- Favicons -->
	<link rel="icon" type="image/svg+xml" href="favicon.svg">

	<!-- Fonts -->
	<style type="text/css">
	/* insert base64 encoded fonts here */
	</style>

	<!-- Styles -->
  <?= css(['assets/css/main.css', '@auto']) ?>

</head>

<body>
	<nav>
		<a href="<?= $site->url() ?>" class="home"><span class="hidden">Home</span>
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40">
			  <path d="M27.1 14.2c5.3 0 8.5 5.3 8.9 10.3l-.7.1c-.2 0-.3-.1-.4-.2-1.5-4-5.9-4.7-9.6-3.3-2.2.8-6.3 3.3-8.5 4C9.9 27.7 4.5 22.4 4 15.5l.7-.1c.2 0 .3.1.4.2 1.5 4 5.9 4.7 9.6 3.3 3.8-1.4 8.1-4.8 12.4-4.7z"/>
			</svg>
		</a>

		<?php foreach ($site->children()->listed() as $item): ?>
			<a<?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
		<?php endforeach ?>

	</nav>
