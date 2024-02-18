<?php

  //functions

//function sayHello(){
//   echo "Hi I am pekka";
//}
//sayHello('wiz');

//  function sayHello($name){
//    echo "Hi I am $name";
//  }
//  sayHello('wiz');

  //function sayHello($name = 'vulk', $time = 'morning'){
  //  echo "Hi I am $name $time";
  //}
  //sayHello('minion');
  //sayHello('royalGiant', 'night');
  function formatProduct($product){
    echo "{$product['name']} costs rs{$product['price']} to buy <br />";
    return "{$product['name']} costs rs{$product['price']} to buy <br />";
  }
  $formatted = formatProduct(['name' => 'grand warden', 'price' => 20]);
  echo $formatted;

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    
</body>
</html>