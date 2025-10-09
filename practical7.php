<?php
// Global variables
$totalMarks = 600;   
$passingGrade = 30;

// Function to calculate percentage - uses global $totalMarks
function calculatePercentage($obtainedMarks) 
{
    global $totalMarks;
    $percentage = ($obtainedMarks / $totalMarks) * 100;
    return $percentage;
}

// Function to determine the grade based on percentage - uses local variable
function determineGrade($percentage) {
    $grade = "";

    if ($percentage >= 90) 
    {
        $grade = "A";
    } 
    elseif ($percentage >= 70) 
    {
        $grade = "B";
    } elseif ($percentage >= 60) 
    {
        $grade = "C";
    }
    else {
        $grade = "Fail  ";
    }

    return $grade;
}

$studentMarks = 600;

// Calculate percentage using global variable inside function
$percentage = calculatePercentage($studentMarks);

// Determine grade using local variable inside function
$finalGrade = determineGrade($percentage);

// Display results
echo "<br> Marks: $studentMarks / $totalMarks\n";
echo "<br>Percentage: " . number_format($percentage, 2) . "%\n";
echo "<br>Final Grade: $finalGrade\n";

global $passingGrade;
if ($percentage >= $passingGrade) {
    echo "<br>Status: Passed\n";
} else {
    echo "<br>Status: Failed\n";
}
?>
