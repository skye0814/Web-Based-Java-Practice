<?php

session_start();

@include 'config.php';

$userID = $_SESSION['user_id'];
if (!isset($_SESSION['email']) && empty($_SESSION['email'])) {
    header('Location: login.php');
}
if (isset($_GET['topic'])) {

    $topic = $_GET['topic'];


}
if (isset($_GET['level'])) {
    $level = $_GET['level'];
}
if (isset($_GET['Qtr'])) {
    $Qtr = $_GET['Qtr'];
}
$topic_sanitize = preg_replace('/%20/', ' ', $topic);
$get_attempt = mysqli_query($conn, "SELECT * FROM user_topic_status WHERE userID ='$userID' AND topic_name = '$topic_sanitize'");
$fetch = mysqli_fetch_array($get_attempt);
if ($fetch) {
    $id = $fetch['userID'];
    $topic_name = $fetch['topic_name'];
    $attempts = $fetch['attempts'];
    if ($attempts >= 3) {
        $user_attempt = mysqli_query($conn, "SELECT * FROM user_attempts WHERE user_id ='$userID' AND topics_id = '$topic_sanitize'");
        $fetch_attempt = mysqli_fetch_array($user_attempt);



        if ($fetch_attempt == 0) {
            date_default_timezone_set("Asia/Manila");

            $curr_date = date("Y-m-d");
            $curr_time = date("H:i:s");

            $date_today = "$curr_date $curr_time";

            mysqli_query($conn, "INSERT INTO `user_attempts`(`user_id`, `topics_id`, `expiry`, `isactive`) VALUES ('$userID','$topic_sanitize','$date_today', 1)");
            @include 'modal-quiz.php';
        } else {
            date_default_timezone_set("Asia/Manila");

            $curr_datetime = new DateTime("now", new DateTimeZone("Asia/Manila"));
            $expiry_datetime = new DateTime($fetch_attempt['expiry']);

            $expiry_datetime->add(new DateInterval("P1D"));

            $expiry_string = $expiry_datetime->format('M-d-Y h:i:s a');

            if ($curr_datetime <= $expiry_datetime && $fetch_attempt['isactive'] = 1) {
                @include 'modal-quiz.php';
            } else {
                mysqli_query($conn, " UPDATE `user_topic_status` SET `attempts`= 0 WHERE user_id ='$userID' AND topics_id = '$topic_sanitize'");

                mysqli_query($conn, "DELETE FROM `user_attempts` WHERE user_id ='$userID' AND topics_id = '$topic_sanitize'");

            }

        }
    }
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
        function timeout() {
            var hours = Math.floor(timeLeft / 3600);
            var minute = Math.floor((timeLeft - (hours * 60 * 60)) / 60);
            var second = timeLeft % 60;
            var hrs = checktime(hours);
            var mint = checktime(minute);
            var sec = checktime(second);

            if (timeLeft <= 0) {
                clearTimeout(tm);
                document.getElementById("form1").submit();
            } else {
                document.getElementById("time").innerHTML = hrs + ":" + mint + ":" + sec;
            }

            timeLeft--;
            var tm = setTimeout(function () {
                timeout();
            }, 1000);
        }

        function checktime(msg) {
            if (msg < 10) {
                msg = "0" + msg;
            }
            return msg;
        }
    </script>
    <style>
        .header {
            position: absolute !important;
        }
    </style>

</head>

<body onload="timeout()">

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

        <section class="afternav">
            <div class="wrapper">
                <div class="container">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <div class="timer">
                            <script type="text/javascript">
                                var timeLeft = 15 * 60;
                                <?php
                                $startTime = strtotime(date('H:i:s'));
                                ?>
                            </script>
                            <h2>


                                <div id="time" style="float:right">timeout</div>
                            </h2>
                        </div>
                        <form method="post" id="form1" action="answer.php">

                            <?php
                            $i = 1;
                            $select = mysqli_query($conn, "SELECT * FROM question_db where topic='$topic' and level = '$level' order by rand()");
                            while ($row = mysqli_fetch_assoc($select)) {
                                ?>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="unselectable">
                                            <th>
                                                <?php echo $i; ?>
                                                <?php echo $row['question']; ?>
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody class="question-body">
                                        <div class="question">
                                            <?php if (isset($row['opt1'])) { ?>
                                                <tr class="info">
                                                    <td><input type="radio" class="opts" style="width: 15px; height:15px;"
                                                            value="1" name="<?php echo $row['id']; ?>" />&nbsp;<?php echo $row['opt1']; ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            <?php if (isset($row['opt2'])) { ?>
                                                <tr class="info">
                                                    <td><input type="radio" class="opts" style="width: 15px; height:15px;"
                                                            value="2" name="<?php echo $row['id']; ?>" />&nbsp;<?php echo $row['opt2']; ?></td>
                                                </tr>
                                            <?php } ?>
                                            <?php if (isset($row['opt3'])) { ?>
                                                <tr class="info">
                                                    <td><input type="radio" class="opts" style="width: 15px; height:15px; "
                                                            value="3" name="<?php echo $row['id']; ?>" />&nbsp;<?php echo $row['opt3']; ?></td>
                                                </tr>
                                            <?php } ?>
                                            <?php if (isset($row['opt4'])) { ?>
                                                <tr class="info">
                                                    <td><input type="radio" class="opts" id="opts1"
                                                            style="width: 15px; height:15px;" value="4"
                                                            name="<?php echo $row['id']; ?>" />&nbsp;<?php echo $row['opt4']; ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </div>
                                        <tr class="info">
                                            <td><input type="radio" checked="checked" style="display:none"
                                                    value="no_attempt" name="<?php echo $row['id']; ?>" /></td>
                                        </tr>
                                        <input type="hidden" value="<?php echo $topic ?>" name="topic">
                                        <input type="hidden" value="<?php echo $level ?>" name="level">
                                        <input type="hidden" value="<?php echo $Qtr ?>" name="Qtr">
                                        <input type="hidden" value="<?php echo $startTime ?>" name="startTime">

                                    </tbody>

                                </table>
                                <?php $i++;
                            } ?>
                            <center><input type="submit" value="submit Quiz" class="btn-back" id="submitBtn" /></center>
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
        $(document).ready(function () {

            const modal = document.getElementById("myModal");
            const closeModalBtn = document.getElementById("closeModalBtn");
            const closeBtn = document.getElementById("closeBTN");
            if (modal) {

                modal.style.display = "block";

                closeModalBtn.addEventListener("click", function () {
                    window.location.href = "home.php";
                });


                closeBtn.addEventListener("click", function () {
                    window.location.href = "home.php";
                });
            }





            var numberOfItems = $('.question-body').length;
            var isAllValid = false;
            $('#submitBtn').prop('disabled', true);
            $('#form1').on('change', function () {
                var itemsChecked = $('.opts:checked').length;

                if (numberOfItems === itemsChecked) {
                    isAllValid = true;
                }
                console.log(isAllValid);
                $('#submitBtn').prop('disabled', !isAllValid);
            });


        });



    </script>

</html>