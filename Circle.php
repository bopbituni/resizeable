<?php
include_once "Resizeable.php";
include_once "Shape.php";

class Circle extends Shape implements Resizeable
{
    public $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
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

    public function resize($circleObject)
    {
        $calculator = $circleObject->area();
        return $calculator * rand(1, 100);
    }
}