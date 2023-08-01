<?php

session_start();

@include 'config.php';


/* if(!isset($_SESSION['admin_email']) && empty($_SESSION['admin_email']) ){
    header('Location: login.php');
} */
if(isset($_GET['id'])){

    $userid = $_GET['id'];
}
$get_uname = mysqli_query($conn, "SELECT * FROM users_db WHERE id ='$userid'");
$fetch = mysqli_fetch_array($get_uname);
$id=$fetch['id'];
$username = $fetch['username'];
$score = $fetch['score'];
$manilaTimeZone = new DateTimeZone('Asia/Manila');

$manilaDateTime = new DateTime('now', $manilaTimeZone);
$manilaTime = $manilaDateTime->format('M-d-Y H:i:s');
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
                        <div class="upper">
                            <div class="details">
                                <h1>USER PROGRESS</h1>
                                <div class="deets">
                                    <h1>Date:</h1>
                                    <p><?php echo $manilaTime ?></p>
                                </div>
                                <div class="deets">
                                    <h1>User ID:</h1>
                                    <p><?php echo $id ?></p>
                                </div>
                                <div class="deets">
                                    <h1>Username:</h1>
                                    <p><?php echo $username ?></p>
                                </div>
                                <div class="deets">
                                    <h1>Total Score:</h1>
                                    <p><?php echo $score ?></p>
                                </div>

                            </div>
                            <div class="reportBtn">
                                <a class ="addBtn" href="admin-generate-progress.php?id=<?php echo $userid?>">Generate Report</a>
                            </div>
                        </div>
                        <table class="table" style=" margin-top:10px" >
                            <thead>
                                <tr>
                                    <th>Topic</th>
                                    <th>Progress</td>
                                    <th>Attempts</td>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                
                                $select = mysqli_query($conn, "SELECT * FROM user_topic_status WHERE userID ='$id'");
                                while($row = mysqli_fetch_assoc($select)){
                            ?>
                                <tr>
                                    <td data-label=" TOPIC NAME:"><h5><?php echo $row['topic_name']; ?></h5></td>
                                    <td data-label="PROGRESS:"><h5><?php echo $row['progress']; ?>%</h5></td>
                                    <td data-label="ATTEMPTS:"><h5><?php echo $row['attempts']; ?></h5></td>
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