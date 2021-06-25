<?php
class Animal
{
    var $name;
    var $have_legs;
    var $num_legs;
    var $have_wings = false;

    function can_fly()
    {
        return $this->have_wings;
    }

    function legs()
    {
        if ($this->num_legs > 0) {
            $this->num_legs = $this->num_legs;
        } else {
            $this->num_legs = 0;
        }
        return $this->num_legs;
    }
}

class Mammal extends Animal
{
    function feed_young_milk()
    {
        return 'it feeds it\'s young milk';
    }
}

class Reptile extends Animal
{
    function lays_egg()
    {
        return 'it lays eggs';
    }
}

class Bird extends Animal
{
    var $have_wings = true;
    function lays_egg()
    {
        return 'it lays eggs';
    }
}


$goat = new Mammal;
$goat->name = 'Goat';
$goat->num_legs = 4;
$goat->have_wings = false;

$bat = new Mammal;
$bat->name = 'Bat';
$bat->num_legs = 2;
$bat->have_wings = true;


$lizard = new Reptile;
$lizard->name = 'Lizard';
$lizard->num_legs = 4;
$lizard->have_wings = false;

$snake = new Reptile;
$snake->name = 'Snake';
$snake->num_legs = 0;
$snake->have_wings = false;

$dove = new Bird;
$dove->name = 'Dove';
$dove->num_legs = 2;

$Animals = [$goat, $bat, $lizard, $snake, $dove];

foreach ($Animals as $animal) {
    if (is_a($animal, 'Mammal')) {
        $description = $animal->name . ' is a ' . get_class($animal) . ' because ' . $animal->feed_young_milk() . ', has ' . $animal->legs() . ' legs';

        if ($animal->can_fly() == true) {
            $description .= ' and can fly.';
        } else {
            $description .= ' but cannot fly.';
        }
    }

    if (is_a($animal, 'Reptile')) {
        $description = $animal->name . ' is a ' . get_class($animal) . ' because ' . $animal->lays_egg() . ', has ' . $animal->legs() . ' legs';

        if ($animal->can_fly() == true) {
            $description .= ' and can fly.';
        } else {
            $description .= ' but cannot fly.';
        }
    }

    if (is_a($animal, 'Bird')) {
        $description = $animal->name . ' is a ' . get_class($animal) . ' because ' . $animal->lays_egg() . ', has ' . $animal->legs() . ' legs';

        if ($animal->can_fly() == true) {
            $description .= ' and can fly.';
        } else {
            $description .= ' but cannot fly.';
        }
    }

    echo $description . " <br />";
}
