<?php

//connect to database
$conn = mysqli_connect('localhost', 'pekka', 'pekka1234', "pekka's_play_house");

//check connection
if(!$conn){
 echo 'Connection error:' .mysqli_connect_error();
}

?>