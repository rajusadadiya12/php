<!-- Login Validation:
• Write a PHP script using $_POST to validate a username and password, and
set a session variable to track login status. -->
<?php
session_start();

$unm = "admin";
$pwd = "pwd123";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === $unm && $password === $pwd) 
    {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        echo "Login successful! Welcome, " . htmlspecialchars($username) . ".";
    } 
    else 
    {
        echo "Invalid username or password.";
    }
}
?>

<form method="post" action="">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" value="Login">
</form>
