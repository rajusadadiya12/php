<!-- User Authentication Using Functions
Objective: To implement a user login system using user-defined functions, function calling,
and returning values. -->
<?php
$user = [
    'raj' => password_hash('123', PASSWORD_DEFAULT),
];

//check username exists
function userexists($username, $user) {
    return isset($user[$username]);
}

//valid password for given username
function validpwd($username, $password, $user) {
    if (userexists($username, $user)) {
        // Use password_verify for hashed passwords
        return password_verify($password, $user[$username]);
    }
    return false;
}

//handle user login
function login($username, $password, $user) {
    if (!userexists($username, $user)) {
        return "username not exist.";
    }
    
    if (!validpwd($username, $password, $user)) {
        return "invalid password.";
    }
    
    return "successful login Welcome, " . htmlspecialchars($username) . ".";
}

$message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $inputusername = $_POST['username'] ?? '';
    $inputpassword = $_POST['password'] ?? '';
    
    $message = login($inputusername, $inputpassword, $user);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>User Login</title>
</head>
<body>
    <h2>User Login</h2>
    
    <?php if ($message): ?>
        <p><strong><?php echo $message; ?></strong></p>
    <?php endif; ?>
    
    <form method="POST" action="">
        <label>
            Username:
            <input type="text" name="username" required />
        </label>
        <br><br>
        <label>
            Password:
            <input type="password" name="password" required />
        </label>
        <br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
