<?php

require __DIR__ . "/utils/manageSystem.php";
require __DIR__ . "/utils/manageAnimals.php";

showOptions();

$option = userTyping();

switch ($option) {
  case 1:
    addNewAnimal();
    break;
  case 2:
    foreach ($animals as $key => $animal) {
      echo $key + 1 . " - $animal\n";
    }
    break;
  case 3:
    echo "Digite o nome do animal: ";
    $animalName = userTyping();
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
    $animalName = userTyping();

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
