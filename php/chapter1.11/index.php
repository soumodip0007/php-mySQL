<?php

 //variable scope

 //local vars

 //function myFunc(){
 //   $price = 10;
 //   echo $price;
 //}
 //myFunc();
 //echo $price;

 //function myFuncTwo($age){
 //   echo $age;
 //}
 //myFuncTwo(25);

 //global variables
 
 $name = 'vulk';
 function sayHello(){
   global $name;
   $name = 'wiz';
  // echo "hello $name";
 }
 //sayHello();
 //echo $name;
 //function sayBye($name){
 //   $name = 'pekka';
 //   echo "bye $name";
 //}
 //sayBye($name);
 //echo $name;

 function sayBye(&$name){
    $name = 'pekka';
    echo "bye $name";
 }
 sayBye($name);
 echo $name;



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    
</body>
</html>