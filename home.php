<?php

session_start();

@include 'config.php';
    $userID = $_SESSION['user_id'];

    if(!isset($_SESSION['email']) && empty($_SESSION['email']) ){
        header('Location: login.php');
    }

    $sql = "SELECT * FROM `users_db`  WHERE id = '$userID'";
    $result=mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $qtr2 = $row['2ndQtr'];
    $qtr3 = $row['3rdQtr'];
    $qtr4 = $row['4thQtr'];

    if(isset($_POST['submit']))
    {
        $qtr = $_POST['qtr'];
        header('Location: select-topic.php?qtr='.$qtr);
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
    <div class="wrapper">
        <button type="button" class="btn" data-toggle="tab" href="#select">Let's Get Started</button>
        <div id="select" class="tab-pane fade">
            <div class="selection">
                <form method="POST"'>
                    <p>Good day, student! <br>
                    Upon answering each quarters on Online Java Training Platform for Quirino High School Senior ICT <br> 
                    Students Using Flower Pollination Algorithm, you will be given a specific amount of time to answer <br>
                    each questions randomly. If your score did not passed, you will be given modules to review and retake <br>
                    the quiz for you to pass up to the last quarter. Good luck!</p>
                
                    <label for="qtr" class="topic-name">Select Quarter</label>
                    <br>
                    <select name="qtr" id="qtr" class="select-topic">
                    
                        <option value="1st Quarter">1st Quarter</option>
                    <?php
                        
                        if($qtr2 == "locked"){
                        
                    ?>
                            <option value="2nd Quarter" disabled>2nd Quarter</option>
                    <?php    
                        }
                        else{
                    ?>
                            <option value="2nd Quarter">2nd Quarter</option>
                    <?php
                        }
                        if($qtr3 == "locked"){

                    ?>
                            <option value="3rd Quarter" disabled>3rd Quarter</option>
                    <?php    
                        }
                        else{
                    ?>
                            <option value="3rd Quarter">3rd Quarter</option>
                    <?php
                        }
                        if($qtr4 == "locked"){

                    ?>
                            <option value="4th Quarter" disabled>4th Quarter</option>
                    <?php    
                        }
                        else{
                    ?>
                            <option value="4th Quarter">4th Quarter</option>
                    <?php
                        }

                    ?>
                    </select>
                    <center><input type="submit" name="submit" class="btn-back"></center>
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