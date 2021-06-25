<?php

class Bicycle
{
    var $brand;
    var $model;
    var $year;
    var $description;
    var $weight_kg;

    function name()
    {
        return  $this->brand . " " . $this->model . " bicycle was released in the year " . $this->year;
    }

    function weight_lbs()
    {
        return $this->weight_kg * 2.2046226218;
    }

    function set_weight_lbs($val)
    {
        $this->weight_kg = $val / 2.2046226218;
    }
}

$bicycle1 = new Bicycle;
$bicycle2 = new Bicycle;
$bicycle3 = new Bicycle;

$bicycle1->brand = 'BMX';
$bicycle1->model = 'B101';
$bicycle1->year = '2007';
$bicycle1->weight_kg = 15;

$bicycle2->brand = 'Monster';
$bicycle2->model = 'M309';
$bicycle2->year = '2012';
$bicycle2->weight_kg = 16;

$bicycle3->brand = 'Red Bull';
$bicycle3->model = 'Fly1';
$bicycle3->year = '2008';
$bicycle3->weight_kg = 13;

$bicycle = [$bicycle1, $bicycle2, $bicycle3];
foreach ($bicycle as $bicyc) {
    echo $bicyc->name() . "<br/>";
}
$all_methods = get_class_methods('Bicycle');

echo "All Class methods:" . implode(', ', $all_methods) . "<br />";
