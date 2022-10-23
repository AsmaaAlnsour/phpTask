<?php
//1
//Convert all characters to uppercase:
echo strtoupper("Hello WORLD!<br>");
//Convert all characters to lowercase:
echo strtolower("Hello WORLD.<br>");
// converts the first character of a string to uppercase
echo ucfirst("hello world!<br>") ;
// converts the first character of each word in a string to uppercase
ucwords("hello world!<br>") ;

//2
$str1= '082307'; 
echo substr(chunk_split($str1, 2, ':'), 0, -1)."<br>";


//3
// Test if string contains the word 
$mystring = "The quick brown fox jumps over the lazy dog";
$word = "fox";
if(strpos($mystring, $word) !== false){
    echo "Word Found!<br>";
} else{
    echo "Word Not Found!<br>";
}

//4
$path = 'www.example.com/public_html/index.php';
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name."<br>"; // "index.php"

//5
$mailid  = 'rayy@example.com';
$user = strstr($mailid, '@', true);
echo $user."<br>";

//6
$str1 = 'rayy@example.com';
echo substr($str1, -3)."<br>";


//7
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  echo password_generate(7)."<br>";

//8
$str = 'the quick brown fox jumps over the lazy dog.';
echo preg_replace('/the/', 'That', $str, 1)."<br>"; 

//9
$str1 = 'football';
$str2 = 'footboll';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $str1[$str_pos], $str2[$str_pos]);
printf("<br>");

//10
$str = "Twinkle, twinkle,little,star.";
$arra1 = explode(",", $str);
var_dump($arra1);
echo "<br>";

//11
$cha = 'a';
$next_cha = ++$cha; 
//The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'.
if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }
echo $next_cha."<br>";



//12
$original_string = 'The brown fox';
$string_to_insert ='quick';
$insert_pos = 4;
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
echo $new_string."<br";


//12.1
$s = 'The quick brown fox';
$arr1 = explode(' ',trim($s));
echo $arr1[0]."<br>";

//13
$x = '000547023.24';
$str1 = ltrim($x, '0');
echo $str1."<br>";
echo str_replace("0", "", $x)."<br>";


//14
$my_str = 'The quick brown fox jumps over the lazy dog';
echo str_replace("fox", " ", $my_str)."<br>";

// 15
$my_str = 'The quick brown fox jumps over the lazy dog---';
echo rtrim($my_str, '-')."<br>";

//16
function RemoveSpecialChar($str)
{
    $res = preg_replace('/[0-9\@\.\;\" "]+/', '', $str);
    return $res;
}
$str = "My name is  hello and email hello.world598@gmail.com;";
$str1 = RemoveSpecialChar($str);
echo "My UpdatedString: ", $str1."<br>";

//17
$my_string = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $my_string), 0, 5))."<br>";

//18
$str1 = "2,543.12";
$x = str_replace( ',', '', $str1);
if( is_numeric($x))
  {
  echo $x."<br>";
  }


  //19
  for ($x = ord('a'); $x <= ord('z'); $x++)
 echo chr($x);
 echo "<br>";



 // challenge
 $my_string = 'The quick@brown fox,jumps@over the lazy dog';
 $res = preg_replace('/[0-9\@\.\;\" ",]+/', ' ', $my_string);
 echo implode(' ', array_slice(explode(' ', $res), 0, 5))."<br>";
