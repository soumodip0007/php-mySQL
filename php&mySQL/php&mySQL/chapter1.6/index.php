<?php
  

   //multi-dimansional arrays
   $blogs = [
      ['title'=>'clash on', 'author'=>'wiz', 'content'=>'clash house','likes'=> 45],
      ['title'=>'clan games', 'author'=>'pekka', 'content'=>'house of pekka','likes'=> 35],
      ['title'=>'royal ghost', 'author'=>'spooky queen', 'content'=>'candy','likes'=> 50 ]
    ];

    //print_r($blog);
    //print_r($blog[2]);
    //print_r($blog[1][2]);
    //echo $blog[2]['author'];
    //echo count($blog);

    $blogs[] = ['title'=>'royal hogs', 'author'=>'mother witch', 'content'=>'demon','likes'=> 55];
    //print_r($blogs);
    $popped = array_pop($blogs);
    //print_r($popped);
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    
</body>
</html>