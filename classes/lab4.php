<?php
echo "hello world!<br><br>";

$a = 23;
$b  = "abc"; 
$c = TRUE; 

$d = 1.234; 
$e = 7E-10;
$f = 1.2e3;


//-----------------------------------------------------------
echo 'Variables:<br><br>';
print $a .$b . "<br>";
echo $a . "<br>";

echo $a.' is '.gettype($a).'<br>';
echo $b.' is '.gettype($b).'<br>';
echo "<br>";
echo "<br>";


//-----------------------------------------------------------
echo 'if else: <br>';
if (is_int($a)) {
    $a += $a;
    echo 'double integer a: '.$a.'<br>';
}
else{
    echo 'not integer: '."$a<br>";
}

if (is_string($b)) {
    echo "String: $b";
}
else {
    echo "not String: $b";
}

echo "<br>";
echo "<br>";

//-----------------------------------------------------------
echo ' Arrays: <br>';
$array_int = array(1, 2, 3); 
var_dump($array_int); 

echo "<br>";
foreach ($array_int as $el) {
    echo $el . ' ';
}

echo "<br>";

$array_string = array("a", "b", "c", "d"); 
var_dump($array_string);
echo "<br>";

for($i = 0; $i < 4; $i++){
    echo $array_string[$i] . " ";
}

echo "<br>";
echo "<br>";


echo 'Multi-dimensional arrays: <br>';
$myarray = array(
      
    array(1, 2, 3),
    array(4, 5, 6)
);
var_dump($myarray); 
echo "<br>";

echo $myarray[1][1];
echo "<br>";
echo $myarray[1][2];
echo "<br>";
echo "<br>";

//-----------------------------------------------------------
echo 'Function: <br>';
function funct($var) 
{
    for($i=0; $i < $var;$i++){
        echo $i."<br>";
    }
   
}

$var = 5;
funct($var);

echo "<br>";

//-----------------------------------------------------------
echo 'String: <br>';
$str1 = "Hello World , Yehor !";
$arr1 = explode(" ", $str1); 

echo "$str1<br>";
var_dump($arr1);
echo "<br>";

$str2 = implode(" ", $arr1);

print "$str2<br>";
echo "<br>";

//-----------------------------------------------------------

echo '<-OOP-><br>';
include_once "Planet.php";

include_once "SolarSystemPlanet.php";

$obj = new Planet("Gh350xy6", 150, FALSE);
$obj1 = new SolarSystemPlanet("Earth", 50, TRUE, 166);
$obj2 = new SolarSystemPlanet("Mars", 20, FALSE, 255);

echo $obj;
echo "<br>";

echo $obj1;
echo "<br>";
echo $obj2;
echo "<br>";


?>



