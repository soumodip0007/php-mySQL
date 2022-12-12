<?php

//super globals

//$_GET['name'], $_POST['name']

//echo $_SERVER['SERVER_NAME'] . '<br/>';
//echo $_SERVER['REQUEST_METHOD'] . '</br>';
//echo $_SERVER['SCRIPT_FILENAME'] . '</br>';
//echo $_SERVER['PHP_SELF'] . '</br>';

//session
if(isset($_POST['submit'])){

  //cookie for gender
  setcookie('gender', $_POST['gender'], time() + 86400);

    session_start();

    $_SESSION['name'] = $_POST['name'];

    echo $_SESSION['name'];

    header('location: ../Project/index.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text" name="name">
    <select name="gender">
      <option value="male">male</option>
      <option value="female">female</option>
    <input type="submit" name="submit" value="submit">
  </form>
    
</body>
</html>