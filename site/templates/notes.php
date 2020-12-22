<?php ?>

<?php snippet('header') ?>

<main class="notes">
	<?php foreach ($articles as $article): ?>
		<?php if ($article->template() == 'note.text'): ?>

			<article class="post">
				<?php snippet('note.feed.text', ['article' => $article]); ?>
			</article>

			<?php elseif ($article->template() == 'note.image-wide'): ?>

			<article class="post wide">
				<?php snippet('note.feed.image-wide', ['article' => $article]); ?>
			</article>

			<?php elseif ($article->template() == 'note.image-tall'): ?>

			<article class="post tall">
				<?php snippet('note.feed.image-tall', ['article' => $article]); ?>
			</article>

		<?php endif ?>
	<?php endforeach ?>

	<?php if ($articles->pagination()->hasPages()): ?>
		<div class="pagenav">
			<?php if ($pagination->hasPrevPage()): ?>
				<a href="<?= $pagination->prevPageUrl() ?>" class="link-left">newer posts</a>
			<?php else: ?>
				<span class="link-left">newer posts</span>
			<?php endif ?>

			<?php if ($pagination->hasNextPage()): ?>
				<a href="<?= $pagination->nextPageUrl() ?>" class="link-right">older posts</a>
			<?php else: ?>
				<span class="link-right">older posts</span>
			<?php endif ?>
		</div>
	<?php endif ?>

</main>

<?php snippet('footer') ?>
