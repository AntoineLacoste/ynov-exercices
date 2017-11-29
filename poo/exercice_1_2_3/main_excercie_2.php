<?php
namespace POO;

require_once(__DIR__ . "\Triangle.php");

$triangleIsocele = new Triangle(1, 1, 2);
echo $triangleIsocele->toString();
echo "<br>";
echo $triangleIsocele->isIsocele() ? "je suis isocele" : "je ne suis pas isocele";
echo "<br>";
echo "<br>";

$triangleRectangle = new Triangle(3, 4, 5);
echo $triangleRectangle->toString();
echo "<br>";
echo $triangleRectangle->isRectangle() ? "je suis rectangle" : "je ne suis pas rectangle";
echo "<br>";
echo "<br>";

$triangleScalene = new Triangle(1, 2, 3);
echo $triangleScalene->toString();
echo "<br>";
echo $triangleScalene->isScalene() ? "je suis scalene" : "je ne suis pas scalene";
echo "<br>";
echo "<br>";

$triangleEquilateral = new Triangle(4, 4, 4);
echo $triangleEquilateral->toString();
echo "<br>";
echo $triangleEquilateral->isEquilateral() ? "je usis equilaeral" : "je ne suis pas equilateral";
echo "<br>";
echo "<br>";