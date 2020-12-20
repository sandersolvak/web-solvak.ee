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

<main class="about">

	<article>
		<header>
			<h1><?= $page->title() ?></h1>
		</header>

			<?= $page->text()->kt() ?>

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

	</article>

</main>

<?php snippet('footer') ?>
