<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Examination System | Welcome</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #00d2ff 0%, #3a7bd5 100%);
            height: 100vh;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        /* Navigation Bar */
        nav {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .logo {
            color: white;
            font-size: 24px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        /* Hero Section */
        .hero {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            padding: 20px;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 15px;
            text-shadow: 2px 4px 10px rgba(0, 0, 0, 0.2);
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 40px;
            opacity: 0.9;
            max-width: 600px;
        }

        /* Button Container */
        .btn-container {
            display: flex;
            gap: 20px;
        }

        .btn {
            text-decoration: none;
            padding: 15px 40px;
            font-size: 18px;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .btn-login {
            background: white;
            color: #3a7bd5;
        }

        .btn-login:hover {
            background: #f0f0f0;
            transform: translateY(-3px);
        }

        .btn-register {
            background: transparent;
            color: white;
            border: 2px solid white;
        }

        .btn-register:hover {
            background: white;
            color: #3a7bd5;
            transform: translateY(-3px);
        }

        /* Footer */
        footer {
            padding: 20px;
            text-align: center;
            color: white;
            font-size: 14px;
            background: rgba(0, 0, 0, 0.1);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero h1 { font-size: 2.5rem; }
            .btn-container { flex-direction: column; }
            nav { padding: 20px; }
        }
    </style>
</head>
<body>

    <nav>
        <div class="logo">ExamPortal</div>
    </nav>

    <div class="hero">
        <h1>Welcome to Online Examination System</h1>
        <p>A smart, reliable, and secure platform to evaluate your skills and knowledge from anywhere in the world.</p>
        
        <div class="btn-container">
            <a href="login.php" class="btn btn-login">
                <i class="fas fa-sign-in-alt"></i> Login
            </a>
            <a href="register.php" class="btn btn-register">
                <i class="fas fa-user-plus"></i> Register
            </a>
        </div>
    </div>

    <footer>
        &copy; 2026 Online Examination System. All Rights Reserved.
    </footer>

</body>
</html>
                                        