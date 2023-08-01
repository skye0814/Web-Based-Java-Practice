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

$get_highest_score = mysqli_query($conn, "SELECT (SELECT topic_name FROM user_topic_status WHERE score = (SELECT MAX(score) FROM user_topic_status) LIMIT 1) AS topic_highest FROM user_topic_status LIMIT 1");
$fetch = mysqli_fetch_array($get_highest_score);
$highest_topic = $fetch['topic_highest'];

$get_lowest_score = mysqli_query($conn, "SELECT (SELECT topic_name FROM user_topic_status WHERE score = (SELECT MIN(score) FROM user_topic_status) LIMIT 1) AS topic_lowest FROM user_topic_status LIMIT 1");
$fetch = mysqli_fetch_array($get_lowest_score);
$lowest_topic = $fetch['topic_lowest'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <!-- @* ChartJS *@ -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-gradient"></script>

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
                                <div class="deets">
                                    <h1>Topic Strongest:</h1>
                                    <p><?php echo $highest_topic ?></p>
                                </div>
                                <div class="deets">
                                    <h1>Topic Weakest:</h1>
                                    <p><?php echo $lowest_topic ?></p>
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
                                    <td data-label=" TOPIC NAME:"><h5 class="topic-name"><?php echo $row['topic_name']; ?></h5></td>
                                    <td data-label="PROGRESS:"><h5 class="progress-value"><?php echo $row['progress']; ?>%</h5></td>
                                    <td data-label="ATTEMPTS:"><h5><?php echo $row['attempts']; ?></h5></td>
                                </tr>
                            <?php   }; ?> 
                            </tbody>
                        </table>
                            <canvas id="myChart" style="width:100%;max-width:500px;max-height:100%"></canvas>
                        
                    </div>
            </div>
        </main>
	</div>

	<script>
        $(document).ready(function(){
            const menu_toggle = document.querySelector('.menu-toggle');
            const sidebar = document.querySelector('.sidebar');

            menu_toggle.addEventListener('click', () => {
                menu_toggle.classList.toggle('is-active');
                sidebar.classList.toggle('is-active');
            });
            
            // // For chartjs
            // var yValues = [];
            // var xValues = [];

            // $(".topic-name").each(function() {
            //     xValues.push($(this).text());
            // });

            // $(".progress-value").each(function() {
            //     var str = $(this).text();
            //     yValues.push(str.substring(0, str.length-1));
            // });

            
            // // Instantiate new table
            // var ctx = document.getElementById('myChart');
            // var newChart = new Chart(ctx, {
            //     type: "bar",
            //     data: {
            //         labels: xValues,
            //         datasets: [{
            //             backgroundColor: [
            //                 'rgb(68 172 172)'
            //             ],
            //             borderColor: [
            //                 'rgb(6 33 54)'
            //             ],
            //             borderWidth: 3,
            //             data: yValues,
            //             barThickness: 20,
            //             label: "Progress",
            //             borderRadius: 5
            //         }]
            //     },
            //     options: {
            //         responsive: true,
            //         maintainAspectRatio: true,
            //         resizeDelay: 0,
            //         indexAxis: 'x',
            //         scales: {
            //             x: {
            //                 grid: {
            //                     display: false
            //                 },
            //                 title: {
            //                     font: {
            //                         family: 'Product Sans'
            //                     }
            //                 },
            //                 font: {
            //                     family: 'Product Sans'
            //                 }
            //             },
            //             y: {
            //                 grid: {
            //                     display: false
            //                 },
            //                 ticks: {
            //                     precision: 0
            //                 },
            //                 max: 100
                            
            //             }
            //         },
            //         layout: {
            //             padding: 0
            //         },
            //         plugins: {
            //             legend: {
            //                 display: false,
            //                 labels: {
            //                     font: {
            //                         family: 'Product Sans'
            //                     }
            //                 }
            //             },
            //             title: {
            //                 display: false,
            //                 text: "Topics Progress"
            //             }
            //         }
            //     },
            // });
        });

		
	</script>
    
</body>
</html>