<?php
// String
$name = 'Tom Brady';
$name2 = "John Doe";

var_dump($name);
echo '<br />';
// echo getType($name2);

// Integer
$age = 35;
var_dump($age);
echo '<br />';

// Float
$rating = 4.5;
var_dump($rating);
echo '<br />';

// Boolean
$is_loaded = true;
var_dump($is_loaded);
echo '<br />';

// Array
$friends = ['Joe', 'Jack', 'Jane', 'Juanita'];
var_dump($friends);
echo '<br />';

// Object or Hash
$person = new stdClass();
var_dump($person);
echo '<br />';

// Null
$car = null;
var_dump($car);
echo '<br />';

// Resource
$file = fopen('sample.txt', 'r');
var_dump($file);
echo '<br />';

/*
  PHP DATA TYPES:

- String
- Integer
- Float
- Boolean
- Array
- Object
- NULL
- Resource
*/
