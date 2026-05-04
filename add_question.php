<?php
session_start();
include("../db.php");

// Admin security check
if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
    exit();
}

// Subjects fetch for dropdown
$subjects = mysqli_query($conn, "SELECT * FROM subjects");

$message = "";

if(isset($_POST['add'])){
    $sub_id = mysqli_real_escape_string($conn, $_POST['subject']);
    $question = mysqli_real_escape_string($conn, $_POST['question']);
    $o1 = mysqli_real_escape_string($conn, $_POST['o1']);
    $o2 = mysqli_real_escape_string($conn, $_POST['o2']);
    $o3 = mysqli_real_escape_string($conn, $_POST['o3']);
    $o4 = mysqli_real_escape_string($conn, $_POST['o4']);
    $ans = mysqli_real_escape_string($conn, $_POST['answer']);

    $query = "INSERT INTO questions (subject_id, question, option1, option2, option3, option4, answer) 
              VALUES ('$sub_id', '$question', '$o1', '$o2', '$o3', '$o4', '$ans')";
    
    if(mysqli_query($conn, $query)){
        $message = "<div class='alert success'>Question added successfully!</div>";
    } else {
        $message = "<div class='alert error'>Error adding question.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Question | Admin Panel</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        body { background: #f0f2f5; padding: 40px 20px; }
        
        .container {
            max-width: 700px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .header { text-align: center; margin-bottom: 30px; }
        .header i { font-size: 40px; color: #28a745; }
        .header h2 { color: #333; margin-top: 10px; }

        .form-group { margin-bottom: 20px; }
        label { display: block; font-weight: 600; margin-bottom: 8px; color: #555; }
        
        input, select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
            transition: 0.3s;
        }

        input:focus, select:focus, textarea:focus { border-color: #28a745; box-shadow: 0 0 5px rgba(40, 167, 69, 0.2); }
        
        .grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }

        .btn-submit {
            width: 100%;
            padding: 15px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 10px;
            transition: 0.3s;
        }

        .btn-submit:hover { background: #218838; transform: translateY(-2px); }

        .alert { padding: 12px; border-radius: 8px; margin-bottom: 20px; text-align: center; }
        .success { background: #d4edda; color: #155724; }
        .error { background: #f8d7da; color: #721c24; }

        .back-link { display: block; text-align: center; margin-top: 20px; text-decoration: none; color: #666; font-size: 14px; }
        .back-link:hover { color: #28a745; }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <i class="fas fa-plus-circle"></i>
        <h2>Add New Question</h2>
    </div>

    <?php echo $message; ?>

    <form method="POST">
        <div class="form-group">
            <label>Select Subject</label>
            <select name="subject" required>
                <option value="">-- Choose Subject --</option>
                <?php while($row = mysqli_fetch_assoc($subjects)){ ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['subject_name']; ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label>Question Text</label>
            <textarea name="question" rows="3" placeholder="Enter the question here..." required></textarea>
        </div>

        <div class="grid">
            <div class="form-group">
                <label>Option 1</label>
                <input type="text" name="o1" placeholder="Choice A" required>
            </div>
            <div class="form-group">
                <label>Option 2</label>
                <input type="text" name="o2" placeholder="Choice B" required>
            </div>
            <div class="form-group">
                <label>Option 3</label>
                <input type="text" name="o3" placeholder="Choice C" required>
            </div>
            <div class="form-group">
                <label>Option 4</label>
                <input type="text" name="o4" placeholder="Choice D" required>
            </div>
        </div>

        <div class="form-group">
            <label>Correct Answer</label>
            <input type="text" name="answer" placeholder="Enter the exact correct option text" required style="border-left: 5px solid #28a745;">
        </div>

        <button type="submit" name="add" class="btn-submit">
            <i class="fas fa-save"></i> Save Question
        </button>
    </form>

    <a href="admin_dashboard.php" class="back-link">
        <i class="fas fa-arrow-left"></i> Back to Admin Dashboard
    </a>
</div>

</body>
</html>
