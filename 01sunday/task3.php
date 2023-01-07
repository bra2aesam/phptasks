<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task3</title>
</head>
<body>
<!-- 3. Create a simple HTML form and accept the user’s name and display the name through a PHP echo statement.
 -->
<form method='POST'>
   <h2>Please input your name:</h2>
 <input type="text" name="name">
 <input type="submit" value="submit-name">
 </form>

<?php
//Retrieve name from query string and store to a local variable
$name = $_POST['name'];
echo "<h1> Welcome $name </h1>";
?>

</body>
</html>