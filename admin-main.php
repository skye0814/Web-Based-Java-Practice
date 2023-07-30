<?php

session_start();

@include 'config.php';


/* if(!isset($_SESSION['admin_email']) && empty($_SESSION['admin_email']) ){
    header('Location: login.php');
} */
if(isset($_GET['topic_name'])){
    $topic_name = $_GET['topic_name'];
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM topics_db WHERE id = '$id'");
    mysqli_query($conn, "DELETE FROM question_db WHERE topic = '$topic_name'");
    header('location:admin-main.php');
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
				<a href="admin-main.php" class="menu-item is-active">Topics</a>
				<a href="admin-modules.php" class="menu-item">Modules</a>
                <a href="admin-users.php" class="menu-item">Users</a>
                <a href="logout.php" class="menu-item is-out">Sign Out</a>
            </ul>
			</nav>

		</aside>
        <main class="content">
            <div class="dashboard">
                <div class="cards">
                    <div class="users">
                        <h1 class="name">Topics</h1>
                        <a class ="addBtn" href="admin-add-topic.php">Add Topic</a>
                        <table class="table" >
                            <thead>
                                <tr>
                                    <th>Topic Name</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $select = mysqli_query($conn, "SELECT * FROM topics_db");
                                while($row = mysqli_fetch_assoc($select)){
                            ?>
                                <tr>
                                    <td width="60%" data-label="TOPIC NAME:"><h5><?php echo $row['topic_name']; ?></h5></td>
                                    <td class="btns">
                                        <a class="edit" href="admin-edit-topic.php?id=<?php echo $row['id']; ?>">Edit</a>
                                        <a class="delete" href="admin-main.php?delete=<?php echo $row['id']; ?>&topic_name=<?php echo $row['topic_name']; ?>">Delete</a>
                                        <a class="quest" href="admin-questions.php?topic_name=<?php echo $row['topic_name']; ?>&Qtr=<?php echo $row['Qtr']; ?>">Questions</a>                              
                                </tr>
                            <?php   }; ?> 
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