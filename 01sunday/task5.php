<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task5</title>
</head>
<body>
<!-- 5. Write a PHP script to get the current file name.
 -->
<?php
$file = $_SERVER["SCRIPT_NAME"];
echo $file; 
?>

</body>
</html>