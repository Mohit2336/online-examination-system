<?php
session_start();
include "db.php";

if(isset($_POST['answer'])){
    $user_answers = $_POST['answer'];
    $score = 0;
    $total = count($user_answers);
    
    $subject_id = $_POST['subject_id'];

    foreach($user_answers as $q_id => $user_opt){
        $q_id = (int)$q_id;
        $res = mysqli_query($conn, "SELECT answer FROM questions WHERE id = $q_id");
        $row = mysqli_fetch_assoc($res);
        
        if($row['answer'] === $user_opt){
            $score++;
        }
    }
    
    // Percentage calculation
    $perc = ($score / $total) * 100;
    // Ye code result.php mein calculation ke baad daalein
$u_name = $_SESSION['user_name'];
$perc = ($score / $total) * 100;

// Database mein result save karne ki query
$save_query = "INSERT INTO exam_results (user_name, subject_id, total_questions, score, percentage) 
               VALUES ('$u_name', '$subject_id', '$total', '$score', '$perc')";
mysqli_query($conn, $save_query);

?>
    <div style="text-align:center; font-family:Arial; margin-top:100px;">
        <h2>Exam Result</h2>
        <h1 style="font-size: 50px; color: #007bff;"><?php echo $score; ?> / <?php echo $total; ?></h1>
        <p>Percentage: <strong><?php echo round($perc, 2); ?>%</strong></p>
        <a href="index.php" style="text-decoration:none; color:white; background:black; padding:10px 20px; border-radius:5px;">Home Par Jayein</a>
    </div>
<?php
} else {
    echo "Aapne koi jawab nahi diya!";
}
?>
