<?php
//1
function primenumber($MyNum) {
    $n = 0;
  
    for($i = 2; $i < ($MyNum/2+1); $i++) {
      if($MyNum % $i == 0){
        $n++;
        break;
      }
    }
  
    if ($n == 0){
      echo $MyNum." is a prime number.<br>";
    } else {
      echo $MyNum." is not a prime number.<br>";
    }
  }
  primenumber(21);
  primenumber(11);

  //2
  function Reverse($str){
    return strrev($str);
}
echo Reverse("remove")."<br>";

//3
function lowercases($str){
      if (ctype_lower($str)) {
         echo "$str consists of all lowercase letters. <br> ";
      }else {
         echo "$str does not have all lowercase letters. <br> ";
      }
   }
   lowercases("remove");
   lowercases("Remove");

   //4 //5
   function swap($x , $y){
   $z=$x;
   $x=$y;
   $y=$z;
   echo "X=".$x." Y=".$y."<br>" ;
 }
 swap(4,5);

 //6

 function Armstrong($num){
    $total=0;  
$x=$num;  
while($x!=0)  
{  
$rem=$x%10;  
$total=$total+$rem*$rem*$rem;  
$x=$x/10;  
}  
if($num==$total)  
{  
echo "Yes it is an Armstrong number<br>";  
}  
else  
{  
echo "No it is not an armstrong number<br>";  
}  
}
Armstrong(407);

//7

// // PHP code to check for Palindrome number in PHP
// // Function to check for Palindrome
// function Palindrome($number){ 
//     $temp = $number; 
//     $new = 0; 
//     while (floor($temp)) { 
//         $d = $temp % 10; 
//         $new = $new * 10 + $d; 
//         $temp = $temp/10; 
//     } 
//     if ($new == $number){ 
//         return 1; 
//     }
//     else{
//         return 0;
//     }
// } 
 
// // Driver Code
// $original = 1441;
// if (Palindrome($original)){ 
//     echo "Palindrome"; 
// }
// else { 
// echo "Not a Palindrome"; 
// }


// PHP code to check for Palindrome string in PHP
// Using strrev()
function PalindromeString($string){ 
    
    $stringnew = str_replace(" ","",$string);
    if (strrev($stringnew) == $stringnew){ 
        echo "Palindrome<br>"; 
    }
    else{
        
        echo "Not a Palindrome<br>"; 

    }
} 
 

PalindromeString("eva can i see bees in a cave");

//8
function RemoveDuplicate($arr){
    print_r(array_unique($arr));

}

RemoveDuplicate(array(1,2,5,2,6,7,5));










//1
function year_check($my_year){
    if ($my_year % 400 == 0)
       print("It is a leap year<br>");
    else if ($my_year % 100 == 0)
       print("It is not a leap year<br>");
    else if ($my_year % 4 == 0)
       print("It is a leap year<br>");
    else
       print("It is not a leap year<br>");
 }
 year_check(2013);
 year_check(2016);



 //2
 function season($temp){
    if (20>$temp)
       print("We are in winter<br>");
    else 
       print("It is summertime<br>");
 }
 season(5);
 season(20);



 //3
 function Sum($num1 , $num2){
    if ($num1 == $num2)
       print(($num1+$num2)*3)."<br>";
    else 
       print($num1+$num2)."<br>";
 }

 Sum(2,2);
Sum(5,6);

//4
function Sum30($num1 , $num2){
    $x=$num1+$num2;
    if ($x == 30)
       print("sum=30")."<br>";
    else 
       print("false")."<br>";
 }

 Sum30(2,2);
Sum30(15,15);


//5
function multiple3($num1){
    if ($num1%3 ==0){
       print("True")."<br>";
    }
    else {
       print("false")."<br>";
 }
}
 multiple3(2);
 multiple3(15);

 //6
 function inclusive($num){
    if ($num>=20 && $num<=50){
       print("True")."<br>";
    }
    else {
       print("false")."<br>";
 }
}
inclusive(2);
inclusive(25);

//7
function largest($num1,$num2,$num3){
    if ($num1>=$num2 && $num1>=$num3){
        print($num1)."<br>";
     }
     else if  ($num2>=$num1 && $num2>=$num3){
        print($num2)."<br>";
     }else {
        print($num3)."<br>";  }
}

largest(1,5,2);

//8
function electricity($unit){
if ($unit<=50){
    print($unit*2.5."JOD<br>");
} else if($unit>50&&$unit<=150) {
    print((50*2.5)+($unit-50)*5 ."JOD"."<br>");
}else if($unit>150&&$unit<=250) {
    print((50*2.5)+(100*5)+($unit-150)*6.2."JOD"."<br>");
}else{
    print((50*2.5)+(100*5)+(100*6.2)+($unit-250)*7.5."JOD"."<br>");
}
}
electricity(70);

//9
function cal($num1,$num2,$x){
if($x=="-"){
    print($num1-$num2) . "<br>";
} else if ($x=="+"){
    print($num1+$num2). "<br>";
}else if ($x=="/"){
    print($num1/$num2). "<br>";
}else if ($x=="*"){
    print($num1*$num2). "<br>";
}else {
    print("Pls Check input") . "<br>";
}
}
cal(5,7,"*");
cal(5,7,"+");

//10
function age($num){
    if ($num>=18){
        print("is eligible to vote")."<br>";
     }
     else {
        print("is no eligible to vote")."<br>";  }
}

age(15);
age(21);

//11

function n($num){
    if ($num>0){
        print("Positive")."<br>";
     }
     else if ($num<0){
        print("Negative")."<br>";  }
        else if ($num==0){
            print("zero")."<br>";  }
}

n(15);
n(-21);
n(0);

//12
function grade($num1,$num2,$num3,$num4,$num5,$num6,$num7,$num8,$num9){
$average=($num1+$num2+$num3+$num4+$num5+$num6+$num7+$num8+$num9)/9;
  if($average<=60 && $average>=0){
    print("F")."<br>";  
} else if ($average<=70 && $average>60){
    print("D")."<br>";  
} else if ($average<=80 && $average>70){
    print("C")."<br>";  
} else if ($average<=90 && $average>80){
    print("B")."<br>";  
}else if ($average<=100 && $average>90){
    print("A")."<br>";  
}else {
    print("check your input")."<br>"; 
}
}

grade(60,86,95,63,55,74,79,62,50);

