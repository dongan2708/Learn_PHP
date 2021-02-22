<?php
include_once 'animal.php';
include_once 'Cow.php';
include_once 'Lion.php';
$cow = new Cow('Herbivore', 'Grass');
$Lion = new Lion('Canirval','Meat');
echo "<B>Cow Object</B><BR>";
print_r($cow);
echo "<BR>";
echo "<B>Lion Object</B><BR>";
print_r($Lion);
?>