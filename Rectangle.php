<?php
include_once "Resizeable.php";
include_once "Shape.php";

class Rectangle extends Shape implements Resizeable
{
    public $width;
    public $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    public function area()
    {
        return $this->getWidth() * $this->getHeight();
    }

    public function resize($rectangleObject)
    {
        $calculator = $rectangleObject->area();
        return $calculator * rand(1, 100);
    }
}