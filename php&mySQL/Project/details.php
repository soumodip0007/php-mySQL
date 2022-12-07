<?php

include('config/db_connect.php');

if(isset($_POST['delete'])){

    $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

    $sql = "DELETE FROM houses WHERE id = $id_to_delete";

    if(mysqli_query($conn, $sql)){
        //success
        header('location: index.php');
    } {
        //failure
        echo 'query error:' .mysqli_error($conn);
    }

}

//check get request id parameter
if(isset($_GET['id'])){

    $id = mysqli_real_escape_string($conn, $_GET['id']);

    //make sql
    $sql = "SELECT * FROM houses WHERE id = $id";

    //get the query results
    $result = mysqli_query($conn, $sql);

    //fetch result in array format
    $house = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);

    //print_r($house);
}

?>

<!DOCTYPE html>
<html lang="en">

<?php include('header.php');?>

<div class="container center">
    <?php if($house): ?>

        <h4><?php echo htmlspecialchars($house['title']); ?></h4>
        <p> Created by: <?php echo htmlspecialchars($house['email']); ?></p>
        <p><?php echo date($house['created_at']); ?></p>
        <h5>Components:<h5/>
        <p><?php echo htmlspecialchars($house['components']); ?></p>

        <!-- DELETE FORM -->
        <form action="details.php" method="post">
            <input type="hidden" name="id_to_delete" value="<?php echo $house['id'] ?>">
            <input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
        </form>

        <?php else: ?>

            <h5>No Such House Exists!</h5>

        <?php endif; ?>    
</div>

<?php include('footer.php');?>

</html>
