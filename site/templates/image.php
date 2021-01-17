<?php ?>

<?php snippet('header.photo') ?>

<main class="photo-single">

	<div class="image">
		<img src="<?= $page->parent()->images()->findBy('name', $page->slug())->url() ?>" alt="" loading="lazy">
	</div>

	<div class="controls">
		<a href="<?= $page->parent()->url() ?>" aria-label="Close">&times;</a>
		<?php if ($page->hasPrevListed()): ?>
			<a href="<?= $page->prevListed()->url() ?>" aria-label="Previous">←</a>
			<?php else: ?>
			<span>←</span>
		<?php endif ?>

		<?php if ($page->hasNextListed()): ?>
			<a href="<?= $page->nextListed()->url() ?>" aria-label="Next">→</a>
			<?php else: ?>
			<span>→</span>
		<?php endif ?>
	</div>


</main>

</body>
</html>
