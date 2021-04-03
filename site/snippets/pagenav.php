<?php

// Previous and next navigation for individual posts/projects

 ?>

 <div class="pagenav">
	 <?php if ($page->hasPrevListed()): ?>
		 <a href="<?= $page->prevListed()->url() ?>" class="link-left" title="Previous: <?= $page->prevListed()->title() ?>"><?= $page->prevListed()->title()->short(40) ?></a>
		 <?php else: ?>
		 <span>← Older</span>
	 <?php endif ?>
	 <?php if ($page->hasNextListed()): ?>
		 <a href="<?= $page->nextListed()->url() ?>" class="link-right" title="Next: <?= $page->nextListed()->title() ?>"><?= $page->nextListed()->title()->short(40) ?></a>
	 <?php else: ?><span>Newer →</span>
	 <?php endif ?>
 </div>
