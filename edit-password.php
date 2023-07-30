<?php
    session_start();
    $userID = $_SESSION['user_id'];
    if(!isset($_SESSION['email']) && empty($_SESSION['email']) ){
        header('Location: login.php');
    }
    @include 'config.php';

    if(isset($_POST['submit'])){
        $oldpass = md5($_POST['oldpass']);
        $newpass = md5($_POST['newpass']);
        $query = "SELECT password FROM users_db WHERE id='$userID' AND password = '$oldpass'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) === 1){
            $update = "UPDATE users_db SET password ='$newpass' WHERE id = '$userID'";
            $updated=mysqli_query($conn,$update);
            if($updated){
                header('location:profile.php?id='.$userID .'&success=Password Updated');
            }
        }else{
            header('location:edit-password.php?id='.$userID .'&error=Incorrect Password');
        }
    }
?>
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Practice</title>
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/users.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    
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

<div class="container-section">
        <div class="form-container-signup">
            <div class="header-section">
                <h3>Change Password</h3>
            </div>
            <div class="body-section">
               
                <form method="POST">
                    <div class="input-layout">
                    <?php 
                        if(isset($_GET['error'])){ ?>

                            <p class="error"><?php echo $_GET['error']; ?></p>
                        
                    <?php } ?>
                        <div class="input-label">
                            <p class="impt">*</p>
                            <p class="label">Old Password</p>
                        </div>
                        <input type="password" name="oldpass" id="oldpass" class="input-data-reg" required>
                    </div>
                    <div class="input-layout">
                        <div class="input-label">
                            <p class="impt">*</p>
                            <p class="label">New Password</p>
                        </div>
                        <input type="password" name="newpass" id="newpass" class="input-data-reg" required>
                    </div>
                    <div class="button-layout-reg">
                        <input type="submit" name="submit" class="profile-btn-inp" value="Save">
                        <a href="profile.php" class="profile-btn">Cancel</a>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
<footer class="footer">
    <div class="cmName">
        <p> © 2023 Web-Based Java Practice</p>
    </div>
</footer>