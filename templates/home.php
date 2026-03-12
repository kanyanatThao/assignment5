<?php 
if(session_status() === PHP_SESSION_NONE){
    session_start();
} 
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Home</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-yellow-100 min-h-screen flex flex-col">

    <?php include 'header.php' ?>

    <main class="flex-grow flex items-center justify-center">
        
        <div class="bg-yellow-50 shadow-xl rounded-2xl p-10 text-center border border-yellow-200">
            
            <?php if(isset($_SESSION['student_id'])){ ?>
                <h2 class="text-3xl font-bold text-yellow-700">
                    สวัสดีคุณ
                </h2>

                <p class="mt-3 text-2xl text-yellow-900 font-semibold">
                    <?= $student['first_name'] ." ". $student['last_name']?>
                </p>

                <div class="mt-6">
                    <span class="bg-yellow-200 text-yellow-800 px-4 py-2 rounded-full text-sm">
                        ยินดีต้อนรับเข้าสู่ระบบ
                    </span>
                </div>

            <?php } else { ?>

                <h2 class="text-2xl font-semibold text-yellow-700">
                    กรุณาเข้าสู่ระบบ
                </h2>

            <?php } ?>

        </div>

    </main>

    <?php include 'footer.php' ?>

</body>
</html>