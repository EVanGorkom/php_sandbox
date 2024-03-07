<?php

$square = function ($number) {
  return $number * $number;
};

$result = $square(5);

echo 'The square of 5 is ' . $result;
echo '<br />';

// Closures
function createCounter()
{
  $count = 0;

  $counter = function () use (&$count) {
    // this is a closer   ^^^^^^^^^^ and it can be used to bring variables from the outer scope into the inner scope.
    return ++$count;
  };

  return $counter;
}

$counter = createCounter();

echo $counter() . '<br/>';
echo $counter() . '<br/>';
echo $counter() . '<br/>';
echo $counter() . '<br/>';
