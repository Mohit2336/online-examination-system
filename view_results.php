<?php
session_start();
include("../db.php");

// Admin security check
if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
    exit();
}

// Fetching all results with subject names
$query = "SELECT r.*, s.subject_name 
          FROM exam_results r 
          LEFT JOIN subjects s ON r.subject_id = s.id 
          ORDER BY r.exam_date DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Results | Admin Panel</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        
        body {
            background: #f4f7f6;
            padding: 40px 20px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #eee;
            padding-bottom: 15px;
        }

        .header h2 { color: #333; display: flex; align-items: center; gap: 10px; }
        .header h2 i { color: #f39c12; }

        .back-btn {
            text-decoration: none;
            background: #333;
            color: white;
            padding: 8px 15px;
            border-radius: 5px;
            font-size: 14px;
            transition: 0.3s;
        }

        .back-btn:hover { background: #555; }

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th {
            background: #f8f9fa;
            color: #555;
            text-align: left;
            padding: 15px;
            border-bottom: 2px solid #dee2e6;
            font-weight: 600;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid #eee;
            color: #444;
            font-size: 14px;
        }

        tr:hover { background: #fcfcfc; }

        .badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .badge-score { background: #e3f2fd; color: #1976d2; }
        .badge-date { color: #888; font-style: italic; }

        /* Responsive Table */
        @media (max-width: 768px) {
            .container { padding: 15px; }
            table { display: block; overflow-x: auto; }
            .header h2 { font-size: 18px; }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h2><i class="fas fa-trophy"></i> Student Results</h2>
        <a href="admin_dashboard.php" class="back-btn"><i class="fas fa-arrow-left"></i> Dashboard</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>Student Name</th>
                <th>Subject</th>
                <th>Score</th>
                <th>Percentage</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) { 
            ?>
            <tr>
                <td><strong><i class="fas fa-user-circle"></i> <?php echo htmlspecialchars($row['user_name']); ?></strong></td>
                <td><?php echo htmlspecialchars($row['subject_name'] ? $row['subject_name'] : 'Unknown'); ?></td>
                <td><span class="badge badge-score"><?php echo $row['score']; ?> / <?php echo $row['total_questions']; ?></span></td>
                <td><strong><?php echo round($row['percentage'], 2); ?>%</strong></td>
                <td class="badge-date"><?php echo date('d M Y, h:i A', strtotime($row['exam_date'])); ?></td>
            </tr>
            <?php 
                } 
            } else {
                echo "<tr><td colspan='5' style='text-align:center;'>No results found yet.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
