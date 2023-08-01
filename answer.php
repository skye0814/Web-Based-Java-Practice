<?php

include("class/users.php");
$userID = $_SESSION['user_id'];
if(!isset($_SESSION['email']) && empty($_SESSION['email']) ){
    header('Location: login.php');
}
$ans=new  users;
$answer=$ans->answer($_POST);
$topic = $_POST['topic'];
$level = $_POST['level'];
$Qtr = $_POST['Qtr'];
$startTime = $_POST['startTime'];

$endTime= strtotime(date('H:i:s'));
$interval = $endTime - $startTime;


    
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./assets/css/users.css">
  
</head>
<body onload="timeout()" >
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
    <div class="container">
        <center>
        <?php
        $total_qus=$answer['right']+$answer['wrong']+$answer['no_answer'];
        $attempt_qus=$answer['right']+$answer['wrong'];
        ?>
        <div class="container">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
    <h2>Your Quiz results</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Total number of Questions</th>
            <th><?php echo $total_qus; ?></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Attempted questions</td>
            <td><?php echo $attempt_qus;?></td>
        </tr>
        <tr>
            <td>Right answer </td>
            <td><?php echo $answer['right'];?></td>
        </tr>
        <tr>
            <td>Wrong answer</td>
            <td><?php echo $answer['wrong'];?></td>
        </tr>
        <tr>
            <td>No answer</td>
            <td><?php echo $answer['no_answer'];?></td>
        </tr>
        <tr>
            <td>Your progress</td>
            <td><?php 
            $per=($answer['right']*100)/($total_qus);
            
            echo $per."%";
            ?></td>
        </tr>
        <tr>
            <td>Your time</td>
            <td>
                <?php
                    if($interval<60){
                        echo $interval. ' second(s)';
                    }
                    else if($interval >=60 && $interval<3600){
                        echo $interval. ' second(s)';
                    }
                    
                ?>
            </td>
        </tr>
        <tr>
            <td>Remarks</td>
            <td>
                <?php
                    if($interval<60){
                        echo 'You answered too fast';
                    }
                    else if($interval >60 && $interval<120){ 
                         echo 'You are so fast, slow down';
                    }
                    else if($interval >=120 && $interval<180){
                         echo 'You answered like Flash';
                    }
                    else if($interval >=180 && $interval<240){
                         echo 'You answered questions too quick';
                    }
                    else if($interval >=240 && $interval<300){
                         echo 'You are getting into it';
                    }
                    else if($interval >=300 && $interval<360){
                         echo 'Make sure to read and understand each questions';
                    }
                    else if($interval >=360 && $interval<420){
                         echo 'Make sure to maximize your time';
                    }
                    else if($interval >=420 && $interval<480){
                         echo 'Make sure you read the question clearly';
                    }
                    else if($interval >=480 && $interval<540){
                         echo 'You are one step closer';
                    }
                    else if($interval >=540 && $interval<600){
                         echo 'You answered like a human';
                    }
                    else if($interval >=600&& $interval<660){
                         echo 'You answered a little bit on time';
                    }
                    else if($interval >=660 && $interval<720){
                         echo 'You need a little bit of practice';
                    }
                    else if($interval >=720 && $interval<780){
                         echo 'You need some practice';
                    }
                    else if($interval >=780 && $interval<840){
                         echo 'You answered slow';
                    }
                    else if($interval >=840 && $interval<900){
                         echo 'You answered like a snail';
                    }
                    else if($interval >=900 && $interval<960){
                         echo 'You answered like a snail';
                    }
                    
                    
                ?>
            </td>
        </tr>
        <tr>
            <td>Your result</td>
            <?php 
            $per=($answer['right']*100)/($total_qus);
            if($per>=90){
                $result = "Passed";
                $class = "pass";
            }else{
                $result = "Failed";
                $class = "fail";
            }
            ?>
            <td class="<?php echo $class?>"><?php echo $result?></td>
        </tr>
        </tbody>
    </table></div>
    <div class="col-sm-2"></div>
    </div>
    <div class="btnOptions">
        <form method= "POST" action="quiz.php">
            <input type="hidden" name="topic" value="<?php echo $topic?>">
            <input type="hidden" name="level" value="<?php echo $level?>">
            <input type="hidden" name="Qtr" value="<?php echo $Qtr?>">
            <?php
                if($result == "Failed"){
            ?>
             <a href="module_ans.php?topic_name=<?php echo $topic?>&topic_level=<?php echo $level?>" class="btn-module">View Module</a>
            <a href="quiz.php?topic=<?php echo $topic?>&level=<?php echo 'Easy'?>&Qtr=<?php echo $Qtr?>" class="btn-retake">Retake Quiz</a>
            <?php    
            
                }
           

            ?>
            <a href="home.php" class="btn-back">Back to Home</a>
        </form>
    </div>

        </center>
    </div>
</div>
</section>

<footer class="footer">
    <div class="cmName">
        <p> © 2023 Web-Based Java Practice</p>
    </div>
</footer>

</body>
</html>
