<?php ?>

<?php snippet('header') ?>

<main class="notes archive">

	<header>
		<h1><?= $page->title() ?></h1>
	</header>

	<?php snippet('archive.years', ['years' => $years, 'year' => $year]) ?>

	<?php if (empty($months)): ?>

		<p>No notes yet.</p>

	<?php else: ?>

		<?php foreach ($months as $month): ?>

			<section class="archive-month">
				<h2><?= $month['label'] ?></h2>
				<ul class="archive-notes">
					<?php foreach ($month['notes'] as $note): ?>
						<li>
							<a href="<?= $note->url() ?>"><?= $note->title() ?></a>
							<time><?= $note->date()->toDate('d. M Y \a\t H:i') ?></time>
						</li>
					<?php endforeach ?>
				</ul>
			</section>

		<?php endforeach ?>

	<?php endif ?>

	<?php snippet('archive.years', ['years' => $years, 'year' => $year]) ?>

</main>

<?php snippet('footer') ?>
