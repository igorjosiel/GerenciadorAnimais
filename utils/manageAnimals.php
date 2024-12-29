<?php

$animals = ['Biu', 'Garfield', 'Bidu'];

function addNewAnimal() {
  showText("Digite o nome do animal: ");

  $animalName = userTyping();
  $animals[] = $animalName;
}
