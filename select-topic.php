<?php

session_start();

@include 'config.php';
    $userID = $_SESSION['user_id'];
    if(!isset($_SESSION['email']) && empty($_SESSION['email']) ){
        header('Location: login.php');
    }
    if(isset($_GET['qtr'])){

        $Qtr = $_GET['qtr'];
    
    
    }
    if(isset($_POST['submit']))
    {
        
        $topic = $_POST['topic'];
        $level = "Easy";
        header('Location: quiz.php?topic='.$topic.'&level='.$level.'&Qtr='.$Qtr);
    }    
    if(isset($_POST['view-module']))
    {
        
        $topic = $_POST['topic'];
        $level = "Easy";
        header('Location: module.php?topic_name='.$topic.'&Qtr='.$Qtr .'&topic_level='.$level);
    }  
    if(isset($_POST['back-home']))
    {
        
        $topic = $_POST['topic'];
        header('Location: home.php');
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
    <div class="wrapper">
        <div id="select">
            <div class="selection">
                <form method="POST"'>
                    <h1><?php echo $Qtr?></h1>
                    <label for="topics" class="topic-name">Select Topic</label>
                    <select name="topic" id="topic" class="select-topic">
                        <br>
                        <?php
                            $select = mysqli_query($conn, "SELECT * FROM topics_db WHERE Qtr = '$Qtr'");
                            while($row = mysqli_fetch_assoc($select)){
                        ?>
                        <option name="topic" value="<?php echo $row['topic_name']; ?>"><?php echo $row['topic_name']; ?></option>
                        <?php   }; ?> 
                    </select>
                    </select>
                    <center>
                        <input type="submit" name="back-home" class="btn-back" value="Back"> 
                        <input type="submit" name="view-module" class="btn-module" value="View Module" >
                        <input type="submit" name="submit" class="btn-back" value="Start Quiz"> 
                    </center>
                </form>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="cmName">
        <p> © 2023 Web-Based Java Practice</p>
    </div>
</footer>
<script>
	const dropdown = document.querySelector('.dropdown');
    dropdown.addEventListener('click',() => {
        dropdown.classList.toggle('active');
    });

</script>