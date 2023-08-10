
<?php if ($article->cover()->isNotEmpty()) : ?>
	<a href="<?= $article->url() ?>" class="cover">
		<?= $article->cover()->kt() ?>
	</a>
<?php endif ?>

<section class="post-body">
	<?= $article->text()->kt() ?>

	<time><?= $article->date()->toDate('d. F Y H:i') ?></time>

	<?php if ($article->tags()->isNotEmpty()) : ?>
		<p class="post-meta">Filed under:
		<?php foreach($article->tags()->split() as $tag): ?>
			<a href="<?= url('notes', ['params' => ['tag' => $tag]]) ?>">
				<?= $tag ?>
			</a>
		<?php endforeach ?>
	<?php endif ?>

</section>
