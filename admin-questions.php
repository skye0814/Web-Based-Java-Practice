<?php

session_start();

@include 'config.php';

/*if(!isset($_SESSION['admin_email']) && empty($_SESSION['admin_email']) ){
    header('Location: login.php');
}*/

if(isset($_GET['topic_name'])){

    $topic = $_GET['topic_name'];

}
if(isset($_GET['topic'])){

    $topic = $_GET['topic'];

}
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM question_db WHERE id = '$id'");
    header('location:admin-questions.php?topic_name='.$topic);
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
				<a href="admin-modules.php" class="menu-item ">Modules</a>
                <a href="admin-users.php" class="menu-item">Users</a>
                <a href="logout.php" class="menu-item is-out">Sign Out</a>
            </ul>
			</nav>

		</aside>
        <main class="content">
            <div class="dashboard">
                <div class="cards">
                    <div class="users">
                        <h1 class="name">Questions</h1>
                        <a class ="addBtn" href="admin-add-question.php?topic=<?php echo $topic ?>">Add Question</a>
                        <table class="table" >
                            <thead>
                                <tr>
                                    <th>Question</th>
                                    <th>Option 1</th>
                                    <th>Option 2</th>
                                    <th>Option 3</th>
                                    <th>Option 4</th>
                                    <th>Answer</th>
                                    <th>Level</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $select = mysqli_query($conn, "SELECT * FROM question_db where topic='$topic' order by id asc");
                                    while($row = mysqli_fetch_assoc($select)){
                                ?>
                                <tr>
                                    <td data-label="QUESTION:"><h5><?php echo $row['question']; ?></h5></td>
                                    <td data-label="OPTION 1:"><h5><?php echo $row['opt1']; ?></h5></td>
                                    <td data-label="OPTION 2:"><h5><?php echo $row['opt2']; ?></h5></td>
                                    <td data-label="OPTION 3:"><h5><?php echo $row['opt3']; ?></h5></td>
                                    <td data-label="OPTION 4:"><h5><?php echo $row['opt4']; ?></h5></td>
                                    <td data-label="ANSWER:"><h5><?php echo $row['answer']; ?></h5></td>
                                    <td data-label="LEVEL:"><h5><?php echo $row['level']; ?></h5></td>
                                    <td width="20%">
                                        <a class="edit" href="admin-edit-questions.php?id=<?php echo $row['id']; ?>,topic=<?php echo $row['topic']; ?>">Edit</a>
                                        <a class="delete" href="admin-questions.php?delete=<?php echo $row['id']; ?>&topic=<?php echo $topic ?>">Delete</a>
                                    </td>
                                <tr>
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