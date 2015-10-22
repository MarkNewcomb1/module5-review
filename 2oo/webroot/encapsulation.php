<?php

function __autoload($class_name) {
    include 'classes/encapsulation/' . $class_name . '.php';
}

$patient = new Patient("Brian");

$patient->setWeight('200');
$patient->setHeight('72');

echo $patient->getName() . "<br>";

if ($patient->getBMI()) {
  echo $patient->getBMI() . "<br>";
}  