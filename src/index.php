<?php declare(strict_types = 1);

require_once './classes/View.php';

$view = new View(
  [
    'title' => 'Index111',
    'content' => 'LoremLorem111'
  ],
  '/src/styles/test-contact.css'
);

include('./templates/two_row.php');
?>