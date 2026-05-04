<?php
session_start();

if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Aapka existing logic
    if($user == "admin" && $pass == "1234"){
        $_SESSION['admin'] = true;
        header("Location: admin_dashboard.php");
        exit();
    } else {
        $error = "Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Online Exam</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-card {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .login-card i.main-icon {
            font-size: 50px;
            color: #764ba2;
            margin-bottom: 15px;
        }

        .login-card h2 {
            color: #333;
            margin-bottom: 25px;
            font-weight: 600;
        }

        .input-group {
            position: relative;
            margin-bottom: 20px;
        }

        .input-group i {
            position: absolute;
            left: 15px;
            top: 15px;
            color: #764ba2;
        }

        .input-group input {
            width: 100%;
            padding: 12px 12px 12px 45px;
            border: 1px solid #ddd;
            border-radius: 8px;
            outline: none;
            transition: 0.3s;
        }

        .input-group input:focus {
            border-color: #764ba2;
            box-shadow: 0 0 8px rgba(118, 75, 162, 0.2);
        }

        .btn-login {
            width: 100%;
            padding: 12px;
            background: #764ba2;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-login:hover {
            background: #593196;
            transform: translateY(-2px);
        }

        .error-msg {
            color: #e74c3c;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .back-link {
            display: block;
            margin-top: 20px;
            text-decoration: none;
            color: #777;
            font-size: 14px;
        }

        .back-link:hover { color: #764ba2; }
    </style>
</head>
<body>

    <div class="login-card">
        <i class="fas fa-user-shield main-icon"></i>
        <h2>Admin Access</h2>

        <?php if(isset($error)) { ?>
            <p class="error-msg"><?php echo $error; ?></p>
        <?php } ?>

        <form method="POST">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="Admin Username" required>
            </div>

            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <button type="submit" name="login" class="btn-login">Login to Panel</button>
        </form>

        <a href="../dashboard.php" class="back-link">
            <i class="fas fa-arrow-left"></i> Back to User Dashboard
        </a>
    </div>

</body>
</html>
