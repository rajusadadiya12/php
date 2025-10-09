<!DOCTYPE html>
<html>
<head>
    <title>Survey Data Analysis</title>
</head>
<body>

<h1>Survey Rate from 1 to 5</h1>

<form method="post">
    <label>Question 1:</label>
    <input type="number" name="q1" min="1" max="5" required><br><br>

    <label>Question 2:</label>
    <input type="number" name="q2" min="1" max="5" required><br><br>

    <label>Question 3:</label>
    <input type="number" name="q3" min="1" max="5" required><br><br>

    <input type="submit" name="submit" value="Submit Survey"><br><br>
</form>

<?php
//calculate average
function calculateAverage($responses) {
    $total = array_sum($responses);
    $count = count($responses);
    return $count > 0 ? round($total / $count, 2) : 0;
}

if (isset($_POST['submit'])) {
    $responses = [
        (int)$_POST['q1'],
        (int)$_POST['q2'],
        (int)$_POST['q3']
    ];

    // calculate average
    $averageScore = calculateAverage($responses);

    echo "<div class='result'> Average Survey Score: <strong>$averageScore</strong> out of 5</div>";
}
?>

</body>
</html>
