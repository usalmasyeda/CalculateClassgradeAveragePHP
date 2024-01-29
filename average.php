<!-- average.php -->
<?php

include 'grades.php';
include 'functions.php';

// Function to calculate the average grade
function calculateAverage($grades) {
    $total = 0;
    $count = count($grades);

    foreach ($grades as $grade) {
        $total += $grade;
    }

    return ($count > 0) ? $total / $count : 0;
}

// Calculate average
$average = calculateAverage($grades);
echo "Class Average: " . $average . PHP_EOL;

// Find top and bottom 20%
$top_count = calculateTop20($grades);
$bottom_count = calculateBottom20($grades);

echo "Number of students in Top 20%: " . $top_count . PHP_EOL;
echo "Number of students in Bottom 20%: " . $bottom_count . PHP_EOL;

?>