<?php ?>

<?php snippet('header') ?>

<main class="notes">

	<article class="post tall">
		<?php if ($page->cover()->isNotEmpty()) : ?>
			<a href="<?= $page->link() ?>" class="cover">
				<?= $page->cover()->kt() ?>
			</a>
		<?php endif ?>

		<section class="post-body">
			<p><a href="<?= $page->link() ?>"><?= $page->title()->kt() ?></a></p>

			<time><?= $page->date()->toDate('d F Y') ?></time>

			<?php if ($page->tags()->isNotEmpty()) : ?>
				<?php snippet('note.tags') ?>
			<?php endif ?>			
		</section>
	</article>

	<div class="pagenav">
		<a href="<?= url('notes') ?>">All posts</a>
		<?php if ($page->hasPrevListed()): ?>
			<a href="<?= $page->prevListed()->url() ?>" class="link-left">previous</a>
			<?php else: ?>
			<span>← previous</span>
		<?php endif ?>
		<?php if ($page->hasNextListed()): ?>
			<a href="<?= $page->nextListed()->url() ?>" class="link-right">next</a>
			<?php else: ?><span>next →</span>
		<?php endif ?>
	</div>

</main>

<?php snippet('footer') ?>
