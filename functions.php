<?php

/**
 * Functions
 * Syntax to define a function:
 * function functionName(arguments_list){
 *              //body of the function
 * }
 *
 */

//  function addNumbers($num1,$num2) {
//      $sum = $num1 + $num2;
//      return $sum;
//  }
//  $result = addNumbers(10,20);

//  echo $result;

/**
 * Important Points To Notice:
 * 1.PHP does not supports overloading functions.
 * 2. Scope of variable $sum is restricted to the block of function i.e. its body. 
 * We cannont access it outside the functio
 */

//  $variable =10;
//  function timepass(){
//      echo $variable;

//  }
//  timepass();

/**
 * The above code gives error/notice as the variable which is not declared in the scope of the function cannot be accessed
 * inside the function.
 *
 * BUt PHP has a keyword named as 'global' which allows you to access the variables defined outside the scope of the 
 * function as shown below:
 */

//  $variable = 10;
//  function timepass(){
//      global $variable;
//      echo $variable;
//  }

//  timepass();

/**
 * Funciton with Default Arguments:
 * PHP allows functions having an optinal or default arguments 
 * 
 */

//  function addNumbers($no1,$no2,$printResult = false) {
//      $sum = $no1 + $no2;
//      if($printResult) {
//          echo "The Result is: " . $sum;
//      }
//      return $sum;
     
//  }
//  $sum1 = addNumbers(10,20);
//  $sum2 = addNumbers(10,20,true);

/**
 * PASS by value or Reference 
 * by default PHP functions are pass by value but it also allows pass by reference
 * 
 */

//  echo   "<br>";

//  $a = 2;
//  function passByValue($a){
//      $a=3;
//  }
//  passByValue($a);
//  var_dump($a);

//  echo   "<br>";

// function passByReference(&$b) {
//     $b = 100;

// }
// $var = 11;
// passByReference($var);
// var_dump($var);

/**
 * NEW FEATURE OF PHP 7
 * Type HINTING and RETURN TYPES
 * 
 * from PHP 7 you can specify the type of argument that function needs this is known as Type Hinting,as well as PHP 7
 * came up with specifying retun types also.
 * 
 * Syntax:
 * 
 * function functionName(datatype $var_name): return_type {
 *          $sum = $num1 + $num2;
 *          if($printSum){
 *              echo "Result is " . $sum;
 *              }
 *          return $sum;
 *  }
 * 
 * addNumbers(10,20);
 * addNumbers(10,20.true);
 * echo"<br>";
 * addNumbers('10','20' , true);
 * 
 */

/**
 * Running the above program didn't create any error , but we can make php throw an error.
 * Developers can turn strict types 'on' by placing the declare(strict_types=1); method at the topof a PHP file.
 * here declare is known as a contruct and 'strict_types' is known as directive.
 * 
 */

 declare(strict_types = 1);

 function addNumbers(int $num1,int $num2,bool $printSum = false) : int{
     $sum = $num1 + $num2;
     if($printSum){
    echo "Result is " . $sum;
     }
    return $sum;
     }

addNumbers(10,20);
addNumbers(10,20, true);
echo"<br>"; 
addNumbers('10','20' , true);



