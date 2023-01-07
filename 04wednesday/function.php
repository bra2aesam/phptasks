<?php
//============1==============//
// <!-- Functions
// 1.	Write a PHP script to check if the inserted number is a prime number 
// Sample Input:  3
// Expected Output: 3 is a prime number  -->

function checkPrime($num)
{
   if ($num == 1)
   return 0;
   for ($i = 2; $i <= $num/2; $i++)
   {
      if ($num % $i == 0)
      return 0;
   }
   return 1;
}
$num = 3;
$flag_val = checkPrime($num);
if ($flag_val == 1)
   echo " $num is a Prime Number";
else
   echo " $num is a non-Prime Number";


//============2==============//
// <!-- 2.	Write a PHP script to reverse a string 
// Sample Input:  remove
// Expected Output: evomer -->
function reverseString($rev1)
{
 $n = strlen($rev1);
 if($n == 1)
   {
    return $rev1;
   }
 else
   {
   $n--;
   return reverseString(substr($rev1,1, $n)) . substr($rev1, 0, 1);
   }
}
print_r(reverseString('remove')."\n");




//============3==============//
// <!-- 3.	 Write a PHP script to check if the all string characters are lower cases
// Sample Input:  remove
// Expected Output: Your String is Ok  -->
$strings = array('remove');
foreach ($strings as $testing) {
    if (ctype_lower($testing)) {
        echo "Your String is Ok\n";
    } else {
        echo "No\n";
    }
}



//============4==============//
// <!-- 4.	Write a PHP function to swap to variables?
// Sample Input:  x = 12     y= 10
// Expected Output: y=12   x=10  -->
$x = 12;
$y = 10;
echo('<pre>');
echo "Before swapping:x= $x  , y=$y";
list($x, $y) = array($y, $x);
echo('</pre>');
echo "After swapping:x= $x  , y=$y";



//============5==============//
// <!-- 6.	Write a PHP function to check if a number is an Armstrong number or not ?
// **Armstrong number is a number that is equal to the sum of cubes of its digits.

// Sample Input:  407
// Expected Output: 407 is Armstrong Number  -->

// function armstrongCheck($number){
//     $sum = 0; 
//     $x = $number; 
//     while($x != 0) 
//     { 
//         $rem = $x % 10; 
//         $sum = $sum + $rem*$rem*$rem; 
//         $x = $x / 10; 
//     } 
     
//     // if true then armstrong number
//     if ($number == $sum)
//         return 1;
     
//     // not an armstrong number   
//     return 0;   
// }
 
// // Driver Code
// $number = 407;
// $flag = armstrongCheck($number);
// if ($flag == 1)
//     echo "$number is Armstrong Number";
// else
//     echo "$number is not  Armstrong Number";
    



//============8==============//
// <!-- 8.	Write a PHP function to remove duplicates from an array ?
// Sample Input:  
// $array1 = array(2, 4, 7, 4, 8, 4);
// Expected Output:
// $array1 = array(2, 4, 7, 8);
//   -->

$array = array(1, 2, 2, 3);
print_r( array_unique($array));

?>