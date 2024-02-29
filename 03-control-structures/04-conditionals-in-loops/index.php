<?php
$number = 1;

// while($number <= 10) {
//   if ($number % 2 == 0) {
//     echo $number . ' is even <br>';
//   } else {
//     echo $number . ' is odd <br>';
//   }
//   $number++;
// }

// // break loop
// for ($i = 1; $i <= 10; $i++) {
//   if ($i == 5) {
//     break;
//   }
//   echo $i . '<br>';
// }

// // skip and continue
// for ($i = 1; $i <= 10; $i++) {
//   if ($i == 5) {
//     continue;
//   }
//   echo $i . '<br>';
// }

$studentGrades = array(
  'jack' => 75,
  'jill' => 100,
  'john' => 90,
  'joan' => 85
);

foreach ($studentGrades as $name => $grade) {
  if ($grade >= 90) {
    echo $name . ' has an excellent grade <br>';
  }
}
?>