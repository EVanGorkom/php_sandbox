<?php
/*
| Arithmetic Operators
| Operator | Description    |
| -------- | -------------- |
| `+`      | Addition       |
| `-`      | Subtraction    |
| `*`      | Multiplication |
| `/`      | Division       |
| `%`      | Modulus        |
*/

$num1 = 20;
$num2 = 10;

// Basic Math
$output = "$num1 + $num2 = " . $num1 + $num2;
$output = "$num1 - $num2 = " . $num1 - $num2;
$output = "$num1 * $num2 = " . $num1 * $num2;
$output = "$num1 / $num2 = " . $num1 / $num2;
$output = "$num1 % $num2 = " . $num1 % $num2;

// Assignment Operator
$num3 = 10;
// $num3 = $num3 + 20;
// $num3 += 20; // this will equal 30
// $num3 -= 20; // equals -10
// $num3 *= 20; // equals 200. etc.
$output = $num3;

// Built-In PHP Functions
// rand();
$output = rand(); // random number between 0 and 2147483647
$output = getrandmax(); // this will always equal 2147483647 as it's the maximum number for the rand() function.
$output = rand(1, 10); // random number selected between the rand specified.

// Rounding
$output = round(4.2); // basic rounding
$output = ceil(4.2); // rounds to the ceiling
$output = floor(4.9); // rounds to the floor

// Square Root
$output = sqrt(64);

// Pi
$output = pi();

// Absolute Value
$output = abs(-4.6);

// Max()
$output = max(1, 2, 3, 4, 50);
$output = max([1, 2, 3, 4, 50]);

// Min()
$output = min(1, 2, 3, 4, 50);
$output = min([1, 2, 3, 4, 50]);

// Formatting
$output = number_format(1234567.191234, 2, '.', ','); // returns 1,234,567.19

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <?= $output ?>
    </div>
  </div>
</body>

</html>