<?php
include "Function.php";
include "Stack.php";

$string1 = "8 * 2 / ( 9 - 2)";
$string2 = "7 - 3 / 5 * ( 6 +4 ))";
$string3 = "({ (4 - 6) * 7)";
$string4 = "(13*43+[23+32]-{32+2*4})";
$string5 = "(13*43+[((23+32]-{32+2*4})";

echo checkBracket($string1)."<br>";
echo checkBracket($string2)."<br>";
echo checkBracket($string3)."<br>";
echo checkBracket($string4)."<br>";
echo checkBracket($string5)."<br>";