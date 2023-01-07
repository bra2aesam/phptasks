<?php
require_once('config.php');
echo "<br>"
?>
<?php
$sql="INSERT INTO koreanDrama (id, DramaName, Discription)
VALUES ('1','Reborn Rich','is an ongoing South Korean television series adapted from the original web novel of the same name, starring Song');";

$sql .= "INSERT INTO koreanDrama (id, DramaName, Discription)
VALUES ('2','Vincenzo','During a visit to his motherland, a Korean-Italian mafia lawyer gives an unrivaled conglomerate a taste of its own medicine with a side of justice.');";

$sql .= "INSERT INTO koreanDrama (id, DramaName, Discription)
VALUES ('3','Itaewon Class','In a colorful Seoul neighborhood, an ex-con and his friends fight a mighty foe to make their ambitious dreams for their street bar a reality');";

$sql .= "INSERT INTO koreanDrama (id, DramaName, Discription)
VALUES ('4','Descendants of the Sun','When the captain of a Korean special forces unit, Yoo Shi Jin (Song Joong Ki), catches a thief on his day off alongside his friend and fellow soldier Seo');";


if (mysqli_multi_query($con, $sql) === TRUE) {
    echo "New records created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
  
  $con->close();


