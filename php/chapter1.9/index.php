<?php

 //conditional statements

 //$price = 20;

 //if($price < 30){
  //  echo 'Well very good';
 //} elseif ($price < 20) {
   // echo 'moderate';
  //  } else {
 //   echo 'not good';
 //}

 $products = [
    ['name' => 'wiz', 'price' => '100'],
    ['name' => 'pekka', 'price' => '20000'],
    ['name' => 'vulk', 'price' => '5000'],
    ['name' => 'hog', 'price' => '800'],
    ['name' => 'zap', 'price' => '20'],
    ['name' => 'ice-spirit', 'price' => '10'],
    ];

    //foreach($products as $product){
    //   if($product['price'] < 15 || $product['price'] > 5000){
    //        echo $product['name'] . '<br />';
    //    }
    //}

    foreach($products as $product){
        if($product['name'] === 'pekka'){
            break;
        }
        if($product['price'] > 15){
            continue;
        }
        echo $product['name'] . '<br />';
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <div>
        <ul>
            <?php foreach ($products as $product) { ?>
              <?php if($product['price'] > 15) { ?>
                <li><?php echo $product['name']; ?></li>             
            <?php } ?>
         <?php } ?>
        </ul>
    </div>          
</body>
</html>