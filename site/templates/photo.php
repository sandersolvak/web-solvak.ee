<?php ?>

<?php snippet('header') ?>

<main class="photo">

	<div <?= attr(['data-even' => $page->children()->listed()->isEven()], ' ') ?>>
		<?php foreach ($page->children()->listed()->flip() as $album): ?>
			<article>
				<a href="<?= $album->url() ?>">
					<h2><?= $album->title()->html() ?></h2>
					<p><?= $album->intro() ?></p>
				</a>
				<div class="thumbs">
					<?php foreach($album->images() as $picture): ?>
				    <a href="<?= $picture->link()->or($picture->url()) ?>">
				      <?= $picture->resize(null, 160) ?>
				    </a>
				  <?php endforeach ?>
				</div>
			</article>
		<?php endforeach ?>

	</div>

<?php snippet('footer') ?>
