#! /usr/bin/php
<?php
for ($i = 1; $i < $argc; $i++) {
    if ($i > 1)
      print($argv[$i] . "\n");
  }
?>