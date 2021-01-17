<?php

 return function ($page) {
// Get the album images
  $shotlist = $page->parent()->children()->sortBy('num', 'asc');

  // Image Index
  $shotidx = $shotlist->indexOf($page);

  // Next & Previous Navs
  $next = $page != $shotlist->last()  ? $shotlist->nth($shotidx + 1) : false;
  $prev = $page != $shotlist->first() ? $shotlist->nth($shotidx - 1) : false;

 };
