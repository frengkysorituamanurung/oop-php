<?php

$array = [
    "firstName" => "Frengky",
    "middleName" => "Soritua",
    "lastName" => "Manurung"
];

$object = (object)$array;

var_dump($object);

echo "First Name $object->firstName" . PHP_EOL;
echo "Middle Name $object->middleName" . PHP_EOL;
echo "Last Name $object->lastName" . PHP_EOL;

$arrayLagi = (array) $object;
var_dump($arrayLagi);

require_once "data/Person.php";

$person = new Person("Frengky", "Medan");
var_dump($person);

$arrayPerson = (array) $person;
var_dump($arrayPerson);