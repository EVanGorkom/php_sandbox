<?php
$age = 30;
// If statement
// if (condition) {
  // Code to be executed if the condition is true
// }
if ($age >= 21) {
  echo 'You are old enough to drink in the US';
}


// If-Else
if ($age >= 21) {
  echo 'You are old enough to drink in the US';
} else {
  echo 'You are NOT old enough to drink in the US';
}

// Nested if statement
if ($age >= 21) {
  echo 'You are old enough to drink in the US';
} else {
  if ($age >= 18) {
    echo 'You are old enough to vote in the US';
  } else {
    echo 'You are NOT old enough to drink or vote in the US';
  }
}

// If-Else-If
if ($age >= 21) {
  echo 'You are old enough to drink in the US';
} else if ($age >= 18) {
  echo 'You are old enough to vote in the US';
} else {
  echo 'You are NOT old enough to drink or vote in the US';
}
?>