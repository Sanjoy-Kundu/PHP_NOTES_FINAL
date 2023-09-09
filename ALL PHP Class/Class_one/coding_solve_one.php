<?php
// 1. Variables

// Variable Declaration and Initialization: Create two variables - one storing your name (string) and the other storing your age (int). Print them.
// Global vs. Local: Declare a global variable and a function that tries to print this global variable without using the global keyword. Then try with the global keyword.

$name = "Sanjoy Kundu";
$age = 23;
printf("My name is %s.\nI am %d years old", $name, $age);

//global variable 
$globalVariable = "Madaripur";
function ansewer($address){
    echo "\nI am from $address";
};
ansewer($globalVariable);

//localVariable 
function local(){
$name = "Bangladesh";
$capital = "Dhaka";
$result = "My country name is $name. $name capital is $capital";
printf($result);
};
local();






// 2. Constants
// Constant Creation: Define a constant that stores the value of Pi (3.14159) and print it.

define("PI_RESULT", 3.1416);
printf("\n PI Value is ->".PI_RESULT);






// 3. Conditional Statements
// Simple Condition: Ask the user for their age and print whether they are a minor or an adult using the if statement.
// Logical Operators: Write a program that checks if a number is both even and greater than 10.

$age = 20;
if($age < 18){
    echo "\nYou are minor";
}else{
    echo "\nYeah! Your are adult";
}

$number = 11;
if($number >= 10){
    echo "\nYou are success";
}else{
    echo "\nYou are error";
}






// 16. Nested If-Else for Grades
// Challenge: Accept a student's score (0 to 100) and provide a grade:
// A (>=90)
// B (>=75 and <90)
// C (>=50 and <75)
// D (<50)

$number = -90;
if($number >= 90 && $number <= 100){
    echo "\nYou got A";
}else if($number >= 75 && $number < 90){
    echo "\nYou got B";
}else if($number >= 50 && $number < 75){
    echo "\nYou got C";
}else if($number >= 33 && $number <= 50 ){
    echo "\nYou got D";
}else if($number >= 0){
    echo "\nYou Got F";
}else{
echo "\nYour Resut not Found";
}
?>