<?php
//tags snippet for notes feed
?>

<?php if ($page->tags()->isNotEmpty()) : ?>
	<p class="post-meta">Filed under:
	<?php foreach($article->tags()->split() as $tag): ?>
		<a href="<?= url('notes', ['params' => ['tag' => $tag]]) ?>">
			<?= $tag ?>
		</a>
	<?php endforeach ?>
<?php endif ?>
