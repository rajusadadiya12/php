<!-- Personalized Experience with Cookies:
• Use $_COOKIE to store and retrieve a visitor's preferred theme or language. -->
<?php
$theme = 'light';
if (isset($_GET['theme'])) 
{
    $theme = $_GET['theme'];
    setcookie('preferred_theme', $theme, time() + (20 * 30 * 30 * 40), "/"); 
} 
elseif (isset($_COOKIE['preferred_theme'])) 
{
    $theme = $_COOKIE['preferred_theme'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personalized Theme with Cookies</title>
    <style>
        body.light 
        {
            background-color: white;
            color: black;
        }
        body.dark 
        {
            background-color: black;
            color: white;
        }
        .theme-selector 
        {
            margin: 40px;
        }
    </style>
</head>
<body class="<?php echo htmlspecialchars($theme); ?>">

    <h1>personalized page!</h1>
    <p>current theme is: <br>
        <strong><?php echo htmlspecialchars($theme); ?></strong></p>

    <div class="theme-selector">
        <p>Choose your theme:</p>
        <a href="?theme=dark">Dark Theme</a> | 
        <a href="?theme=light">Light Theme</a> 
    </div>
</body>
</html>
