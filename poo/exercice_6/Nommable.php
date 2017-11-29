<?php


class Nommable {
    protected $name;

    protected function getName(){
        return $this->name;
    }

    protected function setName($name){
        $this->name = $name;
    }
}