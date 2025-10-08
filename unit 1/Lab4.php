<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lab 4: CSV Parsing</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body class="bg-light">
        <div class="container d-flex justify-content-center align-items-center min-vh-75">
            <div class="card shadow-lg p-4 rounded-3 w-75">
                <h3 class="text-center mb-4">CSV</h3>
                <form method="POST">
                    <div class="mb-3">
                        <label for="csv" class="form-label">Enter Student Data</label>
                        <textarea class="form-control" id="csv" name="csv" rows="4" required></textarea>
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-primary w-100">Process CSV</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $csvData = trim($_POST['csv']);
        $lines = explode("\n", $csvData);
        echo "<div class='container d-flex justify-content-center align-items-center mt-5'>";
        echo "<div class='card shadow-lg p-4 rounded-3 w-75'>";
        echo "<h4 class='mb-3 text-center'>Batch Evaluation Result</h4>";
        foreach ($lines as $line) {
            $line = trim($line);
            if ($line !== "") {
                $parts = explode(",", $line);
                $name = $parts[0];
                $scores = array_slice($parts, 1);
                $avg = array_sum($scores) / count($scores);
                $summary = implode(" - ", [$name, "Avg: " . number_format($avg, 2)]);
                echo "<p class='mb-2 text-center'><strong>$summary</strong></p>";
            }
        }
        echo "</div></div>";
    }
?>