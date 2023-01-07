<?php
session_start();

$current_file_name = basename($_SERVER['PHP_SELF']);
$file_last_modified = filemtime($current_file_name); 
$info=date("l, dS F, Y, h:ia", $file_last_modified);
echo "Last modified:",$info;
$_SESSION['info'] = $info;

echo"<a href= 'task.php'>"
?>