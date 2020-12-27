<?php
//tags snippet for individual Play pages
?>

<p class="post-meta">Filed under:
	<?php foreach ($page->tags()->split() as $tag): ?>
		<a href="<?= url('play', ['params' => ['tag' => $tag]]) ?>">
			<?= $tag ?>
		</a>
	<?php endforeach ?>
</p>
