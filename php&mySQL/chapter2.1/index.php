<?php

//connect to database
$conn = mysqli_connect('localhost', 'pekka', 'pekka1234', "pekka's_play_house");

//check connection
if(!$conn){
  echo 'Connection error:' .mysqli_connect_error();
}

//write query for all houses
$sql = 'SELECT title, components, id FROM houses'

?>
<!DOCTYPE html>
<html lang="en">

<?php include('header.php');?>

<?php include('footer.php');?>
    

</html>