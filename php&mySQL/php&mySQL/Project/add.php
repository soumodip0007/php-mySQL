<?php
//GET method
//if(isset($_GET['submit'])){
//    echo $_GET['email'];
//    echo $_GET['title'];
//    echo $_GET['components'];
//}
//POST mathod
//if(isset($_POST['submit'])){
//    echo $_POST['email'];
//    echo $_POST['title'];
//    echo $_POST['components'];
//}

include('config/db_connect.php');


$title = $email = $components ='';
$errors = array('email'=>'', 'title'=>'', 'components'=>'');

if(isset($_POST['submit'])){
    //echo htmlspecialchars($_POST['email']);
    //echo htmlspecialchars($_POST['title']);
    //echo htmlspecialchars($_POST['components']);

    //check email
    if(empty($_POST['email'])){
        $errors['email'] = 'An email is required <br />';
    }else{
       $email = $_POST['email'];
       if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        //echo 'email must be a valid email address';
       $errors['email'] = 'email must be a valid email address';
       }
    }

    //check title
    if(empty($_POST['title'])){
        $errors['title'] = 'An title is required <br />';
    }else{
        $title = $_POST['title'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
            //echo 'Title must be letters and spaces only';
            $errors['title'] = 'Title must be letters and spaces only';
        }
    }

    //check components
    if(empty($_POST['components'])){
        $errors['components'] = 'At least one component is required <br />';
    }else{
        $components = $_POST['components'];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $components)){
            //echo 'Components must be a comma seperated list';
            $errors['components'] = 'Components must be a comma seperated list';
        }
    }

    if(array_filter($errors)){
        //echo 'errors in the form';
    }else{

        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $components = mysqli_real_escape_string($conn, $_POST['components']);

        //craete sql
        $sql = "INSERT INTO houses(title, email, components) VALUES ('$title', '$email', '$components')";

        //save to db and check
        if(mysqli_query($conn, $sql)){
            //success
            header('Location: index.php');
        } else {
            echo 'query errpr:' .mysqli_error($conn);
        }

        //echo 'form is valid';
        //header('Location: index.php');
    }

} //end of POST check

?>
<!DOCTYPE html>
<html lang="en">

<?php include('header.php');?>

<section class="container grey-text">
    <h4 class="center">Add a house</h4>
    <!-- <form class="white" action="add.php" method="GET"> -->
    <form class="white" action="add.php" method="POST">
        <label>Your Email:</label>
        <input type="text" name="email" value="<?php echo $email ?>">
        <div class="red-text"><?php echo $errors['email']; ?></div>
        <label>House Name:</label>
        <input type="text" name="title" value="<?php echo $title ?>">
        <div class="red-text"><?php echo $errors['title']; ?></div>
        <label>Components(comma separated):</label>
        <input type="text" name="components" value="<?php echo $components ?>">
        <div class="red-text"><?php echo $errors['components']; ?></div>
        <div class="center">
            <input type="submit" name="submit"value="submit" class="btn brand z-depth-0">
        </div>
</section>

<?php include('footer.php');?>

</html>

<!-- XXS Attacks -->
<!-- <script>window.location="https://www.google.com"</script> -->