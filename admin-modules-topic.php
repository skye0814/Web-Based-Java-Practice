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
}else if(isset($_GET['topic'])){
    $topic= $_GET['topic'];
    $topic = preg_replace('/%20/', ' ', $topic);
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
            <input type="hidden" id="topic">
            <div class="dashboard" >
                <div class="cards">
                <div class="users">
                        <h1 class="name">Topics</h1>
                        <a class ="backBtn" href="admin-modules.php">BACK Modules</a>
                        <a class ="addBtn" href="admin-add-module.php">Add Modules</a>
                        <table class="table" >
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Topic Name</th>
                                    <th>Module</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $select = mysqli_query($conn, "SELECT * FROM modules_db WHERE topic_name = '$topic'");
                                while($row = mysqli_fetch_assoc($select)){
                            ?>
                                <tr>
                                    <td><h5><?php echo $row['id']; ?></h5></td>
                                    <td width="30%" data-label="TOPIC NAME:"><h5><?php echo $row['topic_name']; ?></h5></td>
                                    <td width="40%" data-label="MODULE NAME:"><h5><?php echo $row['module_name']; ?></h5></td>
                                    <td width="20%"class="btns">
                                        <a class="delete" href="admin-modules.php?delete=<?php echo $row['id']; ?>">Delete</a>
                                        <a class="quest" href="admin-view-pdf.php?id=<?php echo $row['id'];?>&<?php echo $row['topic_name']?>">View</a>                              
                                </tr>
                            <?php   }; ?> 
                            </tbody>
                        </table>
                    </div>
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