<?php
session_start();

// Admin session check
if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Management</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }

        body {
            background: #f4f7f6;
            color: #333;
        }

        /* Top Header */
        .header {
            background: #333;
            color: white;
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }

        .header h1 { font-size: 20px; text-transform: uppercase; letter-spacing: 1px; }

        .container {
            max-width: 1100px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .welcome-text {
            margin-bottom: 30px;
            text-align: center;
        }

        /* Grid Layout for Cards */
        .admin-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }

        .card {
            background: white;
            padding: 40px 20px;
            border-radius: 15px;
            text-align: center;
            text-decoration: none;
            color: #333;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            border-bottom: 5px solid transparent;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        /* Card specific colors */
        .card-subjects { border-color: #3a7bd5; }
        .card-questions { border-color: #28a745; }
        .card-results { border-color: #f39c12; }
        .card-logout { border-color: #e74c3c; }

        .card i {
            font-size: 50px;
            margin-bottom: 20px;
        }

        .card-subjects i { color: #3a7bd5; }
        .card-questions i { color: #28a745; }
        .card-results i { color: #f39c12; }
        .card-logout i { color: #e74c3c; }

        .card h3 { font-size: 18px; margin-bottom: 10px; }
        .card p { font-size: 14px; color: #777; }

        /* Responsive */
        @media (max-width: 768px) {
            .header { padding: 20px; }
            .admin-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <header class="header">
        <h1><i class="fas fa-user-shield"></i> Admin Panel</h1>
        <div class="admin-info">
            Welcome, <strong>Admin</strong>
        </div>
    </header>

    <div class="container">
        <div class="welcome-text">
            <h2>System Management</h2>
            <p>Select an option below to manage your examination system.</p>
        </div>

        <div class="admin-grid">
            <a href="add_subject.php" class="card card-subjects">
                <i class="fas fa-book"></i>
                <h3>Add New Subject</h3>
                <p>Create categories for exams</p>
            </a>

            <a href="add_question.php" class="card card-questions">
                <i class="fas fa-plus-circle"></i>
                <h3>Manage Questions</h3>
                <p>Add or edit exam questions</p>
            </a>

            <a href="view_results.php" class="card card-results">
                <i class="fas fa-chart-line"></i>
                <h3>Exam Results</h3>
                <p>View student performances</p>
            </a>

            <a href="../logout.php" class="card card-logout">
                <i class="fas fa-power-off"></i>
                <h3>Log Out</h3>
                <p>Securely exit admin panel</p>
            </a>
        </div>
    </div>

</body>
</html>
