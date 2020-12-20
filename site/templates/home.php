<?php
/**
 * Templates render the content of your pages.
 * They contain the markup together with some control structures like loops or if-statements.
 * The `$page` variable always refers to the currently active page.
 * To fetch the content from each field we call the field name as a method on the `$page` object, e.g. `$page->title()`.
 * This home template renders content from others pages, the children of the `photography` page to display a nice gallery grid.
 * Snippets like the header and footer contain markup used in multiple templates. They also help to keep templates clean.
 * More about templates: https://getkirby.com/docs/guide/templates/basics
 */
?>

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
			<h2>Recent notes</h2>
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
			<h2>Recent work</h2>
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
