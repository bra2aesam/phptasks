<?php 
// include_once() تحذير فقط/ هل يتظمن هذا الملف 
require_once('config.php')
// أجباري/مطلوب لو ما وجد الملف error
?>
<?php
// 
// $connection = new PDO($dsn, $dbuser, $dpuserpassword,$options);
//Php DataBase Object (PDO)
// $sql = "CREATE TABLE  IF NOT EXISTS ideastable (
//     id INT UNSIGNED AUTO_INCREMENT,
//     title VARCHAR (40) NOT NULL,
//     text TEXT NOT NULL,
//     PRIMARY KEY(id)); ";
$sql ="INSERT INTO brand (id,moe,geovani) 
VALUES(NULL,'My New Book','fgsdfghjgfjhdgfgdfsghjgdfhfgj')";
// $connection->exec($sql);

// echo "You are connected to the database successfully";
// if (mysqli_connect_errno()) {
//     echo "Failed to connect to MySQL: " . mysqli_connect_error();
//     exit();
// }else{
//     echo "You are connected to the database successfully";
//     echo (mysqli_connect_errno());
// }
 ?>
<?php

// Check connection

$con->query($sql);


$sql ="SELECT * FROM brand";

$con->query($sql);
echo "<br>";
echo "<pre>";
$data = mysqli_query($con, $sql);
foreach($data as $dd){
    echo $dd['geovani'];
}
// print_r($data);
echo "</pre>";
?>