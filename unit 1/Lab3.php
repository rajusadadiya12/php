<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lab 3: Name Formatting</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body class="bg-light">
        <div class="container d-flex justify-content-center align-items-center min-vh-75">
            <div class="card shadow-lg p-4 rounded-3 w-50">
                <h3 class="text-center mb-4">Certificate Name Formatter</h3>
                <form method="POST">
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Enter Full Name</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" required>
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-primary w-100">Format Name</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullname = $_POST['fullname'];
        $lowercaseName = strtolower(trim($fullname));
        $words = explode(" ", $lowercaseName);
        foreach ($words as &$word) {
            $word = ucfirst($word);
        }
        $formattedName = implode(" ", $words);
        echo "<div class='container mt-4'>";
        echo "<div class='alert alert-success w-50 mx-auto'>";
        echo "<h4 class='alert-heading'>Formatted Name:</h4>";
        echo "<p><strong>$formattedName</strong></p>";
        echo "</div></div>";
    }
?>