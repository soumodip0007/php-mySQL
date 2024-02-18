<?php 

  //indexed arrays ----------------------

  $peopleOne = ['wiz', 'pekka', 'vulk']; 
  //echo $peopleOne[2];
  $peopleTwo = ['archer', 'prince', 'knight']; 
  
  $ages = [20, 30, 40, 50];
  //print_r($ages);
  $ages[1] = 25;
  //print_r($ages);
  $ages[] = 60;
  //print_r($ages);
  
  array_push($ages, 70);
  //print_r($ages);
  //echo count($ages);

  $peopleThree = array_merge($peopleOne, $peopleTwo );
  //print_r($peopleThree);

  //associative arrays(keys & value pairs) -------------------
  $troopsOne = ['barb' => 'yellow', 'wiz' => 'blue', 'vulk' => 'orange' ];
  //echo $troopsOne['barb'];
  //print_r($troopsOne);
  $troopsTwo = array('minion' => 'purple', 'hog' => 'pink');
  //print_r($troopsTwo);
  $troopsTwo['knight'] = 'black';
  $troopsTwo['hog'] = 'black';
  //print_r($troopsTwo);

  $troopsThree = array_merge($troopsOne, $troopsTwo);
  //print_r($troopsThree);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Learn php</title>
</head>
<body>
    
</body>
</html>