
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body class="bg-light">
        <div class="container d-flex justify-content-center align-items-center min-vh-80">
            <div class="card shadow-lg p-4 rounded-3 w-50">
            <h3 class="text-center mb-4">Generate Password Reset Token</h3>
            <form method="POST">
                <div class="mb-3">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="email" required>
                </div>
                <div class="mb-3 text-center">
                    <input type="submit" class="btn-check" id="btn-check-outlined" autocomplete="off" value="Generate Token">
                    <label class="btn btn-primary w-100" for="btn-check-outlined">Generate Token</label>
                </div>
            </form>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $email = trim($email);
        $data = $email . time();
        $token = md5($data);
        echo "<div class='container mt-4'>";
        echo "<div class='alert alert-success w-50 mx-auto shadow-sm'>";
        echo "<h4 class='alert-heading'>Generated Secure Token:</h4>";
        echo "<p><code>$token</code></p>";
        echo "<hr>";
        echo "<p><strong>Password Reset URL:</strong><br>";
        echo "<a href='https://yourwebsite.com/reset_password.php?token=$token' target='_blank'>https://yourwebsite.com/reset_password.php?token=$token</a></p>";
        echo "</div></div>";
    }
?>