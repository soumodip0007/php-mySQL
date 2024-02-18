<?php
  //variables & constants
  define('NAME', 'Wiz');  //constants
  $name = 'vulk';
  $age = 30;

  $name = 'pekka';
  //echo $name;
  //echo $age;
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Document</title>
  </head>
  <body>
      <h1>User Profile Page</h1>

      <div><?php echo $name; ?></div>
      <div><?php echo $age; ?></div>
  </body>
  </html>