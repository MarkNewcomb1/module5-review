<?php

function __autoload($class_name) {
    include 'classes/polymorphism/' . $class_name . '.php';
}

$patient = new Patient("Brian");
echo $patient->getName() . "<br><br>";

$client2 = new Client("Bob");
echo $client2->getName();

//$client->

// Other common uses, getProducts() vs getProducts("electronics") vs getProducts("electronics", 10)
