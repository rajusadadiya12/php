<?php
// Define two dates
$startDate = new DateTime("2025-07-15"); 
$endDate = new DateTime("2026-07-15"); 

// calculate the difference
$interval = $startDate->diff($endDate);

echo "<h2>Date Difference Calculator</h2>";
echo "<p>Start Date: " . $startDate->format("l, d F Y") . "</p>";
echo "<p>End Date: " . $endDate->format("l, d F Y") . "</p>";
echo "<p>Number of days between dates: <strong>" . $interval->days . " days</strong></p>";
?>
