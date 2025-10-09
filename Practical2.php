<!DOCTYPE html>
<html>
<head>
    <title>Event Countdown</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            text-align: center;
            padding-top: 50px;
        }
        .countdown {
            background-color: rosybrown;
            padding: 30px;
            border-radius: 10px;
            display: inline-block;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
        }
        p {
            font-size: 20px;
            color: #555;
        }
    </style>
</head>
<body>

<div class="countdown">
    <h1>Countdown to the Big Event</h1>

    <?php
    // set event date here
    $eventdate = "2025-09-10";

    // get today date
    $today = date("Y-m-d");

    // convert date to timestamps
    $eventtimestamp = strtotime($eventdate);
    $todaytimestamp = strtotime($today);

    // Calculate difference in seconds
    $differenceinSeconds = $eventtimestamp - $todaytimestamp;

    // convert seconds to days
    $daysRemaining = ceil($differenceinSeconds / (60 * 60 * 24));

    // Display result
    if ($daysRemaining > 0) 
    {
        echo "<p>Only <strong>$daysRemaining</strong> days left until <strong>$eventdate</strong>!</p>";
    } 
    elseif ($daysRemaining === 0) 
    {
        echo "<p>big day</p>";
    } 
    else 
    {
        echo "<p>The event date <strong>$eventdate</strong> has already passed.</p>";
    }
    ?>
</div>

</body>
</html>
