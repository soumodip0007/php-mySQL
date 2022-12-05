<?php

//connect to database
$conn = mysqli_connect('localhost', 'pekka', 'pekka1234', "pekka's_play_house");

//check connection
if(!$conn){
  echo 'Connection error:' .mysqli_connect_error();
}

//write query for all houses
$sql = 'SELECT title, components, id FROM houses';

//make query and get result
$result = mysqli_query($conn, $sql);

//fetch the resulting rows as an array
$houses = mysqli_fetch_all($result, MYSQLI_ASSOC);

print_r($houses);

?>
<!DOCTYPE html>
<html lang="en">

<?php include('header.php');?>

<?php include('footer.php');?>
    

</html>