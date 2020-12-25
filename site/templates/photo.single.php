<?php ?>

<?php snippet('header.photo') ?>

<main class="photo-single">

	<div class="image">
		<img src="<?= $image->url() ?>" alt="" loading=lazy>
	</div>

	<div class="controls">
		<a href="<?= $album->url() ?>" aria-label="Close">&times;</a>
		<?php if ($page->hasPrevListed()): ?>
		<a href="<?= $page->prevListed()->url() ?>" aria-label="Previous">←</a>
		<?php else: ?>
		<span>←</span>
		<?php if ($page->hasNextListed()): ?>
		<a href="<?= $page->nextListed()->url() ?>" aria-label="Next">→</a>
		<?php else: ?>
		<span>→</span>
	<?php endif ?>
	</div>

</main>

</body>
</html>
