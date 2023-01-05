#! /usr/bin/php
<?php
  function ft_split($string) {
    $array = explode(' ', $string);
    sort($array);
    $i = 0;
    foreach ($array as $elem) {
      if ($elem == '')
        $i++;
    }
    return (array_splice($array, $i));
  }
  print_r(ft_split("test ceci est       A   un test"));
?>