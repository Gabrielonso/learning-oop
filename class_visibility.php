<?php

use Student as GlobalStudent;

class Student
{
    public $first_name;
    public $last_name;
    public $country = 'None';

    protected $registration_id;

    private $tuition = 500.00;

    public function hello_world()
    {
        return 'Hello World!';
    }

    protected function hello_family()
    {
        return 'Hello famiy!';
    }

    private function hello_me()
    {
        return 'Hello me!';
    }

    public function tuition_fmt()
    {
        return '$' . $this->tuition;
    }

    public function full_name()
    {
        return $this->first_name . " " . $this->last_name;
    }
}

class PartTimeStudent extends Student
{
    public function hello_parent()
    {
        return $this->hello_family();
    }
}

$student1 = new PartTimeStudent;
//$student1 = new Student;
$student1->first_name = 'Lucy';
$student1->last_name = 'Richardo';

//echo $student1->registration_id . "<br />";
//echo $student1->tuition . "<br />";c


echo $student1->full_name() . "<br />";

echo $student1->hello_world() . "<br />";
//echo $student1->hello_family() . "<br />";
//echo $student1->hello_me() . "<br />";

echo $student1->hello_parent() . "<br />";

$student1->tuition = 1000; //overloading: this is treated as a new property(dynamic property)
echo $student1->tuition . "<br />";
echo $student1->tuition_fmt() . "<br />";
