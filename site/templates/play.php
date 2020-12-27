<?php ?>

<?php snippet('header') ?>

<main class="play">

	<header>
		<h1><?= $page->title() ?></h1>
		<?= $page->text()->kt() ?>
	</header>

	<?php foreach ($articles as $article): ?>

			<article class="post">
				<a href="<?php echo url('play', ['params' => ['article' => $article]]) ?>" class="cover">
					<?= $article->cover()->kt() ?>
				</a>

				<header class="sticky">
					<h2><a href="<?php echo url('play', ['params' => ['article' => $article]]) ?>"><?= $article->headline() ?></a></h2>

					<time><?= $article->date()->toDate('d F Y') ?></time>

					<p class="post-meta">Filed under:
						<?php foreach ($article->tags()->split() as $tag): ?>
							<a href="<?= url('play', ['params' => ['tag' => $tag]]) ?>">
								<?= $tag ?>
							</a>
						<?php endforeach ?>
					</p>


				</header>

				<section class="col-2">
					<p>
						<?= $article->text()->kt() ?>
					</p>
				</section>
			</article>

	<?php endforeach ?>

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
