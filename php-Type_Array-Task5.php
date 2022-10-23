<?php 
//************************************************* Indexed Arrays********************************************************************* */

$scores = [1, 2, 3, 4, 5];

print_r($scores) ;
print "<br>";

print ($scores[0]);






print "<br><br><br>";
//************************************************* Associative Arrays********************************************************************* */
$rates = [
	'Excellent' => 5,
	'Good' => 4,
	'OK' => 3,
	'Bad' => 2,
	'Very Bad' => 1
];
print_r($rates) ;
print "<br>";
print ($rates["Excellent"]);





print "<br><br><br>";
//************************************************* Multidimensional Arrays ********************************************************************* */


$tasks = [
	Array ('Learn PHP programming', 2),
	Array ('Practice PHP', 2) ,
	Array ('Work', 8),
	Array ('Do exercise', 1),
];
print_r($tasks) ;
print "<br>";
print_r ($tasks[1]) ;
print "<br>";
print ($tasks[1][1]) ;

print "<br><br><br>";

//************************************************************************************************************************************************* */
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
print "<br><br><br>";
//*************************************************************************************************************************************************
// 1.	Write a script to generate the following paragraph 
 
// "The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
// The words 'red', 'green' and 'white' should come from $colors array.

function paragraph($color){

    print("The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[0] carpet, the $color[1] lawn, the $color[2] house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
    );}
    paragraph(array('red', 'green', 'white'));
?>