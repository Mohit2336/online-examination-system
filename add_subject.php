<?php
session_start();
include("../db.php");

// Admin security check
if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
    exit();
}

$message = "";

if(isset($_POST['add'])){
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    
    if(!empty($subject)){
        $query = "INSERT INTO subjects (subject_name) VALUES ('$subject')";
        if(mysqli_query($conn, $query)){
            $message = "<div class='alert success'>Subject Added Successfully!</div>";
        } else {
            $message = "<div class='alert error'>Error: Could not add subject.</div>";
        }
    } else {
        $message = "<div class='alert error'>Please enter a subject name.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Subject | Admin</title>
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

        .form-card {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 450px;
            text-align: center;
        }

        .form-card i {
            font-size: 50px;
            color: #3a7bd5;
            margin-bottom: 15px;
        }

        h2 { color: #333; margin-bottom: 25px; }

        .input-group {
            text-align: left;
            margin-bottom: 20px;
        }

        label {
            font-weight: 600;
            color: #555;
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            outline: none;
            transition: 0.3s;
        }

        input[type="text"]:focus {
            border-color: #3a7bd5;
            box-shadow: 0 0 8px rgba(58, 123, 213, 0.2);
        }

        .btn-add {
            width: 100%;
            padding: 13px;
            background: #3a7bd5;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-add:hover { background: #2d5fa3; }

        .alert {
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .error { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }

        .back-link {
            display: block;
            margin-top: 25px;
            text-decoration: none;
            color: #777;
            font-size: 14px;
        }

        .back-link:hover { color: #3a7bd5; }
    </style>
</head>
<body>

    <div class="form-card">
        <i class="fas fa-book-medical"></i>
        <h2>Add New Subject</h2>

        <?php echo $message; ?>

        <form method="POST">
            <div class="input-group">
                <label>Subject Name</label>
                <input type="text" name="subject" placeholder="e.g. Mathematics" required>
            </div>

            <button type="submit" name="add" class="btn-add">
                <i class="fas fa-plus"></i> Add Subject
            </a>
        </form>

        <a href="admin_dashboard.php" class="back-link">
            <i class="fas fa-arrow-left"></i> Back to Dashboard
        </a>
    </div>

</body>
</html>
