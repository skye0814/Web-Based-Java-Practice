<?php


    session_start();

    @include 'config.php';
    if(isset($_POST['register']))
    {
        $id = time().uniqid();
        $username= $_POST['username'];
        $email= $_POST['email'];
        $password=md5($_POST['password']);

        $check_email_query = "SELECT email FROM users_db WHERE email = '$email' LIMIT 1";
        $check_email_query_run = mysqli_query($conn, $check_email_query);

        if(mysqli_num_rows($check_email_query_run) > 0){
            header("Location:register.php?error=Email Already Registered");
            exit();
        }else{
                $query = "INSERT INTO users_db (id, email, username , password, isactive) 
                VALUES ('$id', '$email','$username', '$password' , 1)";
                $query_run= mysqli_query($conn, $query);
                if($query_run){
                    $select = mysqli_query($conn, "SELECT * FROM topics_db");
                    while($row = mysqli_fetch_assoc($select)){
                        $topic_name = $row['topic_name'];
                        $Qtr = $row['Qtr'];
                        $add = "INSERT INTO user_topic_status (userID, topic_name, Qtr) VALUES ('$id', '$topic_name', '$Qtr')";
                        $query_add= mysqli_query($conn, $add);
                        if($query_add){
                            header("location:login.php?success=Registration Successful!");
                        }
                    }
                }else{
                    header("location:register.php?error=Registered Failed");
                }
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
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <header class="header">
        <a href="index.php" class="logo">
            <img src="./images/logo.png" alt="">
        </a>
        <a href="login.php"><button class = "buttons">Login</button></a>
    </header>

<div class="container-section">
        <div class="form-container-signup">
            <div class="header-section">
                <h3>Register</h3>
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
                            <p class="label">Username</p>
                        </div>
                        <input type="text" name="username" id="username" class="input-data-reg">
                    </div>
                    <div class="input-layout">
                        <div class="input-label">
                            <p class="impt">*</p>
                            <p class="label">Email</p>
                        </div>
                        <input type="text" name="email" id="email" class="input-data-reg">
                    </div>
                    <div class="input-layout">
                        <div class="input-label">
                            <p class="impt">*</p>
                            <p class="label">Password</p>
                        </div>
                        <input type="password" name="password" id="password" class="input-data-reg">
                    </div>
                    <div class="button-layout-reg">
                        <input type="submit" name="register" class="input-reg-btn" value="Sign Up">
                    </div>
                </form>
            </div>

            <div class="login-footer-section">
                <p>Already have an account? </p>
                <p><a href="login.php" class="link-caller">Login</a></p>
            </div>
            
        </div>
    </div>
<footer class="footer">
    <div class="cmName">
        <p> © 2023 Web-Based Java Practice</p>
    </div>
</footer>