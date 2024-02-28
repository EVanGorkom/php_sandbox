<?php
// for loop syntax
// for (initialization; condition; update) {
// code here
// }

// for ($i = 0; $i <= 10; $i++) {
//     echo $i . '<br />';
// }

// while loop syntax
// initialization;
// while(condition) {
    // code to do
    // update
// }

// $i = 0;
// while ($i <= 10) {
//     echo $i . '<br />';
//     $i++;
// }

// do-while loop syntax
// initialization
// do {
    // code
    // update
// } while (condition);

// NOTE: A do-while loop will always run the code at least once, THEN check the condition to see if it needs to run again, whereas the other loops check the condition first and then see if they need to run the loop.

// $i = 0;
// do {
//     echo $i . '<br />';
//     $i++;
// } while ($i < 10)
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
            <ul>
                <!-- for loop example -->
                <!-- <?php for ($i = 0; $i <= 10; $i++) : ?>
                    <li>Number: <?= $i ?></li>
                    <?php endfor; ?> -->

                <!-- while loop example -->
                <!-- <?php $i = 0; while ($i <= 10): ?>
                    <li>Number: <?= $i ?></li>
                <?php $i++; endwhile; ?> -->
                
                <!--  -->
                <?php $i = 0; do { ?>
                    <li>Number: <?= $i ?></li>
                <?php $i++; 
                } while($i < 10) ?>
            </ul>
        </div>
    </div>
</body>

</html>