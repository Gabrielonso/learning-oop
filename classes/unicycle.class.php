<?php

class Unicycle extends Bicycle
{
    //visibility must match property being overriden
    protected static $wheels = 1;

    public function bug_test()
    {
        return $this->weight_kg;
    }
}
