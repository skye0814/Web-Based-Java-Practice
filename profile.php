<?php
    session_start();
    $userID = $_SESSION['user_id'];
    if(!isset($_SESSION['email']) && empty($_SESSION['email']) ){
        header('Location: login.php');
    }
    @include 'config.php';
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
                <h3>My Profile</h3>
            </div>
            <div class="body-section">
               
                <form method="POST">
                    <?php
                        $select = mysqli_query($conn, "SELECT * FROM users_db WHERE id = '$userID'");
                        while($row = mysqli_fetch_assoc($select)){
                    ?>
                    <div class="input-layout">
                        <?php 
                            if(isset($_GET['success'])){ ?>

                                <p class="success"><?php echo $_GET['success']; ?></p>
                            
                        <?php } ?>
                        <div class="input-label">
                            <p class="label">Username</p>
                        </div>
                        <input type="text" name="username" id="username" class="input-data-reg" value="<?php echo $row['username']; ?>" disabled>
                    </div>
                    <div class="input-layout">
                        <div class="input-label" style="">
                            <p class="label">Email</p>
                        </div>
                        <input type="text" name="email" id="email" value="<?php echo $row['email']; ?>" class="input-data-reg" disabled >
                    </div>
                    <div class="button-layout-reg">
                        <a href="home.php" class="profile-btn">Back</a>
                        <a href="edit-profile.php?id=<?php echo $row['id']; ?>" class="profile-btn">Edit Profile</a>
                        <a href="edit-password.php?id=<?php echo $row['id']; ?>" class="profile-btn">Edit Password</a>
                    </div>
                    <?php } ?>
                </form>
            </div>
            
        </div>
    </div>
<footer class="footer">
    <div class="cmName">
        <p> © 2023 Web-Based Java Practice</p>
    </div>
</footer>