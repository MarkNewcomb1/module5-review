<?php

function __autoload($class_name) {
    include 'classes/inheritance/' . $class_name . '.php';
}

$client = new Client("Brian");

$client->setWeight('200');
$client->setHeight('72');
$client->setBalance('25.99');

echo $client->getName() . "<br>";

if ($client->getBMI()) {
  echo $client->getBMI() . "<br>";
}  

echo $client->getBalance() . "<br>";


// Better examples might be plants / animals
// Can talk about Drupal node => articles | gallery | product
