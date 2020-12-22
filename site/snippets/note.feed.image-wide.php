
<?php if ($article->cover()->isNotEmpty()) : ?>
	<a href="<?php echo url('notes', ['params' => ['article' => $article]]) ?>" class="cover">
		<?= $article->cover()->kt() ?>
	</a>
<?php endif ?>

<section class="col-1">
	<p><a href="<?php echo url('notes', ['params' => ['article' => $article]]) ?>"><?= $article->title()->kt() ?></a></p>

	<time><?= $article->date()->toDate('d F Y') ?></time>

	<?php if ($article->tags()->isNotEmpty()) : ?>
		<p class="post-meta">Filed under:
		<?php foreach($article->tags()->split() as $tag): ?>
			<a href="<?= url('notes', ['params' => ['tag' => $tag]]) ?>">
				<?= $tag ?>
			</a>
		<?php endforeach ?>
	<?php endif ?>

</section>
