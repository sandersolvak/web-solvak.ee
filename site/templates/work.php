<?php ?>

<?php snippet('header') ?>

<main class="work">

		<header>
			<h1><?= $page->title() ?></h1>
		</header>

		<section class="cover-grid two-col">

			<?php foreach($page->children() as $project): ?>
				<?php snippet('project', ['project' => project]); ?>
			<?php endforeach ?>

		</section>

		<section>
			<?= $page->text()->kt() ?>
		</section>

</main>

<?php snippet('footer') ?>
