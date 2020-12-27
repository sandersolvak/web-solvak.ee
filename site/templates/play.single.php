<?php ?>

<?php snippet('header') ?>

<main class="notes">

	<article class="post">
			<a href="<?= $page->link() ?>" class="cover">
				<?= $page->cover()->kt() ?>
			</a>

		<header class="sticky">
			<h2><a href="<?= $page->link() ?>"><?= $page->headline() ?></a></h2>

			<time><?= $page->date()->toDate('d F Y') ?></time>

			<?php if ($page->tags()->isNotEmpty()) : ?>
				<?php snippet('play.tags') ?>
			<?php endif ?>

		</header>

		<section class="col-2">
			<p>
				<?= $page->text()->kt() ?>
			</p>
		</section>
	</article>

	<?php snippet('pagenav') ?>

<?php snippet('footer') ?>
