<?php
// Ternary Operators
// Condition ? Expression1 : Expression2
//condition = true ^^^^^^      ^^^^^^ condition = false

$score = 50;

if ($score > 40) {
  echo 'High Score';
} else {
  echo 'Low Score';
}

$result = $score > 40 ? 'High Score' : 'Low Score';
echo $result;
?>