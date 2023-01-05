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
  natcasesort($array);
  foreach ($array as $elem) {
    if ($elem == '')
      $i++;
  }
  return ($i == 0 ? $array : array_splice($array, $i));
}

function epur_str($string){
    return(preg_replace('/\s+/', ' ', trim($string)));
}

function is_alpha($character){
  if (($character >= 'a' && $character <= 'z') || ($character >= 'A' && $character <= 'Z'))
    return (true);
  return (false);
}

function is_num($character){
  if (ord($character) >= 48 && ord($character) <= 57)
    return (true);
  return (false);
}

function ssap2($array){
  $split_array = [];
  foreach ($array as $elem) {
    $split_array = array_merge($split_array, ft_split($elem));
  }
  $alpha = [];
  $num = [];
  $other = [];
  for ($i = 0; $i < sizeof($split_array); $i++) {
    if (is_alpha($split_array[$i][0]) === true) {
      array_push($alpha, $split_array[$i]);
    }
    else if (is_num($split_array[$i][0]) === true) {
      array_push($num, $split_array[$i]);
    }
    else
      array_push($other, $split_array[$i]);
  }
  natcasesort($alpha);
  $new = array_merge($alpha, $num, $other);
  aff_params($new, sizeof($new));
}

if ($argc > 1)
  ssap2(array_splice($argv, 1));
?>