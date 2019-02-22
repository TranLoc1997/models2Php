<?php

class Rectangle
{
    public $width;
    public $height;
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    //tinh dien tich
    public function getArea()
    {
        return $this->width * $this->height;
    }
    //tinh chu vi
    public function getPerimeter()
    {
        return (($this->width + $this->height) * 2);
    }
    public function display()
    {
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }
}