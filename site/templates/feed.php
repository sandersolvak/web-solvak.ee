<?php

$options = [
  'title'       => 'Noted',
  'description' => 'Interesting and/or cool stuff I have come across from art, design, technology, photography, movies watched and liked and, occasionally, my thoughts.',
  'link'        => 'notes'
];
echo page('notes')->children()->listed()->flip()->limit(10)->feed($options);
