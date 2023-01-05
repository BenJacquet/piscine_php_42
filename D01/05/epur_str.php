#! /usr/bin/php
<?php
  if ($argc == 2) {
    $string = preg_replace('/\s+/', ' ', trim($argv[1]));
    print($string . "\n");
  }
?>