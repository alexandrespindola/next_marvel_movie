<?php

declare(strict_types=1);

class SuperHero
{

    // Promotion of properties in the constructor
    public function __construct(
        readonly private string $name,
        public array $powers,
        public string $planet,
    ) {
    }

    private function getPowersAsString(): string
    {
        return implode(', ', $this->powers);
    }

    public function attack()
    {
        $powers = $this->getPowersAsString();
        return "$this->name is attacking with $powers. ";
    }

    public function show_all()
    {
        return get_object_vars($this);
    }

    public function description()
    {
        $powers = $this->getPowersAsString();
        return "$this->name is from $this->planet and has $powers.";
    }

    public static function random(): SuperHero
    {
        $names = ['Spiderman', 'Ironman', 'Thor', 'Hulk', 'Black Widow'];
        $powersList = [
            ['Web', 'Jump', 'Life'],
            ['Flight', 'Strength', 'Intelligence'],
            ['Thunder', 'Flight', 'Strength'],
            ['Strength', 'Regeneration', 'Durability'],
            ['Agility', 'Espionage', 'Martial Arts']
        ];
        $planets = ['Earth', 'Asgard', 'Titan', 'Xandar', 'Sakaar'];

        $name = $names[array_rand($names)];
        $powers = $powersList[array_rand($powersList)];
        $planet = $planets[array_rand($planets)];

        return new self($name, $powers, $planet);
    }
}


$random_hero = SuperHero::random();
echo $random_hero->description();
var_dump($random_hero->show_all());
