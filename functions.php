<!-- functions.php -->
<?php

function calculateTop20($grades) {
    $count = count($grades);
    if ($count > 0) {
        $top_count = ceil($count * 0.2);
        $sorted_grades = $grades;
        rsort($sorted_grades);

        $top_grades = array_slice($sorted_grades, 0, $top_count);

        $top_counter = 0;
        foreach ($grades as $grade) {
            if (in_array($grade, $top_grades)) {
                $top_counter++;
            }
        }

        return $top_counter;
    }

    return 0;
}

function calculateBottom20($grades) {
    $count = count($grades);
    if ($count > 0) {
        $bottom_count = ceil($count * 0.2);
        $sorted_grades = $grades;
        sort($sorted_grades);

        $bottom_grades = array_slice($sorted_grades, 0, $bottom_count);

        $bottom_counter = 0;
        foreach ($grades as $grade) {
            if (in_array($grade, $bottom_grades)) {
                $bottom_counter++;
            }
        }

        return $bottom_counter;
    }

    return 0;
}

?>
