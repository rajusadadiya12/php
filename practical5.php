<!-- Resume Generator Using String Formatting
Objective: To create a formatted resume using string manipulation and array data.
<?php -->
$name = "abc";
$email = "abc@example.com";
$phone = "+12345678910";
$education = "degree :- MCA";
$skills = "Python,PHP,SQL";
$experience = "Software Intern :- company :- Infosys";


$resume = <<<RESUME
___________________________________________________
Name: $name
Email: $email
Phone: $phone
Education: $education
skills: $skills 
Experience: $experience    
___________________________________________________
RESUME;

echo "<pre>$resume</pre>";
?>
