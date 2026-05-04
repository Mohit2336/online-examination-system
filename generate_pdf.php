<?php
session_start();
include "db.php";

$id = $_GET['id'];
$res = $conn->query("SELECT r.*, s.subject_name FROM exam_results r JOIN subjects s ON r.subject_id = s.id WHERE r.id = $id");
$data = $res->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Result_Report</title>
    <style>
        body { font-family: Arial; text-align: center; padding: 40px; }
        .report-card { border: 5px solid #333; padding: 40px; width: 500px; margin: auto; }
        h1 { color: #2c3e50; }
        .info { font-size: 20px; margin: 15px 0; }
    </style>
</head>
<body onload="window.print()"> <div class="report-card">
        <h1>Exam Result Report</h1>
        <hr>
        <div class="info">Student Name: <strong><?php echo $data['user_name']; ?></strong></div>
        <div class="info">Subject: <strong><?php echo $data['subject_name']; ?></strong></div>
        <div class="info">Obtained Score: <strong><?php echo $data['score']; ?> / <?php echo $data['total_questions']; ?></strong></div>
        <div class="info">Percentage: <strong><?php echo round($data['percentage'], 2); ?>%</strong></div>
        <div class="info">Date: <?php echo $data['exam_date']; ?></div>
        <br>
        <p><em>This is a computer-generated report.</em></p>
    </div>
</body>
</html>
