<?php

Kirby::plugin('solvak/notes-archive', [
    'routes' => [
        [
            'pattern' => 'notes/archive/(:num)',
            'method'  => 'GET',
            'action'  => function (string $year) {
                $archive = page('notes/archive');

                if (!$archive) {
                    return null;
                }

                return $archive->render(['year' => (int)$year]);
            },
        ],
    ],
]);
