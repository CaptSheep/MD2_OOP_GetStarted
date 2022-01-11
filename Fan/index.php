<?php
include_once "Fan.php";
$fan1 = new Fan();
$fan1-> setSpeed(3);
$fan1-> setRadius(10);
$fan1-> setColor("yellow");
$fan1-> setOn(false);
$fan2  = new Fan();
$fan2 ->setSpeed(2);
$fan2 ->setRadius(5);
$fan2 ->setColor("blue");
$fan2->setOn(true);

echo $fan1->toString();
echo "<br>";
echo $fan2->toString();