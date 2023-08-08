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

  // RSS plugin stuff
  $options = [
    'title'       => 'Noted',
    'description' => 'Interesting and/or cool stuff I have come across from art, design, technology, photography, movies watched and liked and, occasionally, my thoughts.',
    'link'        => 'notes'
];
echo page('notes')->children()->listed()->flip()->limit(10)->feed($options);

};
