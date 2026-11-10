<?php ?>

<?php snippet('header') ?>

<main class="notes">

	<article class="post tall">
		<?php if ($page->hasCover()) : ?>
			<a href="<?= $page->link() ?>" class="cover">
				<?= $page->coverHtml() ?>
			</a>
		<?php endif ?>

		<section class="post-body">
			<?= $page->text()->kt() ?>

			<time><?= $page->date()->toDate('d. F Y H:i') ?></time>

			<?php if ($page->tags()->isNotEmpty()) : ?>
				<?php snippet('note.tags') ?>
			<?php endif ?>
		</section>
	</article>

	<?php snippet('pagenav') ?>

<?php snippet('footer') ?>
