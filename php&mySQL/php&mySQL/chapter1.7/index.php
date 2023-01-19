<?php

   //loops

   $royal = ['wiz','pekka','vulk'];

   //for($i =0; $i<count($royal); $i++){
   //echo $royal[$i] . '<br />';
   //}

   //foreach ($royal as $clash){
   // echo $clash . '<br />';
   //}

  $products = [
    ['name' => 'wiz', 'price' => '100'],
    ['name' => 'pekka', 'price' => '20000'],
    ['name' => 'vulk', 'price' => '5000'],
    ['name' => 'hog', 'price' => '800'],
    ['name' => 'zap', 'price' => '20'],
    ['name' => 'ice-spirit', 'price' => '10'],
    ];
    //print_r($products);

    //foreach($products as $product){
    //    echo $product['name'] . ' - ' . $product['price'];
    //    echo '<br />';
    //}
    
    //$i = 0;
    //while($i <count($products)){
    //    echo $products[$i]['name'] . ' - ' . $products[$i]['price'];
    //    echo '<br />';
    //    $i++;
    //}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Products</h1>
    <ul>
        <?php foreach($products as $product){ ?>
            <h3><?php echo $product['name']; ?></h3> 
            <p><?php echo $product['price']; ?></p>
        <?php } ?>
    </ul>
</body>
</html>