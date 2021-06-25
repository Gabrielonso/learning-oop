<?php

class Bicycle
{

    public $brand;
    public $model;
    public $year;
    public $description = 'Used bicycle';
    protected $wheels = 2;
    private $weight_kg;

    public function name()
    {
        return  $this->brand . " " . $this->model . " is a " . $this->description . ". It was released in the year " . $this->year;
    }

    public function weight_lbs()
    {
        return $this->weight_kg * 2.2046226218 . 'lbs';
    }

    public function set_weight_kg($val)
    {
        $this->weight_kg = $val;
    }

    /*  public function set_weight_lbs($val)
    {
        $this->weight_kg = $val / 2.2046226218;
    } */

    public function get_weight_kg()
    {
        return $this->weight_kg . 'kg';
    }

    public function wheels_details()
    {
        return 'It has ' . $this->wheels . ' wheels.';
    }
}

class Unicycle extends Bicycle
{
    protected $wheels = 1;
}

$bicycle = new Bicycle;
$unicycle = new Unicycle;

$bicycle->brand = 'BMX';
$bicycle->model = 'B101';
$bicycle->year = '2007';
$bicycle->set_weight_kg(10);
$bicycle->get_weight_kg();

$unicycle->brand = 'Monster';
$unicycle->model = 'M309';
$unicycle->year = '2012';
$unicycle->set_weight_kg(2);
$unicycle->get_weight_kg();


$cycles = [$bicycle, $unicycle];
foreach ($cycles as $bicyc) {
    echo $bicyc->name() . ", it weighs " . $bicyc->get_weight_kg() . " which is approximately " . $bicyc->weight_lbs() . ". Since " . $bicyc->wheels_details() . ", it is a " . get_class($bicyc) . ". <br/>";
}
$all_methods = get_class_methods('Bicycle');

echo "All Class methods:" . implode(', ', $all_methods) . "<br />";
