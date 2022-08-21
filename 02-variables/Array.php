<?php
// Arrye
// $cars = array("Volvo", "BMW", "Toyota");
// echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
// rsort ($cars);
// sort($cars);

// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// echo $age ;

// $car = array(
//     array("volve",3,5),
//     array("BMW",37,35),
//     array("Land Rover",17,19),
// );

// echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
// echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
// echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
// echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";


// $t = date("day");

// if ($t < "10") {
//   echo "Have a good morning!";
// } elseif ($t < "20") {
//   echo "Have a good day!";
// } else {
//   echo "Have a good night!";
// }

// $data = "day";

// switch ($data) {
//   case "day":
//     echo "its saturday!";
//     break;
//   case "sunday":
//     echo "its sunday!";
//     break;
//   case "monday":
//     echo "its monday!";
//     break;
//   default:
//     echo "its weekdays !";
// }

//Loops

// for($x=0; $x<=100;$x++){
//   echo "the number is ".$x ."<br>";
// }
// $arr = ["element0","element1","element2","element3",];
// for ($i=0;$i<count($arr);$i++){
//            echo $arr[$i];
// }
// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

// foreach($age as $x => $val) {
//   echo "$x = $val<br>";
// }

// $colors = Array("red","green","blue", "yellow");
// foreach($colors as $value){
//   echo "$value "."<br>";
// }
// do{
//   echo "the number is : $x .<br>";
//   $x++;
//  } while($x <=5);

//  for($x=1; $x<=10;$x++){
//   if($x<=10){
//     echo $x  ;
//   }if($x<10)
//   echo "-";
//   else{
//   echo "\n";
//   }
//  }

//Question 

// for($i=0;$i<=5;$i++){  
//   for($j=1;$j<=$i;$j++){  
//   echo "* ";  
//   }  
//   echo "<br>";  
//   }  

// for($i=0;$i<=5;$i++){  
//   for($j=5-$i;$j>=1;$j--){  
//   echo "* ";  
//   }  
//   echo "<br>";  
//   }  

// for ($x = 1; $x <= 5; $x++) {
//   echo " * ";
// }  echo"<br>";
// for ($x = 0; $x <= 3; $x++) {
//   echo "  &nbsp &nbsp  &nbsp*<br>";
// }

// $n = 6;
// $x = 1;
// for($i=1;$i<=$n-1;$i++)
// {
//  $x*=($i+1); 
// }
// echo "The factorial of  $n = $x"."\n";


// $a=5;
// while ($a <= 15) {
//   # code...
//   echo " th number ".$a;
//   $a++;
// }
// 
// prime number function 

// function Isprime($num)
// {
//    if ($num == 1)
//    return 0;
//    for ($i = 2; $i <= $num/2; $i++)
//    {
//       if ($num % $i == 0)
//       return 0;
//    }
//    return 1;
// }
// $num = 7;
// $value = Isprime($num);
// if ($value == 1)
//    echo "It is a prime number";
// else
//    echo "It is a non-prime number";


// function check_palindrome($string) 
// {
//   if ($string == strrev($string)){
//     echo "$string"."  :true , is palindrome"."<br>";
     
//     }
//   else{
//     echo "$string"."  :false , not palindrom"."<br>";
	  
//   }
// }
// echo check_palindrome("madam")."\n";
// echo check_palindrome("122")."\n";
// echo " *********** <br>";

$Str = "JAVATPOINT";
$length = strlen($Str);
for($i=($length-1);$i >=0 ; $i--){
  echo $Str[$i];
}


?>













