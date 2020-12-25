<?php ?>

<?php snippet('header') ?>

<main class="home">

	<article>
		<header>
			<h1><?= $page->title() ?></h1>
		</header>
		<section>
			<?= $page->text()->kt() ?>
		</section>
	</article>

	<!-- Recent posts -->

	<article>
		<header>
			<?= $page->notes()->kt() ?>
		</header>
		<section>

			<ul class="no-bullet">
				<?php $featured = page('notes')->children()->listed()->flip()->limit(3); ?>
				<?php foreach ($featured as $post): ?>
					<li><a href="<?= $post->url() ?>"><?= $post->alt_title()->or($post->title()) ?></a> <span class="post-meta m-left--xs"><?= $post->date()->toDate('d. F Y H:i') ?></span></li>
				<?php endforeach ?>
				<li><a href="<?= url('notes') ?>" class="link-right">See all</a></li>
			</ul>

		</section>
	</article>

	<!-- Recent work -->
	<article>
		<header>
			<?= $page->work()->kt() ?>
		</header>
		<section>
			<ul class="no-bullet">
				<?php $featured = page('work')->children()->listed()->flip()->limit(3); ?>
				<?php foreach ($featured as $project): ?>
					<li><a href="<?= $project->url() ?>"><?= $project->title() ?></a></li>
				<?php endforeach ?>
				<li><a href="<?= url('work') ?>" class="link-right">See all</a></li>
			</ul>
		</section>
	</article>

<?php snippet('footer') ?>
