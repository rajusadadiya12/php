<!-- File Upload:
• Develop a script that accepts file uploads and displays the file name using
$_FILES. -->
<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">
    <label>Select a file to upload:</label><br>
    <input type="file" name="uploadedfile"><br><br>
    <input type="submit" name="uploadbtn" value="Upload">
</form>

<?php
if (isset($_POST['uploadbtn']) && isset($_FILES['uploadedfile'])) 
{
    $fileName = $_FILES['uploadedfile']['name'];
    echo "<p>Uploaded file name: <strong>$fileName</strong></p>";
}
?>

</body>
</html>
