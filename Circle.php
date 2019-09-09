<?php
include_once "Resizeable.php";

class Circle implements Resizeable
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    public function area()
    {
        return pi() * pow($this->radius, 2);
    }

    public function resize()
    {
        return $this->area()*rand(1,100);
    }
}