<?php

require __DIR__ . "/utils/manageSystem.php";

showOptions();

$option = fgets(STDIN);
$animals = ['Biu', 'Garfield', 'Bidu'];

switch ($option) {
  case 1:
    echo "Digite o nome do animal: ";
    $animalName = trim(fgets(STDIN));
    $animals[] = $animalName;
    break;
  case 2:
    foreach ($animals as $key => $animal) {
      echo $key + 1 . " - $animal\n";
    }
    break;
  case 3:
    echo "Digite o nome do animal: ";
    $animalName = trim(fgets(STDIN));
    $index = array_search($animalName, $animals);

    if ($index !== false) {
      unset($animals[$index]);
    }

    foreach ($animals as $key => $animal) {
      echo $key + 1 . " - $animal\n";
    }
    break;
  case 4:
    echo "Digite o nome do animal: ";
    $animalName = trim(fgets(STDIN));

    $index = array_search($animalName, $animals);

    if ($index) {
      fwrite(STDOUT, "O animal $animalName foi encontrado!");
    } else {
      fwrite(STDOUT, "O animal $animalName não foi encontrado!");
    }
    break;
  case 5:
    fwrite(STDOUT, "Tchau...");
    break;
  default:
    echo "Opção inválida!";
}
