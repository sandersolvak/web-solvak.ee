<?php ?>

<?php snippet('header') ?>

<main class="about">

	<article>
		<header>
			<h1 class="sticky"><?= $page->title() ?></h1>
		</header>

		<section>
			<?= $page->intro()->kt() ?>

			<?= $page->connect()->kt() ?>

			<?= $page->colophon()->kt() ?>

			<h2>Blogroll</h2>
			<p><?= $page->blogroll()->kt() ?></p>
			<div class="tre-col">
				<?php $people = $page->people()->yaml() ?>
				<?php foreach ($page->people()->toStructure() as $people): ?>
					<p>
						<a href="<?= $people->website() ?>" target="_blank"><?= $people->name() ?></a><br>
						<span class="post-meta"><?= $people->does() ?></span>
					</p>
				<?php endforeach ?>

			</div>
		</section>
	</article>

<?php snippet('footer') ?>
