<?php ?>

<?php snippet('header') ?>

<main>
	<article class="post project">
		<?php if ($page->cover()->isNotEmpty()) : ?>
			<?= $page->cover()->kt() ?>
		<?php endif ?>
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
		
	</article>

	<?php snippet('pagenav') ?>

<?php snippet('footer') ?>
