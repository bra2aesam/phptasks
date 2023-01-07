<?php
session_start();

$file = basename($_SERVER['PHP_SELF']); 
$no_of_lines = count(file($file)); 
echo "There are $no_of_lines lines in $file"."\n";
$_SESSION['no_of_lines']= $no_of_lines;

echo"<a href= 'task.php'>"
?>
