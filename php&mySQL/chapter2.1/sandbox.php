<?php

// ternary operators

$score = 50;

//if($score > 40){
//    echo 'high score!';
//} else {
//    echo 'low score :(';
//}

$val = $score > 40 ? 'high score!' : 'low score :(';
echo $val;

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

<p><?php echo $score > 40? 'high score!' : 'low score :('; ?></p>
    
</body>
</html>