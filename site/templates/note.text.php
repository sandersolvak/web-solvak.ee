<?php ?>

<?php snippet('header') ?>

<main class="notes">

	<article class="post">
		<!-- Cover image -->
		<?php if ($page->cover()->isNotEmpty()) : ?>
				<?= $page->cover()->kt() ?>
		<?php endif ?>

		<header class="sticky">
			<?php if ($page->title()->isNotEmpty()) : ?>
				<h2 class="h1"><a href="<?= $page->link() ?>"><?= $page->title() ?></a></h2>
			<?php endif ?>

			<time><?= $page->date()->toDate('d. F Y H:i') ?></time>

			<?php if ($page->tags()->isNotEmpty()) : ?>
				<?php snippet('note.tags') ?>
			<?php endif ?>

		</header>

		<section class="col-2">
			<p class="lede">
				<?= $page->lede()->kt() ?>
			</p>
			<p>
				<?= $page->text()->kt() ?>
			</p>
		</section>
	</article>

	<?php snippet('pagenav') ?>

<?php snippet('footer') ?>
