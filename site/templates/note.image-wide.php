<?php ?>

<?php snippet('header') ?>

<main class="notes">

	<article class="post wide">
		<!-- Cover image -->
		<?php if ($page->cover()->isNotEmpty()) : ?>
			<a href="<?= $page->link() ?>">
				<?= $page->cover()->kt() ?>
			</a>
		<?php endif ?>

		<section>
			<?= $page->text()->kt() ?>

			<time><?= $page->date()->toDate('d. F Y H:i') ?></time>

			<?php if ($page->tags()->isNotEmpty()) : ?>
				<?php snippet('note.tags') ?>
			<?php endif ?>
		</section>
	</article>

	<?php snippet('pagenav') ?>

<?php snippet('footer') ?>
