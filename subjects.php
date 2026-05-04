<?php
session_start();
include("db.php");

if(!isset($_SESSION['user_name'])){
    header("Location: login.php");
}

$result = mysqli_query($conn, "SELECT * FROM subjects");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Subjects</title>

    <!-- CSS YAHAN ADD -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<h2>Select Subject</h2>

<div style="text-align:center;">
<?php
while($row = mysqli_fetch_assoc($result)){
?>
    <div class="subject-box">
        <h3><?php echo $row['subject_name']; ?></h3>

        <a href="settings.php?subject_id=<?php echo $row['id']; ?>" style="padding:10px; background:blue; color:white; text-decoration:none; border-radius:5px;">Select Exam Settings</a>
        
            <button>Start Exam</button>
        </a>
    </div>
<?php
}
?>
</div>

</body>
</html>