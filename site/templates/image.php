<?php ?>

<?php snippet('header.photo') ?>

<main class="photo-single">

	<div class="image">
		<img src="<?= $page->parent()->images()->findBy('name', $page->slug())->url() ?>" alt="" loading="lazy">
	</div>

	<div class="controls">
		<a href="<?= $page->parent()->url() ?>" aria-label="Close">&times;</a>
		<?php if ($page->hasPrev()): ?>
		<a href="<?= $page->prev()->url() ?>" aria-label="Previous">←</a>
		<?php else: ?>
		<span>←</span>
		<?php endif ?>
		
		<?php if ($page->hasNext()): ?>
		<a href="<?= $page->next()->url() ?>" aria-label="Next">→</a>
		<?php else: ?>
		<span>→</span>
		<?php endif ?>
	</div>

</main>

</body>
</html>
