<!-- User Registration via GET:
• Create a form using the GET method, and display a welcome message using
$_GET after submission. -->
<!DOCTYPE html>
<html>
<head>
    <title>User Registration via GET</title>
</head>
<body>

<?php
if (isset($_GET['username'])) 
{
    $username = htmlspecialchars($_GET['username']);
    echo "<h2>Welcome, $username!</h2>";
}
?>
<form method="get" action="">
    <label for="username">Enter your name:</label>
    <input type="text" id="username" name="username" required>
    <input type="submit" value="Register">
</form>

</body>
</html>
