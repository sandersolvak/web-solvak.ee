<?php ?>

<?php snippet('header') ?>

<main class="notes">

	<article class="post wide">
		<!-- Cover image -->
		<?php if ($page->cover()->isNotEmpty()) : ?>
			<a href="./note-a/note-a.html" class="cover">
				<img src="../notes/note-a/screenshot-of-La_Grande_Bellezza_-_Paulo_Sorrentino_-_2013.jpg" alt="Screenshot of the movie 'La Grande Bellezza' by Paulo Sorrentino"  />
			</a>
		<?php endif ?>

		<section class="col-1">
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
