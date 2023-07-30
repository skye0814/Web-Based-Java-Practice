
<?php

session_start();

@include 'config.php';
if(isset($_GET['topic_name'])){

    $topic = $_GET['topic_name'];

}
if(isset($_GET['id'])){

    $id = $_GET['id'];

}

/* if(!isset($_SESSION['admin_email']) && empty($_SESSION['admin_email']) ){
    header('Location: login.php');
} */
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
            <div class="dashboard">
                <?php
                    @include 'config.php';
                    $sql="SELECT * from modules_db WHERE id = '$id'";
                    $query = mysqli_query($conn,$sql);
                    while($info=mysqli_fetch_array($query)){
                ?>
                <embed type="application/pdf" src="pdf/<?php echo $info['module_name'];?>" width="100%" height="600px">
                <?php
                    }
                ?>
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