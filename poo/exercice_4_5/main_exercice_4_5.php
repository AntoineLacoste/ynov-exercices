<?php

require_once(__DIR__ . "\Calculator.php");
require_once(__DIR__ . "\TaxeIncludedCalculator.php");

use \POO\Calculator as Calculator;
use \POO\TaxeIncludedCalculator as TaxeIncludedCalculator;

echo "2 + 4 = " . Calculator::addition(2, 4);
echo "<br>";
echo "2 - 4 = " . Calculator::soustraction(2, 4);
echo "<br>";
echo "2 * 4 = " . Calculator::multiplication(2, 4);
echo "<br>";
echo "2 exp 4 = " . Calculator::puissance(2, 4);
echo "<br>";
echo "2 % 4 = " . Calculator::resteDeDivision(2, 4);
echo "<br>";
echo "<br>";

$taxeIncludedCalculator = new TaxeIncludedCalculator(50);

echo "2 + 4 + " . $taxeIncludedCalculator->taxRate . "% = " . $taxeIncludedCalculator->additionWithTaxe(2, 4);
echo "<br>";
echo "2 - 4 + " . $taxeIncludedCalculator->taxRate . "% = " . $taxeIncludedCalculator->soustractionWithTaxe(2, 4);
echo "<br>";
echo "2 * 4 + " . $taxeIncludedCalculator->taxRate . "% = " . $taxeIncludedCalculator->multiplicationWithTaxe(2, 4);
echo "<br>";
echo "2 exp 4 + " . $taxeIncludedCalculator->taxRate . "% = " . $taxeIncludedCalculator->puissanceWithTaxe(2, 4);
echo "<br>";
echo "2 % 4 + " . $taxeIncludedCalculator->taxRate . "% = " . $taxeIncludedCalculator->resteDeDivisionWithTaxe(2, 4);
echo "<br>";
echo "2 mod 4 + " . $taxeIncludedCalculator->taxRate . "% = " . $taxeIncludedCalculator->modulo(2, 4);
