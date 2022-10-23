<?php
// 1.	Write a script to generate the following paragraph 
 
// "The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
// The words 'red', 'green' and 'white' should come from $colors array.

function paragraph($color){

    print("The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[0] carpet, the $color[1] lawn, the $color[2] house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
    );}
    paragraph(array('red', 'green', 'white'));
//*****************************************************************************************************************************************
//     2.	$colors = array('white', 'green', 'red') 
// Write a PHP script that will display the colors as unordered list :
// Expected Output:  
// •	green
// •	red
// •	white

function listcolor($color){
    echo "<ul>";
foreach ($color as $c){
print "<li>$c</li>";
}
echo "</ul>";
}

listcolor(array('white', 'green', 'red'));

 //*****************************************************************************************************************************************
//  3.	$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

//  Create a PHP script to displays the capital and country name from the above array $cities. Sort the list by the capital of the country. 
//  Expected Output:
//  The capital of Netherlands is Amsterdam 
//  The capital of Greece is Athens 
//  The capital of Germany is Berlin 

function capital($cities){
    foreach ($cities as $key=>$c){
        print("The capital of $key is $c<br> ");
    }

}

capital(array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ) 
);
 //*****************************************************************************************************************************************

// 4.	$color = array (4 => 'white', 6 => 'green', 11=> 'red');

// Write a PHP script to display the first element of the above array. 
// Expected Output:  white

function white($color){
    print( "<br>" . $color[4] ."<br><br>" );
// echo rest($color);
}
white( array (4 => 'white', 6 => 'green', 11=> 'red'));

//*****************************************************************************************************************************************
// 5.	Write a PHP script that inserts a specific new item in an array in any position.
 
// Sample Input:

// Array 1 2 3 4 5   
// Location: 4
// New Item: $

// Expected Output: 1 2 3 $ 4 5

function newitem($arr , $Location , $Item){
    // $index=
    array_splice( $arr, $Location, 0, $Item ); 
    foreach ($arr as $x) 
    {print "$x ";}
    print "<br>";

};
newitem(array(1 ,2 ,3 ,4 ,5) , 4 , "$");
//*****************************************************************************************************************************************
// 6.	Write a PHP script to sort the following associative array depending on the key value [asc] : 

// Sample Input: 

// $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

// Expected Output:

// c = apple
// b = banana
// d = lemon
// a = orange



function sortfruits($fruits){
    print "<br>";
    ksort($fruits);
    foreach ($fruits as $key => $val) {
        print "$key = $val<br>";
    }
}
sortfruits(array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple"));


//*****************************************************************************************************************************************

// 7.	Write a PHP script to calculate and display the average temperature for the recorded reads, also the script should display the list of the five lowest and the five highest temperatures 

// Sample Input:  78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73

// Expected Output:
// Average Temperature is: 70.6 
// List of seven lowest temperatures: 60, 62, 63, 63, 64, 
// List of seven highest temperatures: 76, 78, 79, 81, 85,
 

// $temp_array = explode(',', $month_temp);
function temp($temp_array){
$total = 0;
$length = count($temp_array);
foreach($temp_array as $temp)
{
 $total += $temp;
}
 $avg = $total/$length;
 echo "<br><br>Average Temperature is : ".$avg."
"; 
sort($temp_array);
echo " <br>List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";
for ($i=($length-5); $i< ($length); $i++)
{
echo $temp_array[$i].", ";
}
print "<br><br>";
}
temp(array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73));

//*****************************************************************************************************************************************
// 8.	Write a PHP program to merge the following two arrays. 

// Sample Input: 

// $array1 = array("color" => "red", 2, 4);
// $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

// Expected Output:

// Array
// (
//     [color] => green
//     [0] => 2
//     [1] => 4
//     [2] => a
//     [3] => b
//     [shape] => trapezoid
//     [4] => 4
// )
function merge($arr1,$arr2){

$result = array_merge($arr1, $arr2);
print_r( $result )."<br><br>";
}
$arr1 = array("color" => "red", 2, 4);
$arr2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
merge($arr1,$arr2);

