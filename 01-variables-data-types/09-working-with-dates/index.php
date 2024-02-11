<?php
$output = null;

/*
'Y' - the year
'm' - the month
'd' - the day
'D' - the day of the week short name
'l' - the full day of the week name
'h' - the hour
'i' - the minute
's' - the second
'a' - AM/PM
*/

$output = date('Y');

// used below is a 'time stamp' specific code for a specific time
$output = date('Y', 936345600);

// get timestamp from strtotime function
$output = date('Y', strtotime('1999-09-01'));

// get month
$output = date('m');

// get day
$output = date('D');

// All year, month, and day
$output = date('Y-m-d');

// hour
$output = date('h');
// minute
$output = date('i');
// second
$output = date('s');
// am/pm
$output = date('a');
// Put it all together
$output = date('Y-m-d h:i:s a')
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
            <p class="text-xl"><?php echo $output; ?></p>
        </div>
    </div>
</body>

</html>