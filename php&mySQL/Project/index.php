


<?php

include('config/db_connect.php');

//write query for all houses
$sql = 'SELECT title, components, id FROM houses ORDER BY created_at';

//make query and get result
$result = mysqli_query($conn, $sql);

//fetch the resulting rows as an array
$houses = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free results from memory
//mysqli_free_result($results);

//close connection
//mysqli_close($conn);

//print_r($houses);


//method that will print like an array
//explode(',', $houses[0]['components']);

?>
<!DOCTYPE html>
<html lang="en">

<?php include('header.php');?>

<h4 class="center grey-text">Houses!</h4>

<div class="container">
    <div class="row">

      <?php foreach($houses as $house): ?>

           <div class="col s6 md3">
             <div class="card z-depth-0">
              <img src="img/PngItem_325065.png" class="house">
                <div class="card-content center">
                    <h6><?php echo htmlspecialchars($house['title']); ?></h6>
                    <ul>
                      <?php foreach(explode(',', $house['components']) as $com): ?>
                      <li><?php echo htmlspecialchars($com); ?></li>
                     <?php endforeach; ?>
                    </ul>
                </div>
                <div class="card-action right-align">
                  <a class="brand-text" href="details.php?id=<?php echo $house['id']?>">more info</a>
                </div>
             </div>
           </div>

      <?php endforeach; ?>
    <?php if(count($houses) >= 2): ?>
      <p>there are 2 or more houses</p>
      <?php  else:  ?>
          <p>there are less than 2 houses</p>
      <?php endif; ?>

    </div>  
</div>
<?php include('footer.php');?>

</html>