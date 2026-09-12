<?php ?>

<ul class="archive-years">
	<?php foreach ($years as $y): ?>
		<li>
			<a href="<?= $page->url() . '/' . $y ?>"<?php e($y === $year, ' class="is-current"') ?>><?= $y ?></a>
		</li>
	<?php endforeach ?>
</ul>
