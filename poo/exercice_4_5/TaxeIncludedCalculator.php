<?php

namespace POO;


class TaxeIncludedCalculator extends Calculator {
    public $taxRate;

    public function __construct($taxRate) {
        $this->taxRate = $taxRate;
    }

    public function additionWithTaxe($operande1, $operande2) {
        return parent::addition($operande1, $operande2) * (1 + ($this->taxRate / 100));
    }

    public function soustractionWithTaxe($operande1, $operande2) {
        return parent::soustraction($operande1, $operande2) * (1 + ($this->taxRate / 100));
    }

    public function multiplicationWithTaxe($operande1, $operande2) {
        return parent::multiplication($operande1, $operande2) * (1 + ($this->taxRate / 100));
    }

    //$operande 1 puissance $operande2
    public function puissanceWithTaxe($operande1, $operande2) {
        return parent::puissance($operande1, $operande2) * (1 + ($this->taxRate / 100));

    }

    //reste de $operande1 divisé par $operande2
    public function resteDeDivisionWithTaxe($operande1, $operande2) {
        return parent::resteDeDivision($operande1, $operande2) * (1 + ($this->taxRate / 100));
    }

    public function __call($name, $arguments) {
        echo "Désolé, la méthode $name n'est pas encore implémenté <br>";
    }
}