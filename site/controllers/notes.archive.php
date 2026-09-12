<?php

return function ($page, $site, $kirby, $year = null) {

  $notes = $site->find('notes')->children()->listed()->sortBy('date', 'desc');

  // all years that have notes, newest first
  $years = [];
  foreach ($notes as $note) {
    $years[(int)$note->date()->toDate('Y')] = true;
  }
  $years = array_keys($years);
  rsort($years);

  // default to the most recent year if none was requested (or an invalid one)
  $year = in_array((int)$year, $years, true) ? (int)$year : ($years[0] ?? (int)date('Y'));

  // this year's notes, grouped by month
  $months = [];
  foreach ($notes as $note) {
    if ((int)$note->date()->toDate('Y') !== $year) {
      continue;
    }

    $key = $note->date()->toDate('Y-m');

    if (isset($months[$key]) === false) {
      $months[$key] = [
        'label' => $note->date()->toDate('F Y'),
        'notes' => [],
      ];
    }

    $months[$key]['notes'][] = $note;
  }

  return compact('years', 'year', 'months');
};
