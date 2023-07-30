<?php
    @include 'config.php';

    session_start();

    if(isset($_POST['login'])){

        if(!empty(trim($_POST['email'])) && !empty(trim($_POST['password'])))
        {
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $password = md5($password);

            $login_query = "SELECT * FROM `users_db`  WHERE  email = '$email' AND password = '$password'";
            $login_query_run = mysqli_query($conn,$login_query);

            if(mysqli_num_rows($login_query_run) > 0){
                $row = mysqli_fetch_array($login_query_run);

                if($row['user_type'] == 'admin'){
                    $_SESSION['admin_name'] =$row['name'];
                    $_SESSION['admin_email'] =$row['email'];
                    $_SESSION['admin_id'] =$row['id'];
                    header('location:admin-main.php');
    
                }elseif($row['user_type'] == 'user'){
    
                    $_SESSION['user_name'] =$row['name'];
                    $_SESSION['email'] =$row['email'];
                    $_SESSION['user_id'] =$row['id'];
                header('location:home.php');
                }

            }else{
                header('location:login.php?error=Invalid Email or Password');
                exit(0);

            }
            
        }else{
                header('location:login.php?error=Fields cannot be empty');
                exit(0);
            }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Practice</title>
    <link rel="stylesheet" href="./assets/css/index.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <header class="header">
        <a href="index.php" class="logo">
            <img src="./images/logo.png" alt="">
        </a>
        <a href="register.php"><button class = "buttons">Sign Up</button></a>
    </header>

    <div class="container-section">
        <div class="form-container">
            <div class="header-section">
                <h3>Login Form</h3>
            </div>
            <div class="body-section">
                <form action="" method="POST">
                    <div class="login">
                        <div class="input-layout">
                            <?php 
                            if(isset($_GET['success'])){ ?>
                                <p class="success"><?php echo $_GET['success']; ?></p>
                            <?php } ?>
                            <?php 
                            if(isset($_GET['error'])){ ?>
                                <p class="error"><?php echo $_GET['error']; ?></p>
                            <?php } ?>
                            <div class="input-label">
                                <p class="impt">*</p>
                                <p class="label">Email</p>
                            </div>
                            <input type="text" name="email" id="email"class="input-data">
                        </div>
                        <div class="input-layout">
                            <div class="input-label">
                                <p class="impt">*</p>
                                <p class="label">Password</p>
                            </div>
                            <input type="password" name="password" id="password" class="input-data">
                        </div>
                        <div class="button-layout">
                            <input type="submit" name="login" class="input-login-btn" value="Login">
                        </div>
                    </div>
                </form>
            </div>

            <div class="login-footer-section">
                <p>Don't have an account yet? </p>
                <p><a href="register.php" class="">Create account</a></p>
            </div>
        </div>
    </div>
<footer class="footer">
    <div class="cmName">
        <p> © 2023 Web-Based Java Practice</p>
    </div>
</footer>