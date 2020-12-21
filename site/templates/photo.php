<?php ?>

<?php snippet('header') ?>

<main class="photo">

	<article><!-- repeat for all albums -->
		<header>
			<h1><?= $page->title() ?></h1>
			<time><?= $page->date() ?></time>
		</header>
		<div class="thumbs">
			<!-- load all thumbnails with links -->
			<a href="1_album/album-photo.html"><img src="1_album/venezia-001.jpg" alt="" loading=lazy></a>
		</div>
	</article>

</main>

<?php snippet('footer') ?>
