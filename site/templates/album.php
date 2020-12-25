<?php ?>

<?php snippet('header') ?>

<main class="photo">

	<header>
		<h1><?= $page->title() ?></h1>
		<p class="post-meta"><?= $page->date() ?></p>
		<p><?= $page->intro() ?></p>
	</header>

	<article>
		<div class="thumbs">
			<?php foreach($page->images() as $image): ?>
				<a href="<?= $image->url() ?>">
					<?= $image->resize(null, 160) ?>
				</a>
			<?php endforeach ?>
		</div>
	</article>

	<?php snippet('pagenav') ?>


<?php snippet('footer') ?>
