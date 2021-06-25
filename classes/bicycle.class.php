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
