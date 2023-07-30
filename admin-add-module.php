<?php

session_start();

@include 'config.php';


/* if(!isset($_SESSION['admin_email']) && empty($_SESSION['admin_email']) ){
    header('Location: login.php');
} */


    if(isset($_POST['add_module'])){
        $topic_level = $_POST['topic_level'];
        $topic_name = $_POST['topic_name'];
        $module = $_FILES['module']['name'];
        $module_tmp_name = $_FILES['module']['tmp_name'];
        $module_folder='pdf/'.$module;
        
        $insert = "INSERT INTO modules_db(topic_name, module_name, topic_level) VALUES ('$topic_name','$module','$topic_level')";
        $upload=mysqli_query($conn,$insert);
        if($upload){
            move_uploaded_file($module_tmp_name, $module_folder);
            header('location:admin-modules.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Module</title>
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
				<a href="admin-modules.php " class="menu-item is-active">Modules</a>
                <a href="admin-users.php" class="menu-item">Users</a>
                <a href="logout.php" class="menu-item is-out">Sign Out</a>
            </ul>
			</nav>

		</aside>
        <main class="content">
            <div class="dashboard">
                <div class="cards">
                    <div class = "add-topic">
                        <form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
                            <h3>Add Module</h3>
                            <select name="topic_name" id="topic_name" class="box-add">
                            
                            <option>Select Topic</option>
                                <?php
                                    $select = mysqli_query($conn, "SELECT * FROM topics_db");
                                    while($row = mysqli_fetch_assoc($select)){
                                ?>
                                <option value="<?php echo $row['topic_name']; ?>"><?php echo $row['topic_name']; ?></option>
                                <?php   }; ?> 
                            </select>
                            <select name="topic_level" id="topic_level" class="box-add">
                            
                            <option>Select Level</option>
                                <option value="Easy">Easy</option>
                                <option value="Medium">Medium</option>
                                <option value="Hard">Hard</option>
                            </select>
                            <input type ="file" name="module" class="box-add">
                            <input type="submit" name="add_module" value="Add Module" class="btn-add">
                            <a href="admin-modules.php" class="btn-cancel">Cancel</a>
                        </form>
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