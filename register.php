<?php
include("db.php");

$message = "";

if(isset($_POST['register'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Check if email already exists
    $check_email = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    if(mysqli_num_rows($check_email) > 0){
        $message = "<div class='alert error'>Email already registered!</div>";
    } else {
        $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
        if(mysqli_query($conn, $query)){
            $message = "<div class='alert success'>Account created! <a href='login.php'>Login here</a></div>";
        } else {
            $message = "<div class='alert error'>Registration failed. Try again.</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account | Online Exam</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }

        body {
            background: linear-gradient(135deg, #3a7bd5 0%, #00d2ff 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .register-card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 450px;
            text-align: center;
        }

        .register-card h2 {
            color: #333;
            font-size: 28px;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .register-card p {
            color: #777;
            margin-bottom: 25px;
            font-size: 14px;
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

        .btn-register {
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
            margin-top: 10px;
        }

        .btn-register:hover {
            background: #2d5fa3;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .alert {
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .error { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }

        .login-link {
            display: block;
            margin-top: 25px;
            color: #333;
            text-decoration: none;
            font-size: 14px;
        }

        .login-link b { color: #3a7bd5; }
        .login-link:hover b { text-decoration: underline; }
    </style>
</head>
<body>

    <div class="register-card">
        <h2>Create Account</h2>
        <p>Join us and start your journey today!</p>

        <?php echo $message; ?>

        <form method="POST">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="name" placeholder="Full Name" required>
            </div>

            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Email Address" required>
            </div>

            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Create Password" required>
            </div>

            <button type="submit" name="register" class="btn-register">
                Sign Up
            </button>
        </form>

        <a href="login.php" class="login-link">
            Already have an account? <b>Login Here</b>
        </a>
    </div>

</body>
</html>
