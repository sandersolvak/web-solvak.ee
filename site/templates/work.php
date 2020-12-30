<?php ?>

<?php snippet('header') ?>

<main class="work">

	<header>
		<h1><?= $page->title() ?></h1>
		<?= $page->text()->kt() ?>
	</header>

	<section class="cover-grid two-col" <?= attr(['data-even' => $page->children()->listed()->isEven()], ' ') ?>>
		<?php foreach ($page->children()->listed()->flip() as $project): ?>
			<div>
				<a href="<?= $project->url() ?>">
					<?= $project->cover()->kt() ?>
					<p><?= $project->title()->html() ?></p>
					<p class="post-meta"><?= $project->tags() ?></p>
				</a>
			</div>
		<?php endforeach ?>

	</section>

	<section>
		<?= $page->outro()->kt() ?>
	</section>

<?php snippet('footer') ?>
