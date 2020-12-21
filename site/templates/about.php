<?php ?>

<?php snippet('header') ?>

<main class="about">

	<article>
		<header>
			<h1 class="sticky"><?= $page->title() ?></h1>
		</header>

		<section>
			<?= $page->intro()->kt() ?>

			<?= $page->connect()->kt() ?>

			<?= $page->colophon()->kt() ?>

			<h2>Blogroll</h2>
			<p><?= $page->blogroll()->kt() ?></p>
			<div class="tre-col">
				<p><a href="#">First name</a><br>
					<span class="post-meta">Designer</span>
				</p>
				<p><a href="#">First name</a><br>
					<span class="post-meta">Designer</span>
				</p>
				<p><a href="#">First name</a><br>
					<span class="post-meta">Designer</span>
				</p>
			</div>
		</section>
	</article>

</main>

<?php snippet('footer') ?>
