<?php

require("classes/abstraction/patient.php");

$patient = new Patient();

$patient->setName("bob");
echo $patient->getName() . "<br>";

$patient->setWeight('200');
$patient->setHeight('72');

echo $patient->getWeight() . "<br>";
echo $patient->getHeight() . "<br>";

