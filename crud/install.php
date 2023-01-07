<?php
require_once('config.php');
?>

<?php
$sql= "CREATE TABLE koreanDrama(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
DramaName VARCHAR(30) NOT NULL,
Discription TEXT(255) NOT NULL,
-- Posterimage VARCHAR(30) NOT NULL,

reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

-- image VARCHAR(50),
-- Created_AT DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,
-- Updated_AT DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,
)";


if(mysqli_query($con,$sql)){
    echo "Table koreanDrama created successfully";
} else {
  echo "Error creating table: " . mysqli_error($con);
}
mysqli_close($con);