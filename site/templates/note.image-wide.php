<?php ?>

<?php snippet('header') ?>

<main class="notes">

	<article class="post wide">
		<!-- Cover image -->
		<?php if ($page->cover()->isNotEmpty()) : ?>
			<a href="<?= $page->link() ?>" class="cover">
				<?= $page->cover()->kt() ?>
			</a>
		<?php endif ?>

		<section class="col-1">
			<p><a href="<?= $page->link() ?>"><?= $page->title()->kt() ?></a></p>

			<time><?= $page->date()->toDate('d F Y') ?></time>

			<?php if ($page->tags()->isNotEmpty()) : ?>
				<?php snippet('note.tags') ?>
			<?php endif ?>
		</section>
	</article>

	<?php snippet('pagenav') ?>

</main>

<?php snippet('footer') ?>
