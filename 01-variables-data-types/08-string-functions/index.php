<?php
$output = null;
$string = 'Hello World';

// strlen
$output = strlen($string);

// str_word_count
$output = str_word_count($string);

// strpos
// // here we're giving it a string and looking for the index of where the substring starts
$output = strpos($string, 'World');

// Get specific char by index
$output = $string[4];

// substr
// // here is kind of like the opposite of strpos. We're taking an index position and returning the number of character we want after that position (inclusive of starting point)
$output = substr($string, 6, 5);

// str_replace
$output = str_replace('World', 'Universe', $string);
// // this one replaces a substring with a new substring. Arg1 is the original, Arg2 is the new, and Arg3 is the string it all exists in.

// strtolower
// // lowercase everything
$output = strtolower($string);

// strtoupper
// // capitalize everything
$output = strtoupper($string);

// ucwords 
// // capitalize first letter of each word
$output = ucwords($string);

// trim
// // removes the extra spaces
$output = trim('     Hello World      ')
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
      <p class="text-xl"><?= $output ?></p>
    </div>
  </div>
</body>

</html>