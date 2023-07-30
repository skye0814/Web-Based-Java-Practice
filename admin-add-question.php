<?php

session_start();

@include 'config.php';


/* if(!isset($_SESSION['admin_email']) && empty($_SESSION['admin_email']) ){
    header('Location: login.php');
} */
    
if(isset($_GET['topic'])){

    $topic_name = $_GET['topic'];


}

    if(isset($_POST['add_question'])){
        $question = $_POST['question'];
        $opt1 = $_POST['opt1'];
        $opt2 = $_POST['opt2'];
        $opt3 = $_POST['opt3'];
        $opt4 = $_POST['opt4'];
        $answer = $_POST['answer'];
        $level = $_POST['level'];

        $insert = "INSERT INTO question_db(question, opt1, opt2, opt3, opt4, answer, level, topic) VALUES ('$question','$opt1','$opt2' ,'$opt3' ,'$opt4', '$answer', '$level', '$topic_name')";
        $upload=mysqli_query($conn,$insert);
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
	<title>Add Question</title>
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
                        <form action="<?php $_SERVER['PHP_SELF']?> " method="POST">
                            <h3>Add Question</h3>
                            <input type="text" name="question" class="box-add" placeholder="Enter Question" required>
                            <input type="text" name="opt1" class="box-add" placeholder="Enter Option 1" required>
                            <input type="text" name="opt2" class="box-add" placeholder="Enter Option 2" required>
                            <input type="text" name="opt3" class="box-add" placeholder="Enter Option 3" required>
                            <input type="text" name="opt4" class="box-add" placeholder="Enter Option 4" required>
                            <input type="text" name="answer" class="box-add" placeholder="Enter Option Number of the right answer. Ex. 1" required>
                            <select class="box-add" name="level">
                                <option value="">Select Level</option>
                                <option value="Easy">Easy</option>
                                <option value="Medium">Medium</option>
                                <option value="Hard">Hard</option>
                            </select>

                            <input type="submit" name="add_question" value="Add Question" class="btn-add">
                            <a href="admin-questions.php?topic=<?php echo $topic_name?>" class="btn-cancel">Cancel</a>
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