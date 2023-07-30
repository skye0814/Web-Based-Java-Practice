<?php

session_start();

@include 'config.php';


/* if(!isset($_SESSION['admin_email']) && empty($_SESSION['admin_email']) ){
    header('Location: login.php');
} */

if(isset($_GET['id'])){

    $id = $_GET['id'];

}
    if(isset($_POST['edit_topic'])){
        $topic_name = $_POST['topic_name'];
        $Qtr = $_POST['Qtr'];
        $update = "UPDATE topics_db SET topic_name = '$topic_name', Qtr = '$Qtr' WHERE id = '$id'";
        $upload=mysqli_query($conn,$update);
        if($upload){
            header('location:admin-main.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Topic</title>
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
                    <div class = "add-topic">
                    <?php
                
                        $select = mysqli_query($conn, "SELECT * FROM topics_db WHERE id = '$id'");
                        while($row = mysqli_fetch_assoc($select)){

                        
                    ?>
                        <form action="<?php $_SERVER['PHP_SELF']?> " method="POST">
                            <h3>Edit Topic</h3>
                            <input type="text" name="topic_name" value = "<?php  echo $row['topic_name']; ?>" class="box-add" placeholder="Enter Topic" required>
                            <select class="box-add" name="Qtr">
                                <option value= "<?php  echo $row['Qtr']; ?>"><?php  echo $row['Qtr']; ?></option>
                                <option value="1st Quarter">1st Quarter</option>
                                <option value="2nd Quarter">2nd Quarter</option>
                                <option value="3rd Quarter">3rd Quarter</option>
                                <option value="4th Quarter">4th Quarter</option>
                            </select>
                            <input type="submit" name="edit_topic" value="Update" class="btn-add">
                            <a href="admin-main.php" class="btn-cancel">Cancel</a>
                    
                        </form>
                    <?php   }; ?>
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