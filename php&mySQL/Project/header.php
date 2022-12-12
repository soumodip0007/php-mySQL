<?php

session_start();

//$_SESSION['name'] = 'Pekka';

if($_SERVER['QUERY_STRING'] == 'noname'){
    unset($_SESSION['name']);
    //session_unset();
}

$name = $_SESSION['name'] ?? 'Guest';

//get cookie
$gender = $_COOKIE['gender'] ?? 'Unknown';

?>



<head>
    <title>Pekka's Play House</title>
     <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style text="text/css">
        .brand{
            background: #9B56AF !important;
        }
        .brand-text{
            color: #9B56AF !important;
            font-weight: bold;
        }
        form{
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }
        .house{
            width:100px;
            margin: 40px auto -30px;
            display: block;
            position: relative;
            top: -30px;
        }
    </style>
</head>
<body class="grey lighten-4">
    <nav class="white z-depth-0">
        <div class="container">
            <a href="#" class="brand-logo brand-text">Pekka's Play House</a>
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <li class="grey-text">Hello <?php echo htmlspecialchars($name); ?></li>
                <li class="grey-text">(<?php echo htmlspecialchars($gender); ?>)</li>
                <li><a href="add.php" class="btn brand z-depth-0">Add a House</a></li>
            </ul>
        </div>    
    </nav>