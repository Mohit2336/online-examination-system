<?php
session_start();
include("db.php");

$error = "";

if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$password'");

    if(mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);
        $_SESSION['user_name'] = $row['name'];
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid Email or Password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login | Online Exam</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }

        body {
            background: linear-gradient(135deg, #00d2ff 0%, #3a7bd5 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .login-card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .login-icon {
            font-size: 60px;
            color: #3a7bd5;
            margin-bottom: 10px;
        }

        .login-card h2 {
            color: #333;
            font-size: 26px;
            margin-bottom: 25px;
            font-weight: 600;
        }

        .input-group {
            position: relative;
            margin-bottom: 20px;
            text-align: left;
        }

        .input-group i {
            position: absolute;
            left: 15px;
            top: 18px;
            color: #3a7bd5;
        }

        .input-group input {
            width: 100%;
            padding: 15px 15px 15px 45px;
            border: 1px solid #ddd;
            border-radius: 10px;
            outline: none;
            font-size: 14px;
            transition: 0.3s;
        }

        .input-group input:focus {
            border-color: #3a7bd5;
            box-shadow: 0 0 10px rgba(58, 123, 213, 0.2);
        }

        .btn-login {
            width: 100%;
            padding: 15px;
            background: #3a7bd5;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 5px;
        }

        .btn-login:hover {
            background: #2d5fa3;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .error-msg {
            color: #e74c3c;
            background: #fdf2f2;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 13px;
            border: 1px solid #f9d6d6;
        }

        .register-link {
            display: block;
            margin-top: 25px;
            color: #777;
            text-decoration: none;
            font-size: 14px;
        }

        .register-link b { color: #3a7bd5; }
        .register-link:hover b { text-decoration: underline; }
    </style>
</head>
<body>

    <div class="login-card">
        <div class="login-icon">
            <i class="fas fa-user-circle"></i>
        </div>
        <h2>Student Login</h2>

        <?php if($error != "") { ?>
            <div class="error-msg">
                <i class="fas fa-exclamation-circle"></i> <?php echo $error; ?>
            </div>
        <?php } ?>

        <form method="POST">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Email Address" required>
            </div>

            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <button type="submit" name="login" class="btn-login">
                Login
            </button>
        </form>

        <a href="register.php" class="register-link">
            Don't have an account? <b>Create New</b>
        </a>
    </div>

</body>
</html>
