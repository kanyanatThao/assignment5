<?php if(session_status() === PHP_SESSION_NONE){
    session_start();
} ?>
<html>
    
<head>
    
</head>

<body>
    <?php include 'header.php' ?>
    <?php if(isset($_SESSION['student_id'])){?>
    <h2>สวัสดีคุณ <?= $student['first_name'] ." ". $student['last_name']?></h2>
    <?php }?>
    <?php include 'footer.php' ?>
    
</body>

</html>