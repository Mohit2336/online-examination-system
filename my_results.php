<?php
session_start();
include "db.php";
if(!isset($_SESSION['user_name'])){ header("Location: login.php"); exit(); }

$user = $_SESSION['user_name'];
// User ke saare results fetch karna
$query = "SELECT r.*, IFNULL(s.subject_name, 'Unknown') as subject_name 
          FROM exam_results r 
          LEFT JOIN subjects s ON r.subject_id = s.id 
          WHERE r.user_name = '$user' 
          ORDER BY r.exam_date DESC";
$result = $conn->query($query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Performance</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f7f6; padding: 20px; }
        .res-container { max-width: 900px; margin: auto; background: white; padding: 20px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 12px; border: 1px solid #ddd; text-align: center; }
        th { background: #3498db; color: white; }
        .btn-pdf { background: #e74c3c; color: white; padding: 6px 12px; text-decoration: none; border-radius: 4px; }
    </style>
</head>
<body>
    <div class="res-container">
        <h2>My Exam History</h2>
        <table>
            <tr>
                <th>Subject</th>
                <th>Score</th>
                <th>Percentage</th>
                <th>Date</th>
                <th>Download</th>
            </tr>
            <?php while($row = $result->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $row['subject_name']; ?></td>
                <td><?php echo $row['score'] . "/" . $row['total_questions']; ?></td>
                <td><?php echo round($row['percentage'], 2); ?>%</td>
                <td><?php echo date('d M Y', strtotime($row['exam_date'])); ?></td>
                <td><a href="generate_pdf.php?id=<?php echo $row['id']; ?>" class="btn-pdf">PDF</a></td>
            </tr>
            <?php } ?>
        </table>
        <br>
        <a href="dashboard.php">Back to Dashboard</a>
    </div>
</body>
</html>
