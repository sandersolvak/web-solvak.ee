<?php ?>

<?php snippet('header') ?>

<main>

	<article>
		<header>
			<h1><?= $page->title() ?></h1>
		</header>
		<section>
			<?= $page->text()->kt() ?>
		</section>
	</article>

</main>

<?php snippet('footer') ?>
