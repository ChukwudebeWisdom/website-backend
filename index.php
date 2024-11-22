<?php
echo "MY WEBSITE <br>";

$myName = "WISDOM";
var_dump($myName);

$yearsOfExperience = 5;
echo "<br>";

var_dump($yearsOfExperience);
echo "<br>";

$height = 6.1;

$x = 10;
$y = 5;

echo $x - $y;
echo "<br>";

echo $x + $y;
echo "<br>";

echo $x * $y;
echo "<br>";

echo $x / $y;
echo "<br>";

echo $x % $y;
echo "<br>";

echo $x ** 2;
echo "<br>";

echo $x ** $y;
echo "<br>";


//increment and decrement operators
$x++; 

echo $x;
echo "<br>";

$y++;
echo $y;
echo "<br>";

$x--;

echo $x;
echo "<br>";

//Assignment Operators

$a = 100;
$b = 50;

// addition assignment
$a += $b;
echo $a;
echo "<br>";

//subtraction assignment
$a -= $b;
echo $a;
echo "<br>";
echo "<br>";

//logical operators
//Examples of logical operators: AND(&&), OR(||), XOR, NOT(!)

if ($a == 100 && $b == 50) {
    echo "WE ARE GOOD TO GO";
}
echo "<br>";
echo "<br>";

if ($a == 100 || $b == 55) {
    echo "WE ARE GOOD TO GO";
}
echo "<br>";
echo "<br>";

if ($a == 101 xor $b == 50) {
    echo "WE ARE GOOD TO GO";
}
echo "<br>";
echo "<br>";

if (!($a == 101)) {
    echo "WE ARE GOOD TO GO";
}
ECHO "<br>";

// 7/11/24
//PHP conditional statements
// There are four notable conditional statements in PHP viz

// If statement

// if... else statement

// if... elseif... else statement

// Switch statement

// IF STATEMENT
//____________________

//The if statement is one of the most important statement in PHP

//Example:
//______________

if (7>3) {
    echo "Have a good day";
}
// variable declaration
$my_name = "Damagemax303";

$present_time = date (format: "H:i");
echo "<br>";

echo "present_time: $present_time <br>";


if ($present_time >= 00.00 && $present_time < 12.00) {
    echo "<h3> GOOD MORNING, $my_name! </h3>";
}

elseif ($present_time >= 12.00 && $present_time <= 16.00) {
    echo "<h3> GOOD AFTERNOON, $my_name! </h3>";
}

elseif ($present_time >= 16.00 && $present_time <= 23.59) {
    echo "<h3> GOOD NIGHT, $my_name! </h3>";
}

else {
    echo "<h3> Hello, $my_name! </h3>";
}

// Switch statement
// __________________

$today = date (format: "D");
echo "Today is $today <br>";

switch ($today) {
    case "Mon":
        echo "Hello everybody, It's Monday. Have a great week!";
        break;
    case "Tue";
        echo "Hello everybody, It's Tuesday. Have a splendid week!";
        break;
    case "Wed";
        echo "Hello everybody, It's Wednesday. Have a lovely week!";
        break;
    case "Thur";
        echo "Hello everybody, It's Thursday. Have a beautiful week!";
        break;
    case "Fri";
        echo "Hello everybody, It's Friday. Have a gracious week!";
        break;
    case "Sat";
        echo "Hello everybody, It's Saturday. Have a wonderful weekend!";
        break;
    case "Sun";
        echo "Hello everybody, It's Sunday. Have a blessed day!";
        break;
    default;
    echo "Sorry, thid is not a day of the week";
    break;
}

echo "<br>";

// Php loops

// --while loops

$j = 2;
while ($j < 8) {
    echo $j;
    $j++;
}
echo "<br>";

$j = 2;
while ($j <= 8) {
    echo $j;
    $j++;
}

// --do...while loops

// --for -loops

// foreach -loops

// 11/11/2024

$numbers = 1;

echo $numbers."<br>";

$numbers++;

echo $numbers."<br>";

$numbers++;

echo $numbers."<br>";

//while loops
$numbers = 1;

while ($numbers <= 10) {
  echo $numbers."<br>";
  $numbers++;
}
//do while loop
$numbers = 1;
do {
   echo $numbers."<br>";
  $numbers++;
}while ($numbers <= 10) 

// for ($numbers = 1; $numbers <= 10;) {
//     echo $numbers.",<br>";
//   }
  
//   //for each
  
//   $cars = array('BMW', 'LEXUS', 'FERRARI', 'ROSEROISE');
  
//   echo "i love $cars{0} <br>";
//   echo "i love $cars{1} <br>";
//   echo "i love $cars{2} <br>";
//   echo "i love $cars{3} <br>"; */
  
//   $cars = array("BMW", "LEXUS", "FERARRI", "ROSEROIISE");
  
//   foreach ($cars as $car) {
//     echo "i love $car <br>";
//   }

// 
?>