<?php ?>

<?php snippet('header') ?>

<main class="home">

	<article>
		<header>
			<h1><?= $page->title() ?></h1>
		</header>
		<section>
			<?= $page->text()->kt() ?>
		</section>
	</article>

	<!-- Recent posts -->

	<article>
		<header>
			<?= $page->notes()->kt() ?>
		</header>
		<section>
			<ul class="no-bullet">
				<li><a href="#">The one about bike lanes.</a> <span class="post-meta">01 Jan 2020</span></li>
				<li><a href="#">"The Last Black Man in San Francisco" </a> <span class="post-meta">16 Dec 2019</span></li>
				<li><a href="#">Not a zero sum game.</a> <span class="post-meta">01 Dec 2019</span></li>
				<li><a href="#" class="link-right">See all</a></li>
			</ul>
		</section>
	</article>

	<!-- Recent work -->
	<article>
		<header>
			<?= $page->work()->kt() ?>
		</header>
		<section>
			<ul class="no-bullet">
				<li><a href="#">Website for funderbeam</a></li>
				<li><a href="#">Illustration for Katana</a></li>
				<li><a href="#">UI design for FlowHow</a></li>
				<li><a href="#" class="link-right">See all</a></li>
			</ul>
		</section>
	</article>

</main>

<?php snippet('footer') ?>
