<?php
//tags snippet for individual note pages
?>

<p class="post-meta">Filed under:
	<?php foreach ($page->tags()->split() as $tag): ?>
		<a href="<?= url('notes', ['params' => ['tag' => $tag]]) ?>">
			<?= $tag ?>
		</a>
	<?php endforeach ?>
</p>
