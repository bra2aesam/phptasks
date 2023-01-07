<?php

//============1==============//
// Write a script to generate the following paragraph 
// "The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
// The words 'red', 'green' and 'white' should come from $colors array.
$color = array('white', 'green', 'red', 'blue', 'black');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";


//============2==============//
// $colors = array('white', 'green', 'red') 
// Write a PHP script that will display the colors as unordered list :
// Expected Output:  
// green
// red
// white
$color = array('white', 'green', 'red');
echo('<ul>');
echo('<li>'.$color[0].'</li>');
echo('<li>'.$color[1].'</li>');
echo('<li>'.$color[2].'</li>');
echo('</ul>');


//=============4=============//
// $color = array (4 => 'white', 6 => 'green', 11=> 'red');
// Write a PHP script to display the first element of the above array. 
// Expected Output:  white
echo '<br>';
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo reset($color)."\n";

//=============5=============//
// Write a PHP script that inserts a specific new item in an array in any position.
// Sample Input:
// Array 1 2 3 4 5   
// Location: 4
// New Item: $
// Expected Output: 1 2 3 $ 4 5
$befora = array( '1','2','3','4','5' );
echo 'befora array: '."\n";
foreach ($befora as $b) 
{echo "$b ";}
$insert = '$';
array_splice( $befora, 3, 0, $insert ); 
echo " \n After insert '$' the array is: "."\n";
foreach ($befora as $b) 
{echo "$b ";}
echo "\n";


//=============6=============//
// Write a PHP script to calculate and display the average temperature for the recorded reads, also the script should display the list of the five lowest and the five highest temperatures 
// Sample Input:  78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
// Expected Output:
// Average Temperature is: 70.6 
// List of seven lowest temperatures: 60, 62, 63, 63, 64, 
// List of seven highest temperatures: 76, 78, 79, 81, 85,
$num_month = array (78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73);
$sum = 0;
$num_length = count($num_month);
foreach($num_month as $temp)
{$sum += $temp;}
 $avgTemp = $sum/$num_length;
 echo "Average Temperature is: '.$avgTemp.'";


 //=============7=============//
// Write a PHP program to merge the following two arrays. 
// Sample Input: 
// $array1 = array("color" => "red", 2, 4);
// $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
// Expected Output:
// Array
// (   [color] => green
//     [0] => 2
//     [1] => 4
//     [2] => a
//     [3] => b
//     [shape] => trapezoid
//     [4] => 4)

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
echo('<pre>');
print_r(array_merge($array1,$array2));
echo('</pre>');

