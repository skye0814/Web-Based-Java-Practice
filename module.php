<?php

session_start();
$userID = $_SESSION['user_id'];
    if(!isset($_SESSION['email']) && empty($_SESSION['email']) ){
        header('Location: login.php');
    }
@include 'config.php';


/* if(!isset($_SESSION['admin_email']) && empty($_SESSION['admin_email']) ){
    header('Location: login.php');
} */
if(isset($_GET['topic_name'])){

    $topic = $_GET['topic_name'];

}

if(isset($_GET['topic_level'])){

    $topic_level = $_GET['topic_level'];

}

if(isset($_GET['Qtr'])){

    $Qtr = $_GET['Qtr'];

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Practice</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./assets/css/users.css">
    
</head>
<body>
    
<!-- header section starts  -->


<header class="header">
    <a href="home.php" class="logo">
        <img src="./images/logo.png" alt="">
    </a>
        <div class="box">
            <div class="dropdown">
            <button class="btn-drop" type="button" data-toggle="dropdown">Account
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
            <li><a href="home.php">Home</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="user-view-progress.php">Progress</a></li>
            <li><a href="logout.php">Sign Out</a></li>
            </ul>
        </div>
    </div>
</header>

<!-- header section ends -->


<!-- contact section starts  -->
<br>
<br>

<section class = "afternav">
<div class= "back-button">
    <a href="select-topic.php?qtr=<?php echo $Qtr; ?>" class="btn-back">Back</a>
</div>
            

            <?php
            @include 'config.php';
            $sql="SELECT * from modules_db WHERE topic_name = '$topic' AND topic_level='$topic_level'";
            $query = mysqli_query($conn,$sql);
            while($info=mysqli_fetch_array($query)){
            ?>
            <embed type="application/pdf" src="pdf/<?php echo $info['module_name'];?>" width="70%" height="650px">
            <?php
                }
            ?>
    
</section>

<footer class="footer">
    <div class="cmName">
        <p> © 2023 Web-Based Java Practice</p>
    </div>
</footer>