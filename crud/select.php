<?php
require_once('config.php');
echo "<br>"
?>
<?php

$sql = "SELECT * FROM koreanDrama where 1";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table style='border: solid 1px black;'><tr style='border: solid 1px black;'><th style='border: solid 1px black;'>ID</th><th style='border: solid 1px black;'>DramaName</th><th style='border: solid 1px black;'>Discription</th></tr>";
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
  echo "<tr style='border: solid 1px black;'><td style='border: solid 1px black;'>" . $row["id"] . "</td><td style='border: solid 1px black;'> " . $row["DramaName"] . "</td><td style='border: solid 1px black;'> " . $row["Discription"] ."</td></tr>"; 

    }
  } else {
    echo "0 results";
  }
  echo "</table>";
  mysqli_close($con);
  ?>

  <?php

//   echo "<tr><td>" "id: " . $row["id"]. " DramaName: " . $row["DramaName"]. "Discription: " . $row["Discription"]. "<br>";
