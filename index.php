<?php
include "Function.php";
//include "Stack.php";

$string1 = "8 * 2 /  (9 - 2)";
$string2 = "7 - 3 / 5 * ( 6 +4 ))";
$string3 = "({ (4 - 6 * 7";
$string4 = "(13*43+[23+32]-{32+2*4})";
$string5 = "(13*43+[((23+32]-{32+2*4})";



if(checkBracket($string1)){
    echo "Correct"."<br>";
}else{
    echo "Incorrect"."<br>";
}

if(checkBracket($string2)){
    echo "Correct"."<br>";
}else{
    echo "Incorrect"."<br>";
}

if(checkBracket($string3)){
    echo "Correct"."<br>";
}else{
    echo "Incorrect"."<br>";
}

if(checkBracket($string4)){
    echo "Correct"."<br>";
}else{
    echo "Incorrect"."<br>";
}

if(checkBracket($string5)){
    echo "Correct"."<br>";
}else{
    echo "Incorrect"."<br>";
}