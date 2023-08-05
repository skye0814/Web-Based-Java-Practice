<?php

session_start();

@include 'config.php';

    $userID = $_SESSION['user_id'];
    if(!isset($_SESSION['email']) && empty($_SESSION['email']) ){
        header('Location: login.php');
    }
if(isset($_GET['topic'])){

    $topic = $_GET['topic'];


}
if(isset($_GET['level'])){
    $level = $_GET['level'];
}

/* if(!isset($_SESSION['admin_email']) && empty($_SESSION['admin_email']) ){
    header('Location: login.php');
} */
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./assets/css/users.css">
    
	<script type="text/javascript">
	function timeout()
	{
		var hours=Math.floor(timeLeft/3600);
		var minute=Math.floor((timeLeft-(hours*60*60))/60);
		var second=timeLeft%60;
		var hrs=checktime(hours);
		var mint=checktime(minute);
		var sec=checktime(second);
		if(timeLeft<=0)
		{
			clearTimeout(tm);
			document.getElementById("form1").submit();
		}
		else
		{

			document.getElementById("time").innerHTML=hrs+":"+mint+":"+sec;
		}
		timeLeft--;
		var tm= setTimeout(function(){timeout()},1000);
	}
	function checktime(msg)
	{
		if(msg<10)
		{
			msg="0"+msg;
		}
		return msg;
	}
	</script>
  
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
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="timer">
                <h2>
                <script type="text/javascript">
                var timeLeft=15*60;
                
                </script>
                
                <div id="time"style="float:right">timeout</div></h2>
            </div>
            <form method="post" id="form1" action="answer.php">
                
                <?php
                    $i=1;
                    $select = mysqli_query($conn, "SELECT * FROM question_db where topic='$topic' and level = '$level' order by rand()");
                    while($row = mysqli_fetch_assoc($select)){
                ?> 
                <table class="table table-bordered">
                    <thead>
                    <tr class="unselectable">
                        <th><?php echo $i;?>  <?php echo $row['question'];?>  </th>
                    </tr>
                    </thead>
                    
                    <tbody>
                    <?php if(isset($row['opt1'])){?>
                    <tr class="info">
                        <td><input type="radio" class="opts" style ="width: 15px; height:15px;" value="1" name="<?php echo $row['id']; ?>" />&nbsp;<?php echo $row['opt1']; ?> </td>
                    </tr>
                    <?php }?>
                    <?php if(isset($row['opt2'])){?>
                    <tr class="info">
                        <td><input type="radio" class="opts" style ="width: 15px; height:15px;" value="2" name="<?php echo $row['id']; ?>" />&nbsp;<?php echo $row['opt2'];?></td>
                    </tr>
                    <?php }?>
                    <?php if(isset($row['opt3'])){?>
                    <tr class="info">
                        <td><input type="radio" class="opts" style ="width: 15px; height:15px;" value="3" name="<?php echo $row['id']; ?>" />&nbsp;<?php echo $row['opt3'];?></td>
                    </tr>
                    <?php }?>
                    <?php if(isset($row['opt4'])){?>
                        <tr class="info">
                        <td><input type="radio" class="opts" style ="width: 15px; height:15px;" value="4" name="<?php echo $row['id']; ?>" />&nbsp;<?php echo $row['opt4'];?></td>
                    </tr>
                    <?php }?>
                    <tr class="info">
                        <td><input type="radio"  checked="checked" style="display:none" value="no_attempt" name="<?php echo $row['id']; ?>" /></td>
                    </tr>
                    <input type="hidden" value="<?php echo $topic?>" name="topic">
                    <input type="hidden" value="<?php echo $level?>" name="level">
                    </tbody>
                    
                </table>
            <?php $i++;}?>
        <center><input type="submit" value="submit Quiz" class="btn-submit" id="submitBtn" /></center>
    </form>	
    </div>
    <div class="col-sm-2"></div>
    </div>
</div>
</section>

<footer class="footer">
    <div class="cmName">
        <p> © 2023 Web-Based Java Practice</p>
    </div>
</footer>

</body>
<script type="text/javascript">
    $( document ).ready(function() {

        var numberOfItems = $('tbody').length;
        var isAllValid = false;

        $('#submitBtn').prop('disabled', true);

        $('#form1').on('change', function(){
            var itemsChecked = $('.opts:checked').length;

            if (numberOfItems === itemsChecked){
                isAllValid = true;
            }
            // console.log(isAllValid);
            $('#submitBtn').prop('disabled', !isAllValid);
        });
    });

        
    
    </script>
</html>