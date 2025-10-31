<!-- Logging Requests:
• Log server-side info like IP and request method using $_SERVER, and display
them on a web page. -->
<!DOCTYPE html>
<html>
<head>
    <title>Request Logger</title>
</head>
<body>

<h2>Server-Side Request Info</h2>

<?php
$ipAddress = $_SERVER['REMOTE_ADDR'];
$requestMethod = $_SERVER['REQUEST_METHOD'];
echo "<p><strong>IP Address:</strong> $ipAddress</p>";
echo "<p><strong>Request Method:</strong> $requestMethod</p>";
$logEntry = date("Y-m-d H:i:s") . " - IP: $ipAddress - Method: $requestMethod\n";
file_put_contents("requestlog.txt", $logEntry, FILE_APPEND);
?>
</body>
</html>
