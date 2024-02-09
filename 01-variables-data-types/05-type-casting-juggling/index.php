<?php
$num1 = 5;
$num2 = 10;
$num3 = '20';
$fruit = 'apple';
$bool1 = true;
$bool2 = false;
$null = null;

// Implicit Conversion
$result = $num1 + $num2;
$result = $num1 + $num3; // int (string to int)
$result = $num3 + $num3; // again php is smart enough to know that there was a number within the string, convert it to an int, and then add them together to return the result.
$result = $num1 . $num2; // here when we use the concat symbol the system knows to convert these to strings and then add them together.
// $result = $fruit + $num2; // this gives an error. We cannot add a raw letter to a number or integer.
$result = $num1 + $bool1; // this gives us 6 because the 'true' in php can actually convert to 1.
$result = $num1 + $bool2; // this gives us 5 because 'false' in php converts to 0. Likely a binary reasoning, but kinda nice.
$result = $num1 + $null; // null converts to 0.

// Explicit Conversion
$result = (string) $num1; // converts to string
$result = (int) $num3; // converts to an int
$result = (bool) $num3; // any number other than 0 converts to true

var_dump($result);
?>