<?php ?>

<?php snippet('header') ?>

<main class="photo">

	<header>
		<h1><?= $page->title() ?></h1>
		<p class="post-meta"><?= $page->date() ?></p>
		<p><?= $page->intro() ?></p>
	</header>

	<article>
		<div class="thumbs"<?= attr(['data-even' => $gallery->isEven(), 'data-count' => $gallery->count()], ' ') ?>>
			<?php foreach ($gallery as $picture): ?>
				<a href="<?= $picture->url() ?>">
					<?php echo $picture->parent()->images()->findBy('name', $picture->slug()) ?>
				</a>
			<?php endforeach ?>
		</div>
	</article>

	<?php snippet('pagenav') ?>

<?php snippet('footer') ?>
