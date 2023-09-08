<?php
//php browser run command is =  php -S localhost:800 fileName(one.php)
//php variable
$name = "Sanjoy Kundu";
$age = 20;
$address = "Madaripur";
$occupation = "Student";
printf("My name is %s", $name);
printf("\n");
printf("My name is %s. I am %d years old. I am from %s.", $name, $age, $address);


//print with sprintf()
$myName = "Sanjoy Kundu";
$subject = "Computer Science and Enginnering";
$startingYear = 2018;
$endingYear = 2022;
$info = sprintf("Welcome to Our Page. \n Hello Mr. %s. How are You? Your Subject is %s. I am starting my education journey from %d to %d years.", $myName, $subject, $startingYear, $endingYear);
echo $info;
echo "\n \n \n";


//constant variable
define("USER_NAME", 'Root');
define("HOST_NAME", 'Localhost');
define('Password', ' ');
define("DB_NAME", 'Simple Website');
echo USER_NAME;
echo "\n";
echo DB_NAME;
echo "\n";





//Simple Calculator
$num1 = 100;
$num2 = 200;
$num3 = 100*2;
$addition =    $num1 + $num2;
$subtruction = $num2 - $num1;
$division = $num2 / $num1;
$modulus = $num2 % $num1;



echo "<br/>";
echo "\n Total Addition is $num1 + $num2 = $addition <br/>";
echo "Total Substruction is $num2 - $num1 = $subtruction <br/>";
echo "Total Multiplication is $num3 <br/>";
echo "Total Division is $num2 / $num1 = $division <br/>";
echo "Total modulus is $num2 % $num1 = $modulus <br/>";


echo "Now good Night";

