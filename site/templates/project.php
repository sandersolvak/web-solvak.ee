<?php ?>

<?php snippet('header') ?>

<main>
	<article class="post project">
		<img class="cover" src="<?= $page->cover() ?>" alt="" loading=lazy>

		<header>
			<h1><?= $page->title() ?></h1>
			<time><?= $page->date() ?></time>
			<?php if ($page->tags()->isNotEmpty()) : ?>
				<p class="post-meta">Filed under:
				<a href=""><?= $page->tags() ?></a></p>
			<?php endif ?>
		</header>

		<div class="col-2 lede">
			<?= $page->intro()->kt() ?>
		</div>

		<section class="wide">
			<?= $page->text()->kt() ?>
		</section>

		<!-- video
		<figure class="wide">
			<video  preload="none" poster="statlab-web-poster.jpg" autoplay playsinline loop muted>
				<source src="statlab-web.webm" type="video/webm" >
				<source src="statlab-web.mp4" type="video/mp4" >
			</video>
		</figure>
-->

	</article>

	<?php snippet('pagenav') ?>

<?php snippet('footer') ?>
