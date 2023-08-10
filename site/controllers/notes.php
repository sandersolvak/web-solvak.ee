<?php

return function ($page) {

  // get all articles
  $articles = $page->children()->listed()->flip();

	// fetch all tags
  $tags = $articles->pluck('tags', ',', true);

  // add the tag filter
  if($tag = param('tag')) {
    $articles = $articles->filterBy('tags', $tag, ',');
  }

  // add pagination
  $articles = $articles->paginate(24);

  // create a shortcut for pagination
  $pagination = $articles->pagination();

  // pass $articles and $pagination to the template
	return compact('articles', 'tags', 'tag', 'pagination');

  
};
