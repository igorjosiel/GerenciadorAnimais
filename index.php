<?php

echo "Bem-vindo ao Gerenciador de Animais da Fazenda!\n";
echo "Escolha uma opção:\n";
echo "1 - Cadastrar animal\n";
echo "2 - Listar animais\n";
echo "3 - Remover animal\n";
echo "4 - Buscar animal\n";
echo "5 - Sair\n";

echo "Escolha uma opção: ";

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
      fwrite(STDOUT, "O animal {$animalName} foi encontrado!");
    } else {
      fwrite(STDOUT, "O animal {$animalName} não foi encontrado!");
    }
    break;
  case 5:
    fwrite(STDOUT, "Tchau...");
    break;
  default:
    echo "Opção inválida!";
}
