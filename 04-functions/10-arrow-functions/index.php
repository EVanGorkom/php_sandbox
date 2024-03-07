<?php
// standard format
function add($a, $b) {
  return $a + $b;
}

// echo add(1, 2);
echo '<br/>';

// arrow format
$add = fn ($a, $b) => $a + $b;

// echo $add(1, 2);
echo '<br/>';


// Practicing callback functions
$numbers = [1, 2, 3, 4, 5];
$squaredNumbers = array_map(function ($number) {
  return $number * $number;
}, $numbers);

// print_r($squaredNumbers);
echo '<br/>';

// Now callbacks using the arrow format
$squaredNumbers = array_map(fn ($number) => $number * $number, $numbers);
print_r($squaredNumbers);
echo '<br/>';

// Callbacks are a great usecase for arrow functions in php