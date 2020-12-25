<?php ?>

<?php snippet('header') ?>

<main class="photo">

	<div <?= attr(['data-even' => $page->children()->listed()->isEven()], ' ') ?>>
		<?php foreach ($page->children()->listed()->flip() as $album): ?>
			<article>
				<a href="<?= $album->url() ?>">
					<h2><?= $album->title()->html() ?></h2>
				</a>
				<p class="post-meta"><?= $album->intro()->kt() ?></p>
				<div class="thumbs">
					<?php foreach($page->children()->images() as $image): ?>
				    <a href="<?= $image->url() ?>">
				      <?= $image->resize(null, 160) ?>
				    </a>
				  <?php endforeach ?>
				</div>
			</article>
		<?php endforeach ?>

	</div>


<?php snippet('footer') ?>
