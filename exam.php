<?php
session_start();
include "db.php";

if(!isset($_SESSION['user_name'])){ header("Location: login.php"); exit(); }

// Settings se data lena
$subject_id = mysqli_real_escape_string($conn, $_GET['subject_id']);
$q_limit = (int)$_GET['q_limit']; // Kitne sawal
$t_limit = (int)$_GET['t_limit']; // Kitne minute

// SQL: LIMIT ka use karke hum questions ko control karenge
$sql = "SELECT * FROM questions WHERE subject_id = '$subject_id' ORDER BY RAND() LIMIT $q_limit";
$result = $conn->query($sql);

$qno = 1;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Online Exam</title>
    <style>
        body { font-family: Arial; background: #f4f6f9; }
        .container { width: 700px; margin: 40px auto; background: white; padding: 25px; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0,0,0,0.1); }
        .timer-head { position: sticky; top: 0; background: #fff; padding: 10px; border-bottom: 2px solid #007bff; display: flex; justify-content: space-between; }
        .question { margin: 20px 0; padding: 15px; background: #fafafa; border-radius: 5px; }
        label { display: block; padding: 8px; cursor: pointer; border-radius: 4px; }
        label:hover { background: #eee; }
        button#subBtn { width: 100%; padding: 15px; background: #28a745; color: white; border: none; border-radius: 5px; font-size: 18px; cursor: pointer; }
    </style>
</head>
<body>

<div class="container">
    <div class="timer-head">
        <strong>Exam in Progress</strong>
        <span style="color:red">Time Left: <span id="timer_min">00</span>:<span id="timer_sec">00</span></span>
    </div>

    <form id="examForm" method="POST" action="result.php">
        <?php while($row = $result->fetch_assoc()){ ?>
            <div class="question">
                <p><strong>Q<?php echo $qno; ?>.</strong> <?php echo $row['question']; ?></p>
                <label><input type="radio" name="answer[<?php echo $row['id']; ?>]" value="<?php echo $row['option1']; ?>" required> <?php echo $row['option1']; ?></label>
                <label><input type="radio" name="answer[<?php echo $row['id']; ?>]" value="<?php echo $row['option2']; ?>"> <?php echo $row['option2']; ?></label>
                <label><input type="radio" name="answer[<?php echo $row['id']; ?>]" value="<?php echo $row['option3']; ?>"> <?php echo $row['option3']; ?></label>
                <label><input type="radio" name="answer[<?php echo $row['id']; ?>]" value="<?php echo $row['option4']; ?>"> <?php echo $row['option4']; ?></label>
            </div>
        <?php $qno++; } ?>
        <button type="submit" id="subBtn">Finish Exam</button>
    </form>
    
    
    <form id="examForm" method="POST" action="result.php">
    
    <input type="hidden" name="subject_id" value="<?php echo $_GET['subject_id']; ?>">
 
        
        </div>

<script>
// PHP se minutes ko seconds mein convert karna
let totalSeconds = <?php echo $t_limit * 60; ?>;

function startTimer() {
    let timerInterval = setInterval(function() {
        let minutes = Math.floor(totalSeconds / 60);
        let seconds = totalSeconds % 60;

        document.getElementById("timer_min").innerHTML = minutes < 10 ? "0" + minutes : minutes;
        document.getElementById("timer_sec").innerHTML = seconds < 10 ? "0" + seconds : seconds;

        if (totalSeconds <= 0) {
            clearInterval(timerInterval);
            alert("Time's up! Your exam is being submitted.");
            document.getElementById("examForm").submit();
        }
        totalSeconds--;
    }, 1000);
}
window.onload = startTimer;
</script>
</body>
</html>
