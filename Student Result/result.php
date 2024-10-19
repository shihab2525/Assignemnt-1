<?php
function calculateResult($sub_one, $sub_two, $sub_three, $sub_four, $sub_five)
{
    $marks = [$sub_one, $sub_two, $sub_three, $sub_four, $sub_five];

    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            echo "Enter a valid mark between 0 and 100";
            return;
        }
        if ($mark < 33) {
            echo "Result : Failed";
            return;
        }
    }
    $totalMarks = array_sum($marks);
    $averageMarks = $totalMarks / count($marks);

    echo "Total Marks: " . $totalMarks . "<br>";
    echo "Average Marks: " . $averageMarks . "<br>";

    // the result based on average marks using switch 

    switch (true) {
        case ($averageMarks >= 80):
            echo "Grade: A+";
            break;
        case ($averageMarks >= 70):
            echo "Grade: A";
            break;
        case ($averageMarks >= 60):
            echo "Grade: B+";
            break;
        case ($averageMarks >= 50):
            echo "Grade: B";
            break;
        case ($averageMarks >= 40):
            echo "Grade: C";
            break;
        case ($averageMarks >= 33):
            echo "Grade: D";
            break;
        default:
            echo "Result: Failed";
            break;
    }
}
calculateResult(70, 80, 65, 80, 100);