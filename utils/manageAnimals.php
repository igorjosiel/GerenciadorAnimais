<?php

function addNewAnimal() {
  showText('Digite o tipo do animal: ');
  $animal = userTyping();

  showText('Digite a raça do animal: ');
  $breed = userTyping();

  showText("Digite o nome do animal: ");
  $name = userTyping();

  $animal = new Animal($animal, $breed, $name);
}

function showAnimals() {
  foreach ($animals as $key => $animal) {
    echo $key + 1 . " - $animal\n";
  }
}
