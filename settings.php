<?php
session_start();
// Agar direct koi settings page kholne ki koshish kare bina subject ke
if(!isset($_GET['subject_id'])){
    header("Location: subjects.php");
    exit();
}
$sub_id = $_GET['subject_id'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Exam Settings</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f0f2f5; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); width: 100%; max-width: 380px; text-align: center; }
        h2 { color: #333; margin-bottom: 20px; }
        .input-group { text-align: left; margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; color: #555; }
        input { width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; box-sizing: border-box; font-size: 16px; }
        button { width: 100%; padding: 14px; background: #28a745; color: white; border: none; border-radius: 8px; cursor: pointer; font-size: 16px; font-weight: bold; transition: 0.3s; }
        button:hover { background: #218838; }
    </style>
</head>
<body>

<div class="card">
    <h2>Exam Setup</h2>
    <p style="color: #666; font-size: 14px;">Apne exam ke liye questions aur time set karein.</p>
    
    <form action="exam.php" method="GET">
        <input type="hidden" name="subject_id" value="<?php echo $sub_id; ?>">
        
        <div class="input-group">
            <label>Questions ki ginti:</label>
            <input type="number" name="q_limit" min="1" max="50" placeholder="E.g. 20" required>
        </div>

        <div class="input-group">
            <label>Time (Minutes mein):</label>
            <input type="number" name="t_limit" min="1" max="180" placeholder="E.g. 30" required>
        </div>

        <button type="submit">Start Exam Now</button>
    </form>
</div>

</body>
</html>
