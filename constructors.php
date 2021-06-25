<?php

class Sofa
{
    public static $instance_count = 0;

    public $seats = 3;
    public $arms = 2;

    //constructor gets called whenever an instance is created
    public function __construct($args = [])
    {
        self::$instance_count++;
        $this->seats = $args['seats'] ?? NULL;
        $this->arms = $args['arms'] ?? $this->arms;
    }

    //destructor gets called whenever an instance is destroyed
    //i.e whenever the last reference to an instance is removed
    public function __destruct()
    {
        self::$instance_count--;
    }
}

class Couch extends Sofa
{
    var $arms = 0;
}

class Loveseat extends Sofa
{
    var $seats = 2;
}

$sofa = new Sofa(['seats' => 3, 'arms' => 2]);
echo 'Sofa <br />';
echo '- seats: ' . $sofa->seats . '<br />';
echo '- arms: ' . $sofa->arms . '<br />';
echo '<br />';

$couch = new Couch(['seats' => 4]);
echo 'Couch <br />';
echo '- seats: ' . $couch->seats . '<br />';
echo '- arms: ' . $couch->arms . '<br />';
echo '<br />';

//use to unset the reference that points to some intance($sofa);
//to call the destructor method
unset($sofa);

$loveseat = new Loveseat(['arms' => 0]);
echo 'Loveseat <br />';
echo '- seats: ' . $loveseat->seats . '<br />';
echo '- arms: ' . $loveseat->arms . '<br />';
echo '<br />';

echo 'Instance count: ' . Sofa::$instance_count . '<br />';
