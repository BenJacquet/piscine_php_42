#! /usr/bin/php
<?php
function aff_params($array, $size){
  for ($i = 0; $i < $size; $i++) {
      print($array[$i] . "\n");
  }
}

function ft_split($string) {
  $array = explode(' ', $string);
  $i = 0;
  sort($array);
  foreach ($array as $elem) {
    if ($elem == '')
      $i++;
  }
  return ($i == 0 ? $array : array_splice($array, $i));
}

function epur_str($string){
    return(preg_replace('/\s+/', ' ', trim($string)));
}

function ssap($array, $size){
  $split_array = [];
  foreach ($array as $elem) {
    $split_array = array_merge($split_array, ft_split($elem));
  }
  sort($split_array);
  aff_params($split_array, sizeof($split_array));
}

if ($argc > 1)
  ssap(array_splice($argv, 1), $argc - 1);
?>