<?php ?>

</main>

<footer>
	<div class="nav-footer">
		<a href="<?= url() ?>" class="home" title="Homepage"><span class="hidden">Home</span>
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40">
				<path d="M27.1 14.2c5.3 0 8.5 5.3 8.9 10.3l-.7.1c-.2 0-.3-.1-.4-.2-1.5-4-5.9-4.7-9.6-3.3-2.2.8-6.3 3.3-8.5 4C9.9 27.7 4.5 22.4 4 15.5l.7-.1c.2 0 .3.1.4.2 1.5 4 5.9 4.7 9.6 3.3 3.8-1.4 8.1-4.8 12.4-4.7z"/>
			</svg>
		</a>
		<?php
		foreach ($site->children()->listed() as $item): ?>
		<?= $item->title()->link() ?>
		<?php endforeach ?>

	</div>
	<small><?= $site->copyright() ?> <span class="sun"></span></small>
</footer>

</body>
</html>
