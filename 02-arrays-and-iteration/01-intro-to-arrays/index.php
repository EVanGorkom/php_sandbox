<?php

$names = ['Jill', 'Jack', 'Janette'];
$numbers = [1, 2, 3, 4, 5, 6];

function inspect($value)
{
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
}

// inspect($numbers);
// inspect($names);

// print_r($names);

// echo $names[2];

// Add element to array
$numbers[] = 100;
$numbers[] = 101;

inspect($numbers);

// 