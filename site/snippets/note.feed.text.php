
<?php if ($article->cover()->isNotEmpty()) : ?>
		<?= $article->cover()->kt() ?>
<?php endif ?>

<header class="sticky">
	<?php if ($article->title()->isNotEmpty()) : ?>
		<h2 class="h1"><a href="<?= $article->url() ?>"><?= $article->title() ?></a></h2>
	<?php endif ?>
	<time><?= $article->date()->toDate('d. F Y H:i') ?></time>

<?php if ($article->tags()->isNotEmpty()) : ?>
	<p class="post-meta">Filed under:
	<?php foreach($article->tags()->split() as $tag): ?>
		<a href="<?= url('notes', ['params' => ['tag' => $tag]]) ?>">
			<?= $tag ?>
		</a>
	<?php endforeach ?>
<?php endif ?>

</p>

</header>

<section class="col-2">
	<p class="lede">
		<?= $article->lede() ?>
	</p>
	<p>
		<?= $article->text()->kt() ?>
	</p>
</section>
