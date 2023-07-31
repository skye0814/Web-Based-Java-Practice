<?php

session_start();

@include 'config.php';


/* if(!isset($_SESSION['admin_email']) && empty($_SESSION['admin_email']) ){
    header('Location: login.php');
} */
if (isset($_SESSION['user_id'])) {

    $userid = $_SESSION['user_id'];
}
$get_uname = mysqli_query($conn, "SELECT * FROM users_db WHERE id ='$userid'");
$fetch = mysqli_fetch_array($get_uname);
$id = $fetch['id'];
$username = $fetch['username'];
$score = $fetch['score'];
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
                    <li><a href="user-view-progress.php">Progress</a></li>
                    <li><a href="logout.php">Sign Out</a></li>
                </ul>
            </div>
        </div>
    </header>
    <section class="afternav">

        <div class="dashboard">
            <div class="cards">
                <div class="users">
                    <div class="upper">
                        <div class="details">
                            <h1>USER PROGRESS</h1>
                            <div class="deets">
                                <h1>User ID:</h1>
                                <p>
                                    <?php echo $id ?>
                                </p>
                            </div>
                            <div class="deets">
                                <h1>Username:</h1>
                                <p>
                                    <?php echo $username ?>
                                </p>
                            </div>
                            <div class="deets">
                                <h1>Total Score:</h1>
                                <p>
                                    <?php echo $score ?>
                                </p>
                            </div>
                        </div>
                    
                    </div>
                    <table class="table" style=" margin-top:10px">
                        <thead>
                            <tr>
                                <th>Topic</th>
                                <th>Progress</td>
                                <th>Attempts</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $select = mysqli_query($conn, "SELECT * FROM user_topic_status WHERE userID ='$id'");
                            while ($row = mysqli_fetch_assoc($select)) {
                                ?>
                                <tr>
                                    <td data-label=" TOPIC NAME:">
                                        <h5>
                                            <?php echo $row['topic_name']; ?>
                                        </h5>
                                    </td>
                                    <td data-label="PROGRESS:">
                                        <h5>
                                            <?php echo $row['progress']; ?>%
                                        </h5>
                                    </td>
                                    <td data-label="ATTEMPTS:">
                                        <h5>
                                            <?php echo $row['attempts']; ?>
                                        </h5>
                                    </td>
                                </tr>
                            <?php }
                            ; ?>
                        </tbody>
                    </table>
                </div>
            </div>



    </section>


    <footer class="footer">
        <div class="cmName">
            <p> © 2023 Web-Based Java Practice</p>
        </div>
    </footer>


</body>


<script>
    const dropdown = document.querySelector('.dropdown');
    dropdown.addEventListener('click', () => {
        dropdown.classList.toggle('active');
    });

</script>
<style>
    @media (min-width: 768px){
    .dashboard {
        position: relative;
        left: -300px;
    }
    .table {
        max-width: 250%;
        width: 250%;
    }
}
</style>

</html>