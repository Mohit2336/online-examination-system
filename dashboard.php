<?php
session_start();
if(!isset($_SESSION['user_name'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard | Online Exam</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        
        body {
            background: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .dashboard-card {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }

        .user-icon {
            font-size: 50px;
            color: #3a7bd5;
            margin-bottom: 10px;
        }

        h2 { color: #333; margin-bottom: 5px; }
        p { color: #777; margin-bottom: 30px; font-size: 14px; }

        .btn-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .btn {
            text-decoration: none;
            padding: 12px;
            border-radius: 8px;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: 0.3s;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .btn-start { background: #28a745; color: white; }
        .btn-start:hover { background: #218838; transform: translateY(-2px); }

        .btn-results { background: #3a7bd5; color: white; }
        .btn-results:hover { background: #2d5fa3; transform: translateY(-2px); }
        
        .btn-admin { 
    background: #6f42c1; color: white !important; 
}

.btn-admin:hover { 
    background: #593196; 
    transform: translateY(-2px); 
        }

        .btn-logout { background: #e74c3c; color: white; }
        .btn-logout:hover { background: #c0392b; transform: translateY(-2px); }
    </style>
</head>
<body>

    <div class="dashboard-card">
        <div class="user-icon">
            <i class="fas fa-user-circle"></i>
        </div>
        <h2>Welcome Back!</h2>
        <p><?php echo htmlspecialchars($_SESSION['user_name']); ?></p>

        <div class="btn-container">
            <a href="subjects.php" class="btn btn-start">
                <i class="fas fa-edit"></i> Start Exam
            </a>

            <a href="my_results.php" class="btn btn-results">
                <i class="fas fa-file-invoice"></i> My Results
            </a>

            <a href="admin/admin_login.php" class="btn btn-admin">
    <i class="fas fa-user-shield"></i> Admin Login
            </a>
            
            <a href="logout.php" class="btn btn-logout">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </div>

</body>
</html>
