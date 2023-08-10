<?php ?>

<?php snippet('header') ?>

<main class="play">

	<header>
		<h1><?= $page->title() ?></h1>
		<?= $page->text()->kt() ?>
	</header>

	<div class="thumbs">
		<?php foreach ($articles as $article): ?>
				<article>
					<?php foreach($article->images() as $picture): ?>
				    <a href="<?= $article->url() ?>">
				      <?= $picture->resize(null, 600) ?>
				    </a>
				  <?php endforeach ?>
				</article>
		<?php endforeach ?>
	</div>

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

<?php snippet('footer') ?>
