<?php
session_start();
@include 'config.php';
class users
{
    public $host = "localhost";
    public $username = "root";
    public $pass = "";
    public $db_name = "u874536709_jofdb";
    public $conn;
    public $data;

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->pass, $this->db_name);
        if ($this->conn->connect_errno) {
            die("database connection failed" . $this->conn->connect_errno);
        }
    }
    public function answer($data)
    {
        $right = 0;
        $wrong = 0;
        $no_answer = 0;
        $topic = $_POST['topic'];
        $level = $_POST['level'];
        $Qtr = $_POST['Qtr'];
        $startTime = $_POST['startTime'];
        $userID = $_SESSION['user_id'];
        $query = $this->conn->query("select id,answer from question_db where topic='$topic' and level='$level'");
        while ($qust = $query->fetch_array(MYSQLI_ASSOC)) {
            if ($qust['answer'] == $_POST[$qust['id']]) {
                $right++;
            } elseif ($_POST[$qust['id']] == "no_attempt") {
                $no_answer++;
            } else {
                $wrong++;
            }
        }
        if ($right >= 4 && $level == 'Easy') {
            header('Location: quiz.php?topic=' . $topic . '&level=' . 'Medium' . '&Qtr=' . $Qtr);
        }
        if ($right >= 4 && $level == 'Medium') {
            header('Location: quiz.php?topic=' . $topic . '&level=' . 'Hard' . '&Qtr=' . $Qtr);
        }
        $total_qus = $right + $wrong + $no_answer;
        $per = ($right * 100) / ($total_qus);
        $updateProg = "UPDATE user_topic_status SET progress = '$per' WHERE topic_name = '$topic' AND userID = '$userID'";

        $resultProg = $this->conn->query($updateProg);

        $get_uname = "SELECT * FROM users_db WHERE id ='$userID'";
        $fetch = $this->conn->query($get_uname);
        foreach ($fetch as $score) {
            $curscore = $score['score'];
        }

        $get_topic = "SELECT * FROM user_topic_status WHERE topic_name = '$topic' AND id ='$userID'";
        $fetchtopic = $this->conn->query($get_topic);
        $result= $fetchtopic->fetch_assoc();
        $currscoredb = $result['score'];
        if($currscoredb < $right){
            $update = "UPDATE user_topic_status SET score = '$right' WHERE topic_name = '$topic' AND userID = '$userID'";
            $this->conn->query($update);
        }
       

        $totalScore = $curscore + $right;
        $update = "UPDATE users_db SET score = '$totalScore' WHERE id = '$userID'";
        $result = $this->conn->query($update);
        if ($level == 'Easy') {
            if ($right >= 4) {
                $update = "UPDATE user_topic_status SET medium = '$right' WHERE topic_name = '$topic' AND userID = '$userID'";
                $result = $this->conn->query($update);
            }
        } elseif ($level == 'Medium') {
            if ($right >= 4) {
                $update = "UPDATE user_topic_status SET hard = '$right' WHERE topic_name = '$topic' AND userID = '$userID'";
                $result = $this->conn->query($update);
            }
        }
        if ($Qtr == '1st Quarter') {
            if ($right >= 4 && $level == 'Hard') {
                $updateTStatus = "UPDATE user_topic_status SET topicStatus = 'true' WHERE userID = '$userID' AND topic_name = '$topic'";
                $resultStatus = $this->conn->query($updateTStatus);
                $check_status_query = "SELECT topicStatus FROM user_topic_status WHERE userID = '$userID' AND topicStatus = 'false' AND Qtr = '$Qtr'";
                $check_status_query_run = $this->conn->query($check_status_query);
                if (mysqli_num_rows($check_status_query_run) > 0) {
                    $update = "UPDATE users_db SET 2ndQtr = 'locked' WHERE id = '$userID'";
                    $result = $this->conn->query($update);
                } else {
                    $update = "UPDATE users_db SET 2ndQtr = 'unlocked' WHERE id = '$userID'";
                    $result = $this->conn->query($update);
                }
            }
        }
        if ($Qtr == '2nd Quarter') {
            if ($right >= 4 && $level == 'Hard') {
                $updateTStatus = "UPDATE user_topic_status SET topicStatus = 'true' WHERE userID = '$userID' AND topic_name = '$topic'";
                $resultStatus = $this->conn->query($updateTStatus);
                $check_status_query = "SELECT topicStatus FROM user_topic_status WHERE userID = '$userID' AND topicStatus = 'false' AND Qtr = '$Qtr'";
                $check_status_query_run = $this->conn->query($check_status_query);
                if (mysqli_num_rows($check_status_query_run) > 0) {
                    $update = "UPDATE users_db SET 3rdQtr = 'locked' WHERE id = '$userID'";
                    $result = $this->conn->query($update);
                } else {
                    $update = "UPDATE users_db SET 3rdQtr = 'unlocked' WHERE id = '$userID'";
                    $result = $this->conn->query($update);
                }
            }
        }
        if ($Qtr == '3rd Quarter') {
            if ($right >= 4 && $level == 'Hard') {
                $updateTStatus = "UPDATE user_topic_status SET topicStatus = 'true' WHERE userID = '$userID' AND topic_name = '$topic'";
                $resultStatus = $this->conn->query($updateTStatus);
                $check_status_query = "SELECT topicStatus FROM user_topic_status WHERE userID = '$userID' AND topicStatus = 'false' AND Qtr = '$Qtr'";
                $check_status_query_run = $this->conn->query($check_status_query);
                if (mysqli_num_rows($check_status_query_run) > 0) {
                    $update = "UPDATE users_db SET 4thQtr = 'locked' WHERE id = '$userID'";
                    $result = $this->conn->query($update);
                } else {
                    $update = "UPDATE users_db SET 4thQtr = 'unlocked' WHERE id = '$userID'";
                    $result = $this->conn->query($update);
                }
            }
        }
        $updateA = "UPDATE user_topic_status SET attempts = attempts + 1 WHERE userID = '$userID' AND topic_name = '$topic'";
        $result = $this->conn->query($updateA);

        $array = array();
        $array['right'] = $right;
        $array['wrong'] = $wrong;
        $array['no_answer'] = $no_answer;
        return $array;


    }

}

?>