<?php ?>

<?php snippet('header') ?>

<main>
	<article class="post project">
		<img class="cover" src="<?= $page->cover() ?>" alt="" loading=lazy>

		<header>
			<h1><?= $page->title() ?></h1>
			<time><?= $page->date() ?></time>
			<?php if ($page->tags()->isNotEmpty()) : ?>
				<p class="post-meta">Filed under:
				<a href=""><?= $page->tags() ?></a></p>
			<?php endif ?>
		</header>

		<div class="col-2">
			<?= $page->intro()->kt() ?>
		</div>

		<section class="wide">
			<?= $page->text()->kt() ?>
		</section>

		<!-- text in left column
		<div class="col-1">
			<p>Designing the tool's UI posed some interesting challenges such as how does one visualise certain agile practices such as sprint cadence and velocity characteristics and the patterns that emerge.</p>
		</div>-->

		<!-- text in right column
		<div class="col-2">
			<p>We made our best effort to practice what we preach and work as an agile team, effectively using the tool on ourselves while building it.</p>
		</div>-->

		<!-- regular image
		<img class="wide" src="playtech-002.jpg" alt="" loading=lazy>
-->
		<!-- image w. caption
		<figure class="wide">
			<img src="logos-JointVentureProjects.jpg" alt="" loading=lazy>
			<figcaption>Joint Venture Projects</figcaption>
		</figure>
-->
		<!-- video
		<figure class="wide">
			<video  preload="none" poster="statlab-web-poster.jpg" autoplay playsinline loop muted>
				<source src="statlab-web.webm" type="video/webm" >
				<source src="statlab-web.mp4" type="video/mp4" >
			</video>
		</figure>
-->

	</article>

	<div class="pagenav">
		<a href="<?= url('work') ?>">All projects</a>
		<?php if ($page->hasPrevListed()): ?>
			<a href="<?= $page->prevListed()->url() ?>" class="link-left">previous</a>
			<?php else: ?>
			<span class="link-left">previous</span>
		<?php endif ?>
		<?php if ($page->hasNextListed()): ?>
			<a href="<?= $page->nextListed()->url() ?>" class="link-right">next</a>
		<?php else: ?><span class="link-right">next</span>
		<?php endif ?>
	</div>

</main>

<?php snippet('footer') ?>
