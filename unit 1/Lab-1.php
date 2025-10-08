<html>
    <body>
        <head>
        <stlye>
        <style>
        body {
            background-color: #f4f4f4;
            padding: 10px;
        }

        .form-container {
            background-color: #fff;
            padding: 20px 20px;
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin: 15px 0 5px;
            color: #555;
        }

        input[type="text"],
        textarea {
            width: 50%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            resize: vertical;
        }

        textarea {
            min-height: 120px;
            width: 50%;
        }

        input[type="submit"] {
            background-color: green;
            color: white;
            padding: 12px 20px;
            margin-top: 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 50%;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .output {
            margin-top: 30px;
            background-color: #e9ffe9;
            border: 1px solid #c3e6c3;
            padding: 20px;
            border-radius: 5px;
        }
    </style>
        </style>
        <form method="post" action="">
            <label>Name:</label><br>
                <input type="text" name="name"><br><br>

                    <label>Email:</label><br>
                    <input type="text" name="email"><br><br>

                    <label>Message:</label><br>
                    <textarea name="message"></textarea><br><br>

                    <input type="submit" value="Submit">
        </form>
        </head>
    </body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Accept user input from POST
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    // Sanitize inputs
     // Remove whitespace
    $name = trim($name);  
    
    // Trim and convert to lowercase
    $email = strtolower(trim($email));    
    
    // Trim and escape HTML characters
    $message = htmlspecialchars(trim($message));    

    // Display sanitized output
    echo "<h3>Sanitized Output:</h3>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Message: " . nl2br($message) . "<br>";    
}
?>