<?php

session_start();

@include 'config.php';


/* if(!isset($_SESSION['admin_email']) && empty($_SESSION['admin_email']) ){
    header('Location: login.php');
} */
    
if(isset($_GET['topic'])){

    $topic_name = $_GET['topic'];

}
if(isset($_GET['id'])){

    $id = $_GET['id'];

}
    if(isset($_POST['edit_question'])){
        $question = $_POST['question'];
        $opt1 = $_POST['opt1'];
        $opt2 = $_POST['opt2'];
        $opt3 = $_POST['opt3'];
        $opt4 = $_POST['opt4'];
        $answer = $_POST['answer'];
        $level = $_POST['level'];
        $topic_name = $_POST['topic'];
        $update = "UPDATE question_db SET question = '$question', opt1 ='$opt1', opt2 ='$opt2', opt3 ='$opt3', opt4 ='$opt4', answer ='$answer', level ='$level', topic ='$topic_name' WHERE id = '$id'";
        $upload=mysqli_query($conn,$update);
        if($upload){
            header('location:admin-questions.php?topic_name='.$topic_name);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Question</title>
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
                    <div class = "add-question">
                        <?php
                    
                            $select = mysqli_query($conn, "SELECT * FROM question_db WHERE id = '$id'");
                            while($row = mysqli_fetch_assoc($select)){

                            
                        ?>
                            <form action="<?php $_SERVER['PHP_SELF']?> " method="POST">
                                <h3>Add Question</h3>
                                <input type="text" name="question" value = "<?php  echo $row['question']; ?>" class="box-add" placeholder="Enter Question" required>
                                <input type="text" name="opt1" value = "<?php  echo $row['opt1']; ?>" class="box-add" placeholder="Enter Option 1" required>
                                <input type="text" name="opt2" value = "<?php  echo $row['opt2']; ?>" class="box-add" placeholder="Enter Option 2" required>
                                <input type="text" name="opt3" value = "<?php  echo $row['opt3']; ?>" class="box-add" placeholder="Enter Option 3" required>
                                <input type="text" name="opt4" value = "<?php  echo $row['opt4']; ?>" class="box-add" placeholder="Enter Option 4" required>
                                <input type="text" name="answer" value = "<?php  echo $row['answer']; ?>" class="box-add" placeholder="Enter Answer" required>
                                <select class="box-add" name="level">
                                    <option value= "<?php  echo $row['level']; ?>"><?php  echo $row['level']; ?></option>
                                    <option value="Easy">Easy</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Hard">Hard</option>
                                </select>
                                <input type="hidden" name="topic" value="<?php  echo $row['topic']; ?>">

                                <input type="submit" name="edit_question" value="Update" class="btn-add">
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