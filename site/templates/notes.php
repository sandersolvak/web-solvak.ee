<?php ?>

<?php snippet('header') ?>

<?php
$articles   = $page->children()->listed()->paginate(10);
$pagination = $articles->pagination();
?>

<main class="notes">

	<?php foreach($articles as $article): ?>
	<?php endforeach ?>

	<?php if ($pagination->hasPages()): ?>
		<nav class="paginator">
			<?php if ($pagination->hasPrevPage()): ?>
				<a href="<?= $pagination->prevPageUrl() ?>" class="link-left">newer posts</a>
			<?php else: ?>
				<span>newer posts</span>
			<?php endif ?>
			<span>/</span>
			<?php if ($pagination->hasNextPage()): ?>
				<a href="<?= $pagination->nextPageUrl() ?>" class="link-right">older posts</a>
			<?php else: ?>
				<span>older posts</span>
			<?php endif ?>
		</nav>
	<?php endif ?>

</main>

<?php snippet('footer') ?>
