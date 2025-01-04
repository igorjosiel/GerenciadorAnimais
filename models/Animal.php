<?php

class Animal {
  public readonly string $type;
  public readonly string $breed;
  public readonly string $name;

  static array $animals = [];

  public function __construct(string $type, string $breed, string $name) {
    $this->type = $type;
    $this->breed = $breed;
    $this->name = $name;

    self::$animals[] = $this;
  }
}
