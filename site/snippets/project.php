<div>
	<a href="<?= $project->url() ?>">
		<img src=".<?= $project->cover() ?>" alt=""/>
		<p><?= $project->title()->html() ?></p>
		<p class="post-meta"><?= $project->tags() ?></p>
	</a>
</div>
