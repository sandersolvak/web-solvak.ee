<?php ?>

<?php snippet('header') ?>

<main class="notes">

	<article class="post">
		<!-- Cover image -->
		<?php if ($page->cover()->isNotEmpty()) : ?>
			<a href="<?= $page->link() ?>" class="cover">
				<img src="../notes/note-a/buster.png" alt="">
			</a>
		<?php endif ?>

		<header class="sticky">
			<h2 class="h1"><a href="#"><?= $page->title() ?></a></h2>

			<time><?= $page->date()->toDate('d F Y') ?></time>

			<?php if ($page->tags()->isNotEmpty()) : ?>
				<p class="post-meta">Filed under:
				<a href=""><?= $page->tags() ?></a></p>
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

</main>

<?php snippet('footer') ?>
