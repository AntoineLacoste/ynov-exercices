<?php

namespace POO;


class Calculator{

    static function addition($operande1, $operande2){
        return $operande1 + $operande2;
    }

    static function soustraction($operande1, $operande2){
        return $operande1 - $operande2;
    }

    static function multiplication($operande1, $operande2){
        return $operande1 * $operande2;
    }

    //$operande 1 puissance $operande2
    static function puissance($operande1, $operande2){
        return pow($operande1, $operande2);
    }

    //reste de $operande1 divisé par $operande2
    static function resteDeDivision($operande1, $operande2){
        return $operande1 % $operande2;
    }
}