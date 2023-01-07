<?php

//Convert some characters to HTML entities
$str = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
echo htmlentities($str);

echo "<br>-------------<br>";

//returns a string from the elements of an array.
//Syntax//implode(separator,array)
$arr = ['Hello','World!','Beautiful','Day!'];
echo implode("&",$arr);

echo "<br>-------------<br>";
//Break a string into an array.
//Syntax//explode(separator,string,limit)
//---------
$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));

echo "<br>-------------<br>";

$str = 'one,two,three,four';
print_r(explode(',',$str,3));


echo "<br>-------------<br>";

//Join array elements with a string
//Syntax//join(separator,array)
$arr = ['Hello','World!','Beautiful','Day!'];
echo join(" ",$arr);
echo "<br>-------------<br>";
?>