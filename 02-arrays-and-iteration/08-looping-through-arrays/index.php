<?php
$names = ['John Doe', 'Matthew Thomas', 'Jose Ramirez', 'Mary Jane'];

$users = [
  ['name' => 'John', 'email' => 'john@email.com'],
  ['name' => 'Jane', 'email' => 'jane@email.com'],
  ['name' => 'Joe', 'email' => 'joe@email.com'],
  ['name' => 'Mary', 'email' => 'mary@email.com']
];
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
      <h3 class="text-xl font-semibold mb-4">Using a for loop</h3>
      <ul class="mb-6">
        <?php for ($i = 0; $i < count($names); $i++): ?>
          <li>Name: <?= $names[$i]; ?></li>
        <?php endfor ?>
      </ul>
      <h3 class="text-xl font-semibold mb-4">Using a foreach loop</h3>
      <ul class="mb-6">
        <?php foreach($names as $name) : ?>
          <li>Name: <?= $name ?></li>
        <?php endforeach; ?>
      </ul>
      <h3 class="text-xl font-semibold mb-4">Using a foreach loop with index</h3>
      <ul class="mb-6">
        <!-- this will print the index of the array as we loop through it -->
        <?php foreach($names as $index => $name) : ?>
          <li><?= $index . ': ' . $name ?></li>
        <?php endforeach; ?>
      </ul>
      <h3 class="text-xl font-semibold mb-4">Using a foreach loop with associative array</h3>
      <ul class="mb-6">
        <?php foreach($users as $user): ?>
          <li><?='Name: ' . $user['name'] . ' | Email: ' . $user['email'] ?></li>
        <?php endforeach ?>
      </ul>
      <h3 class="text-xl font-semibold mb-4">Getting key names and values from associative array</h3>
      <ul class="mb-6">
        <!-- this syntax CAN pull the keys and their values by doing a nested iteration, but you typically don't do that -->
        <?php foreach($users as $user): ?>
          <?php foreach($user as $key => $value): ?>
            <li><?= $key . ': ' . $value ?></li>
          <?php endforeach ?>
        <?php endforeach ?>
      </ul>
    </div>
  </div>
</body>

</html>