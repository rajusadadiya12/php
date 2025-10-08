<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lab 5: Comment Moderation</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body class="bg-light">
        <div class="container d-flex justify-content-center align-items-center min-vh-75">
            <div class="card shadow-lg p-4 rounded-3 w-75">
                <h3 class="text-center mb-4">Comment prac</h3>
                <form method="POST">
                    <div class="mb-3">
                        <label for="comment" class="form-label">Enter Your Comment</label>
                        <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $comment = $_POST['comment'] ?? '';
        $comment = trim($comment);
        $lowerComment = strtolower($comment);
        $safeComment = htmlspecialchars($comment);
        $bannedWords = ["scam", "fake", "spam", "hack"];
        $flagged = false;
        foreach($bannedWords as $word){
            if(strpos($lowerComment, $word) !== false){
                $flagged = true;
                break;
            }
        }
        echo "<div class='container d-flex justify-content-center align-items-center mt-5'>";
        echo "<div class='card shadow-lg p-4 rounded-3 w-75'>";
        echo "<h4 class='mb-3 text-center'>Result</h4>";
        if($flagged){
            echo "<div class='alert alert-danger text-center'>inappropriate content....</div>";
        }else{
            echo "<div class='alert alert-success text-center'>Comment is ok:</div>";
            echo "<p class='text-center'><strong>$safeComment</strong></p>";
        }
        echo "</div></div>";
    }
?>