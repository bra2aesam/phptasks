<?php
$server="localhost";
$username="root";
$password="";
$database="korean_culture";

$con=mysqli_connect($server,$username,$password,$database);

if(!$con){
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "connected";
}