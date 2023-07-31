<?php

session_start();

@include 'config.php';


/* if(!isset($_SESSION['admin_email']) && empty($_SESSION['admin_email']) ){
    header('Location: login.php');
} */
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM modules_db WHERE id = '$id'");
    header('location:admin-modules.php');
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
                <a href="admin-main.php" class="menu-item">Topics</a>
                <a href="admin-modules.php" class="menu-item is-active ">Modules</a>
                <a href="admin-users.php" class="menu-item">Users</a>
                <a href="logout.php" class="menu-item is-out">Sign Out</a>
                </ul>
            </nav>

        </aside>

        <main class="content">
            <div class="container">
                <div class="cards">
                    <?php
                    $topic="";
                    $select = mysqli_query($conn, "SELECT topic_name FROM modules_db GROUP BY topic_name");
                    while ($row = mysqli_fetch_assoc($select)) {
                        $topic = $row['topic_name'];
                        ?>
                        <div class="card"><a class="topic" href="admin-modules-topic.php?topic=<?php echo $row['topic_name']?>"><?php echo $row['topic_name']?></a></div>
                        
                        
                    <?php }
                    ; ?>
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

       
    const topic = document.getAttribute("data-topic");
    const topicInput = document.getElementById("topic");
    topicInput.value = topic;
    </script>
</body>

</html>