<?php
$options = [
    'title'       => 'Sander Solvak: notes',
    'description' => 'Latest notes',
    'link'        => 'notes'
];
echo page('notes')->children()->listed()->flip()->limit(10)->feed($options);
