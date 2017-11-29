<?php

namespace POO;

class Triangle {
    private $x;
    private $y;
    //hypotenuse
    private $z;

    public function __construct($x = 2, $y = 2, $z = 2){
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    public function isIsocele(){
        return $this->x == $this->y || $this->x == $this->z || $this->y == $this->z;
    }

    public function isEquilateral(){
        return $this->x == $this->y && $this->y == $this->z;
    }

    public function isRectangle(){
        return (pow($this->y, 2) + pow($this->x, 2)) == pow($this->z, 2);
    }

    public function isScalene(){
        return $this->x !== $this->y && $this->y !== $this->z;
    }

    public function toString(){
        return "$this->x cm, $this->y cm, $this->z cm";
    }

    public function getPerimetre(){
        return $this->x + $this->y + $this->z;
    }

    public function getAir(){
        return $this->getPerimetre() / 2;
    }
}