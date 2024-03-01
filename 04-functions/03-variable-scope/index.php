<?php

// Global Scope
$name = 'Alice';

echo $name . '<br>';

// this results in an error because the local scope does not have access to the global scope's variables automatically

// function sayHello() {
//   // Local Scope
//   echo 'Hello' . $name;
// }

// this syntax will work though, because declaring the $name variable as global before utilizing it.
function sayHello() {
  global $name;
  // Local Scope
  $name = 'Bob';
  echo 'Hello ' . $name . '<br>';
}

echo $name . '<br>';

sayHello();

echo $name . '<br>';
// the syntax here outputs 'Bob' as the name during and after the function call. 
// Takeaway is that we can reassign the global variable in a local scope if we do it right.


function sayGoodbye() {
  $names = ['Jack', 'Jill'];
  echo 'Goodbye' . $names[0];
}

echo $names;
// This results in an error because the variable $names only exists within the 'sayGoodbye' function, and not globally.
?>