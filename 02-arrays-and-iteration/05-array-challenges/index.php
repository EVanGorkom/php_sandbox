<?php

/*
  Challenge 1: Sum of an array
  
  1. Create an array of numbers 
  2. Get the sum of all of the numbers combined and put into a variable.
  4. Get the amount of numbers in the array and put into a variable.
  5. Print out 'The sum of the {amount} numbers is: {sum} '. For example, if the array is [1, 2, 3, 4, 5], the output should be 'The sum of the 5 numbers is: 15'. 
*/
$numbers = [1, 2, 3, 4, 5];

$counted = count($numbers);
$total = $numbers[0] + $numbers[1] + $numbers[2] + $numbers[3] + $numbers[4];
echo '<h3>Sum Of An Array</h3>';
echo "The sum of the $counted numbers is $total";

/*
  Challenge 2: Colors array

  1. Reverse the `$colors` array.
  2. Add 'purple' and 'orange' to the end of the array.
  3. Replace the second color with 'pink'
  4. Remove the last element of the array.

You should end up with the following array: ['yellow', 'pink', 'blue', 'red', 'purple']
*/
$colors = ['red', 'blue', 'green', 'yellow'];
$reversed = array_reverse($colors);
array_push($reversed, 'purple', 'orange');
array_replace($reversed, array(1 => 'pink'));
array_pop($reversed);
// var_dump($reversed);
echo '<h3>Colors Array</h3>';

echo '<pre>';
print_r($colors);
echo '</pre>';

/*
  Challenge 3: Job listings array

  1. Create a multi-dimensional array of associative arrays of 3 job listings with the fields id, job_title, company, contact_email, and contact_phone. Also add an array field for skills. The skills array should be an array of strings with each skill a person has. For example, 'PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS', etc.
  2. Create a new listing using the `array_push()` function. The new listing should have the same fields as the others.
  3. Print out the job_title of the second job listing in the array.
  4. Print out the first skill of the third job listing in the array.
*/

echo '<h3>Job Listings</h3>';

$listings = [
  [
    'id' => 1,
    'job_title' => 'Backend Developer',
    'company' => 'Company Name',
    'contact_email' => 'dude@email.com',
    'contact_phone' => '123-456-7890',
    'skills' => ['PHP', 'Python', 'Ruby', 'JavaScript', 'HTML', 'CSS']
  ],
  [
    'id' => 2,
    'job_title' => 'Full Stack Engineer',
    'company' => 'XYZ Company',
    'contact_email' => 'dude@email.com',
    'contact_phone' => '123-456-7890',
    'skills' => ['Typescript', 'React', 'Express', 'MongoDB']
  ],
  [
    'id' => 3,
    'job_title' => 'Artist',
    'company' => 'Company 3',
    'contact_email' => 'davinci@email.com',
    'contact_phone' => '123-456-7890',
    'skills' => ['Oils', 'Inks', 'Paints', 'Marble']
  ]
];

array_push($listings, [
  'id' => 4,
  'job_title' => 'C# Developer',
  'company' => '123 Company',
  'contact_email' => 'kristen@email.com',
  'contact_phone' => '123-456-7890',
  'skills' => ['C#', 'Angular', 'JavaScript', 'HTML', 'CSS']
]);

echo $listings[1]['job_title'];

echo '<br>';

echo $listings[2]['skills'][0];