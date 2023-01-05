#! /usr/bin/php
<?php
function epur_str($string){
  return(preg_replace('/\s+/', ' ', trim($string)));
}

if ($argc == 2) {
  $argv[1] = epur_str($argv[1]);
  $len = strlen($argv[1]);
  $i = 0;
  while ($i < $len && $argv[1][$i] != ' ') {
    $i++;
  }
  $rotated = $argv[1][$i] == ' '
              ? substr($argv[1], $i + 1) . " " . substr($argv[1], 0, $i)
              : substr($argv[1], $i + 1) . substr($argv[1], 0, $i);
  print($rotated . "\n");
}
?>