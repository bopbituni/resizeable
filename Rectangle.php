<?php
include_once "Resizeable.php";

class Rectangle implements Resizeable
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
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
        return $this->getWidth()*$this->getHeight();
    }

    public function resize()
    {
        return $this->area()*rand(1,100);
    }
}