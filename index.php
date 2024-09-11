<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 3</title>
</head>
<body>

<?php
    echo file_get_contents("text.txt");
    echo "<br>";
    echo file_put_contents("text.txt","This is a test file, created by Group 3 of BSIT-3F.");
    echo "<br>";
    echo file_exists("text.txt");
    echo "<br>";
    print_r(file("text.txt",));
?>

</body>
</html>