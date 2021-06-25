<?php

class Bicycle
{

    public $brand;
    public $model;
    public $year;
    public $description = 'Used bicycle';
    protected static $wheels = 2;
    private $weight_kg;

    public static $instance_count = 0;
    public $category;
    public const CATEGORIES = ['Road', 'Mountain', 'Hybrid', 'Cruiser', 'City', 'BMX'];

    public static function create()
    {
        $class_name = get_called_class(); //must retrieve string first
        $obj = new $class_name;           // "new" expects a class or a string
        // $obj = new static              //self & static work here too
        self::$instance_count++;
        return $obj;
    }

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

    public static function wheels_details()
    {
        $wheels_string = static::$wheels == 1 ? "1 wheel" : static::$wheels . " wheels";
        return 'It has ' . $wheels_string . '.';
    }
}

class Unicycle extends Bicycle
{
    //visibility must match property being overriden
    protected static $wheels = 1;

    public function bug_test()
    {
        return $this->weight_kg;
    }
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

echo 'Bicycle count: ' . Bicycle::$instance_count . '<br />';
echo 'Unicycle count: ' . Unicycle::$instance_count . '<br />';

$bike = Bicycle::create();
$uni = Unicycle::create();

echo 'Bicycle count: ' . Bicycle::$instance_count . '<br />';
echo 'Unicycle count: ' . Unicycle::$instance_count . '<br />';

echo '<hr />';
echo 'Categories: ' . implode(', ', Bicycle::CATEGORIES) . '<br />';
$bicycle->category = Bicycle::CATEGORIES[0];
echo 'Category: ' . $bicycle->category . '<br />';

echo "<hr />";

echo "Bicycle: " . Bicycle::wheels_details() . "<br />";
echo "Unicycle: " . Unicycle::wheels_details() . "<br />";


/* 
$cycles = [$bicycle, $unicycle];
foreach ($cycles as $bicyc) {
    echo $bicyc->name() . ", it weighs " . $bicyc->get_weight_kg() . " which is approximately " . $bicyc->weight_lbs() . ". Since " . $bicyc->wheels_details() . ", it is a " . get_class($bicyc) . ". <br/>";
}
$all_methods = get_class_methods('Bicycle');

echo "All Class methods:" . implode(', ', $all_methods) . "<br />"; */
