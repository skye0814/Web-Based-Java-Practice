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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css">
    <script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.js"></script>
</head>

<style>
    .cards{
    max-width: 1200px !important;
    margin: 0 auto !important;
    display: grid !important;
    gap: 1rem !important;
}

.card {
    width: unset;
    background-color: #f2f2f2 !important;
    border: unset;
    border-radius: 5px !important;
    padding: 20px !important;
    margin: 5px !important;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px !important;
    /* box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px; */
    cursor: pointer !important;
    transition: background-color 0.3s ease !important;
  }
  
  .card:hover {
    background-color: #e0e0e0 !important;
  }

  @media (min-width: 1100px) {
    .cards { grid-template-columns: repeat(5, 1fr); }
  }
  
  @media (max-width: 1100px) {
    .cards { grid-template-columns: repeat(4, 1fr); }
  }

  @media (max-width: 880px) {
    .cards { grid-template-columns: repeat(3, 1fr); }
  }

  @media (max-width: 760px) {
    .cards { grid-template-columns: repeat(2, 1fr); }
  }

  @media (max-width: 360px) {
    .cards { grid-template-columns: repeat(1, 1fr); }
  }
</style>

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
    $( document ).ready(function() {
        $('.card').on('click', function(){
            window.location.href = $(this).children('.topic').attr('href');
        });
        
    });
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