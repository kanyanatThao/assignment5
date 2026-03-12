<header>
    <title><?= $title; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</header>

<nav class="bg-yellow-200 shadow-md">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        <!-- ชื่อระบบ -->
        <span class="text-xl font-bold text-yellow-900">
            ระบบจัดการรายวิชา
        </span>

        <!-- เมนู -->
        <div class="flex gap-6 text-yellow-900 font-medium">

            <a href="/" class="hover:text-yellow-600 transition">
                หน้าแรก
            </a>

            <?php if(!isset($_SESSION['student_id'])){ ?>

                <a href="/login" 
                   class="bg-yellow-300 px-4 py-1 rounded-lg hover:bg-yellow-400 transition">
                   เข้าสู่ระบบ
                </a>

            <?php }else{ ?>

                <a href="/student_info" class="hover:text-yellow-600 transition">
                    ข้อมูลนักเรียน
                </a>

                <a href="/courses" class="hover:text-yellow-600 transition">
                    รายวิชา
                </a>

                <a href="/logout" 
                   class="bg-yellow-300 px-4 py-1 rounded-lg hover:bg-yellow-400 transition">
                   ออกจากระบบ
                </a>

            <?php } ?>

        </div>

    </div>
</nav>