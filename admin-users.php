<?php

session_start();

@include 'config.php';


/* if(!isset($_SESSION['admin_email']) && empty($_SESSION['admin_email']) ){
    header('Location: login.php');
} */
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM users_db WHERE id = '$id'");
    mysqli_query($conn, "DELETE FROM user_topic_status WHERE userID = '$id'");
    header('location:admin-users.php');

} else if (isset($_GET['edit'])) {

    $id = $_GET['edit'];
    $select = mysqli_query($conn, "SELECT * FROM users_db  WHERE id = '$id'");
    $row = mysqli_fetch_assoc($select);

    if ($row['isactive'] == 0) {
        mysqli_query($conn, "UPDATE users_db SET `isactive`=1 WHERE id = '$id'");
    } else if ($row['isactive'] == 1) {
        mysqli_query($conn, "UPDATE users_db SET `isactive`=0 WHERE id = '$id'");
    }



    header('location:admin-users.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Practice </title>
    <link rel="stylesheet" href="./assets/css/admin.css" />
</head>

<body>
    <div class="app">
        <div class="menu-toggle">
            <div class="hamburger">
                <span></span>
            </div>
        </div>

        <aside class="sidebar">
            <div class="logo">
                <img src="./images/logo.png" alt="">
            </div>
            <nav class="menu">
                <a href="admin-main.php" class="menu-item ">Topics</a>
                <a href="admin-modules.php" class="menu-item">Modules</a>
                <a href="admin-users.php" class="menu-item is-active">Users</a>
                <a href="logout.php" class="menu-item is-out">Sign Out</a>
                </ul>
            </nav>

        </aside>
        <main class="content">
            <div class="dashboard">
                <div class="cards">
                    <div class="users">
                        <h1 class="name">Users</h1>
                        <a class="repBtn" href="admin-generate-report.php">Generate Report</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>TOPIC</td>
                                    <th>Hi-Score</td>
                                    <th>TOPIC</td>
                                    <th>Low-Score</td>
                                    <th>User Type</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php


                                $select = mysqli_query($conn, "SELECT * FROM users_db");

                                while ($row = mysqli_fetch_assoc($select)) {
                                    $id = $row['id'];
                                    $hiqry = mysqli_query($conn, "SELECT *
                             FROM user_topic_status
                             WHERE userID = '$id'
                             AND score = (SELECT MAX(score) FROM user_topic_status WHERE userID = '$id')");

                                    // Get the row with the lowest score
                                    $lowqry = mysqli_query($conn, "SELECT *
                              FROM user_topic_status
                              WHERE userID = '$id'
                              AND score = (SELECT MIN(score) FROM user_topic_status WHERE userID = '$id')");
                                    $hifetch = mysqli_fetch_assoc($hiqry);
                                    $lowfetch = mysqli_fetch_assoc($lowqry);
                                    ?>
                                    <tr>
                                        <td data-label="USERNAME:">
                                            <h5>
                                                <?php echo $row['username']; ?>
                                            </h5>
                                        </td>
                                        <td width="40%" data-label="EMAIL:">
                                            <h5>
                                                <?php echo $row['email']; ?>
                                            </h5>
                                        </td>
                                        <td data-label="TOPIC:">
                                            <h5>
                                                <?php echo $hifetch['topic_name']; ?>
                                            </h5>
                                        </td>

                                        <td data-label="HI-SCORE:">
                                            <h5>
                                                <?php echo $hifetch['score']; ?>
                                            </h5>
                                        </td>
                                        <td data-label="TOPIC:">
                                            <h5>
                                                <?php echo $lowfetch['topic_name']; ?>
                                            </h5>
                                        </td>

                                        <td data-label="LOW-SCORE:">
                                            <h5>
                                                <?php echo $lowfetch['score']; ?>
                                            </h5>
                                        </td>
                                        <td data-label="USER TYPE:">
                                            <h5>
                                                <?php echo $row['user_type']; ?>
                                            </h5>
                                        </td>
                                        <td data-label="STATUS:">
                                            <?php
                                            if ($row['isactive'] == 0) {
                                                echo '<h5 style="color: red;">INACTIVE</h5>';
                                            } else {
                                                echo '<h5 style="color: green;">ACTIVE</h5>';
                                            }
                                            ?>
                                        </td>
                                        <td data-label="ACTION: " class="btns">
                                            <a class="delete" href="admin-users.php?edit=<?php echo $row['id']; ?>">Edit
                                                Status</a>
                                            <a class="delete" href="admin-users.php?delete=<?php echo $row['id']; ?>">Delete
                                                User</a>

                                            <?php
                                            if ($row['user_type'] == "user") {


                                                ?>
                                                <a class="quest"
                                                    href="admin-view-progress.php?id=<?php echo $row['id']; ?>">View
                                                    Progress</a>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                <?php }
                                ; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
        </main>
    </div>

    <script>
        const menu_toggle = document.querySelector('.menu-toggle');
        const sidebar = document.querySelector('.sidebar');

        menu_toggle.addEventListener('click', () => {
            menu_toggle.classList.toggle('is-active');
            sidebar.classList.toggle('is-active');
        });
    </script>
</body>

</html>