//*****************************************************************************************************************************************'
// 9.	Write a PHP function to change the following array's and convert all the strings to upper case. 

// Sample Input:

// $colors = array("red","blue", "white","yellow");

// Expected Output :

// Array
// (
//     RED
//     BLUE
//     WHITE
//     YELLOW

// )
function upper($colors){
    print ("<br><br>Array ( <br>");
    foreach ($colors as $c ) {

    print(strtoupper("$c"))."<br>";

};
print (" )<br><br>");
};
upper(array("red","blue", "white","yellow"));
//*****************************************************************************************************************************************'
// 10.	Write a PHP function to change the following array's and convert all the strings to lower case. 

// Sample Input:

// $colors = array("RED","BLUE", "WHITE","YELLOW");

// Expected Output :

// Array
// (
//     red
//     blue
//     white
//     yellow

// )

function lower($colors){
    print ("<br><br>Array ( <br>");
    foreach ($colors as $c ) {

    print(strtolower("$c"))."<br>";

};
print (" )<br><br>");
};
lower(array("RED","BLUE", "WHITE","YELLOW"));

//*****************************************************************************************************************************************'
// 11.	 Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4. 

// Expected Output: 200,204,208,212,216,220,224,228,232,236,240,244,248

function numbers($num){
    // print ("<br><br>Array ( <br>");
    for ($i=200 ; $i<250 ; $i++) {

    print($i).",";
$i=$i+$num-1 ;
};
print ("<br><br>");
};
numbers(4);

//*****************************************************************************************************************************************'
// 12.	Write a PHP script to get the shortest/longest string length from an array. 

// Sample Input:

//  $words =  array("abcd","abc","de","hjjj","g","wer")

// Expected Output : 

// The shortest array length is 1. The longest array length is 4.


function length($words){
    $new_array = array_map('strlen', $words);
    print_r($new_array)  ;
    print "<br><br>" ;

    echo "The shortest array length is " . min($new_array) .
    ". The longest array length is " . max($new_array).'.';


};
length(array("abcd","abc","de","hjjj","g","wer"));
print "<br><br>" ;
//*****************************************************************************************************************************************'

$aa=array ("abcd","abc","de","hjjj","sdfghjh","g","wer");
$x=strlen($aa[0]);
$y=strlen($aa[0]);
for ($i=0 ; $i<count($aa) ; $i++){
if (strlen($aa[$i])>=$x){
    $x=strlen( $aa[$i] );
} else if  (strlen($aa[$i])<=$y){
    $y= strlen($aa[$i]);
};};
print "Max length is >>> " . ($x) . "<br>";
print  "Min length is >>> " . ($y);

print "<br><br>" ;




//*****************************************************************************************************************************************'
// 13.	Write a PHP script to generate unique random 10 numbers within a specific range. 

// Sample Input: (11, 20)
// Sample Output: 17 16 13 20 14 19 18 15 11 12

function R($num1,$num2){
$n=range($num1,$num2);
shuffle($n);
print_r ($n) ;
};
R (11, 20);
print "<br><br>" ;
//*****************************************************************************************************************************************'
// function R($num1,$num2){
//     $n=range($num1,$num2);
//     shuffle($n);
//     print_r ($n) ;
//     // for ($x=0; $x< 10; $x++)
//     // {
//     // echo $n[$x].' ';
//     // }
//     // echo "\n"
//     };
//     R (11, 20);
//     print "<br><br>" ;
// 14.	Write a PHP script that returns the lowest integer in the array  that is not 0. 

// Sample Input: $array1 = array( 2, 0, 10, 12, 6) 
// Sample Output:  2
function minvalues(Array $values) 
{

return min(array_diff(array_map('intval', $values), array(0)));
}
print_r(minvalues(array( 2, 0, 10, 12, 6))."<br>");


