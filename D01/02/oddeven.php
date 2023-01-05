#! /usr/bin/php
<?php
while (1) {
  print('Entrez un nombre: ');
  $input = trim(fgets(STDIN));
  if (feof(STDIN))
    exit();
  if (is_numeric($input)) {
    if ($input % 2 === 0) {
      print("Le chiffre " . $input . " est Pair\n");
    }
    else
      print("Le chiffre " . $input . " est Impair\n");
  }
  else
    print("'" . $input . "' n'est pas un chiffre\n");
}
?>