<?php
$output = null;

$fruits = [
  ['Apple', 'Red'],
  ['Orange', 'Orange'],
  ['Banana', 'Yellow']
];

$output = $fruits[0][0]; // retrieves the element 'Apple'

$fruits[] = ['Grape', 'Purple']; // adds this array to the element within the parent array

$users = [
  [
    'name' => 'John',
    'email' => 'john@gmail.com',
    'password' => '1234'
  ],
  [
    'name' => 'Mary',
    'email' => 'mary@gmail.com',
    'password' => '1234'
  ],
  [
    'name' => 'Alex',
    'email' => 'alex@gmail.com',
    'password' => '1234'
  ],
];

$output = $users[1]['email']; // displays specific data from the hash
$users[] = [      // again, just an example of adding a new element to the hash
  'name' => 'Cheyenne',
  'email' => 'cheyenne@gmail.com',
  'password' => '1234'
];

array_push($users, ['name' => 'Alex', 'email' => 'alex@gmail.com', 'password' => '1234']);  // Another way to add a new element

array_pop($users); // removes last element
array_shift(($users)); // removes first element

unset($users[0]); // removes specific user at index [0] in this case

$output = count($users); // counts the number of elements in the parent array


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
      <!-- Output -->
      <p class="text-xl"><?= $output ?></p>
      <p>
      <pre>
          <?php print_r($users) ?>
        </pre>
      </p>
    </div>
  </div>
</body>

</html>