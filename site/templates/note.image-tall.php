<?php ?>

<?php snippet('header') ?>

<main class="notes">

	<article class="post tall">
		<?php if ($page->cover()->isNotEmpty()) : ?>
			<a href="./note-a/note-a.html" class="cover">
				<img src="../notes/note-a/greg-miller-fairs.jpg" alt="Greg Miller" />
			</a>
		<?php endif ?>

		<section class="post-body">
			<p><a href="#"><?= $page->title()->kt() ?></a></p>

			<time><?= $page->date()->toDate('d F Y') ?></time>

			<?php if ($page->tags()->isNotEmpty()) : ?>
				<p class="post-meta">Filed under:
				<a href=""><?= $page->tags() ?></a></p>
			<?php endif ?>
		</section>
	</article>

</main>

<?php snippet('footer') ?>
