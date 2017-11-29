<?php
namespace POO;

require_once(__DIR__ . "\Triangle.php");
require_once(__DIR__ . "\TriangleCalculator.php");

$triangleIsocele = new Triangle(1, 1, 2);
$triangleRectangle = new Triangle(3, 4, 5);

$triangleScalene = new Triangle(1, 2, 3);

$triangleEquilateral = new Triangle(4, 4, 4);
$triangleCalculator = new TriangleCalculator();
echo "perimetre de " . $triangleIsocele->toString() . " et de " . $triangleEquilateral->toString() . " = " . $triangleCalculator->sommePerimetre($triangleIsocele, $triangleEquilateral);
echo "<br>";
echo "air de " . $triangleRectangle->toString() . " et de " . $triangleScalene->toString() . " = " . $triangleCalculator->sommeAir($triangleRectangle, $triangleScalene);
echo "<br>";

