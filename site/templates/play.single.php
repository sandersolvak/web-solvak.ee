<?php ?>

<?php snippet('header') ?>

<main class="notes play">

	<article class="post">
		<?= $page->cover()->kt() ?>

		<header>
			<h2><a href="<?= $page->link() ?>"><?= $page->headline() ?></a></h2>

			<time><?= $page->date()->toDate('d. F Y H:i') ?></time>

			<?php if ($page->tags()->isNotEmpty()) : ?>
				<?php snippet('play.tags') ?>
			<?php endif ?>

		</header>

		<section class="col-2">
				<?= $page->text()->kt() ?>
		</section>
	</article>

	<?php snippet('pagenav') ?>

<?php snippet('footer') ?>
