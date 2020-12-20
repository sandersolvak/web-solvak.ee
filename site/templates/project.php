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
			<?= $page->intro() ?>
		</div>

		<figure class="wide">
			<img src="logos-JointVentureProjects.jpg" alt="" loading=lazy>
			<figcaption>Joint Venture Projects</figcaption>
		</figure>

		<section>
			<?= $page->text()->kt() ?>
		</section>
	</article>
</main>

<?php snippet('footer') ?>


			<img class="wide" src="playtech-002.jpg" alt="" loading=lazy>

			<div class="col-1">
				<p>Designing the tool's UI posed some interesting challenges such as how does one visualise certain agile practices such as sprint cadence and velocity characteristics and the patterns that emerge.</p>
			</div>

			<img class="wide" src="logos-AlsoKnowsIT.jpg" alt="" loading=lazy>
			<figure class="wide">
				<img src="logos-JointVentureProjects.jpg" alt="" loading=lazy>
				<figcaption>Joint Venture Projects</figcaption>
			</figure>
			<img class="wide" src="logos-JuegosDeElSalvador.jpg" alt="" loading=lazy>
			<img class="wide" src="logos-MagnetWorks.jpg" alt="" loading=lazy>
			<img class="wide" src="logos-MayaLotto.jpg" alt="" loading=lazy>
			<img class="wide" src="logos-MichetConsulting.jpg" alt="" loading=lazy>
			<img class="wide" src="logos-Naidud.jpg" alt="" loading=lazy>
			<img class="wide" src="logos-PlaytechMentoringProgramme.jpg" alt="" loading=lazy>
			<img class="wide" src="logos-visand.jpg" alt="" loading=lazy>

			<figure class="wide">
				<video  preload="none" poster="statlab-web-poster.jpg" autoplay playsinline loop muted>
					<source src="statlab-web.webm" type="video/webm" >
					<source src="statlab-web.mp4" type="video/mp4" >
				</video>
			</figure>

			<div class="col-2">
				<p>We made our best effort to practice what we preach and work as an agile team, effectively using the tool on ourselves while building it.</p>
			</div>

		</article>
		<a href="../work.html" class="link-left">See all projects</a>
