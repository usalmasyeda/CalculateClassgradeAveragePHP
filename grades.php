<!-- grades.php -->
<?php

include_once 'functions.php';
include_once 'average.php';

// Define and initialize an array of student grades
$grades = [25, 64, 23, 87, 56, 38, 78, 57, 98, 95, 81, 67, 75, 76, 82, 36, 39, 54, 43, 49, 65, 69, 78, 17, 91];

// Retrieve and store the number of elements in the array
$count = count($grades);

// Calculate average
$average = calculateAverage($grades);

// Find top and bottom 20%
$top_count = calculateTop20($grades);
$bottom_count = calculateBottom20($grades);

// Output the results
echo "Number of students: $count" . PHP_EOL;
echo "Class Average: $average" . PHP_EOL;
echo "Number of students in Top 20%: $top_count" . PHP_EOL;
echo "Number of students in Bottom 20%: $bottom_count" . PHP_EOL;

?>
