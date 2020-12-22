<?php ?>

<?php snippet('header') ?>

<main class="notes">

	<article class="post">
		<!-- Cover image -->
		<?php if ($page->cover()->isNotEmpty()) : ?>
			<a href="<?= $page->link() ?>" class="cover">
				<?= $page->cover()->kt() ?>
			</a>
		<?php endif ?>

		<header class="sticky">
			<h2 class="h1"><a href="<?= $page->link() ?>"><?= $page->title() ?></a></h2>

			<time><?= $page->date()->toDate('d F Y') ?></time>

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
