<?php
// Set timezone to India Standard Time
date_default_timezone_set("Asia/Kolkata");

// Get current date and time
$currentDate = date("l, d F Y");
$currentTime = date("h:i A");

// Display formatted academic calendar date
echo "<h2>Academic Calendar</h2>";
echo "<p>Today is <strong>$currentDate</strong></p>";
echo "<p>Current time: <strong>$currentTime</strong></p>";
?>
