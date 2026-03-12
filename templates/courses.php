<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-yellow-100 min-h-screen flex flex-col">

<?php include 'header.php' ?>

<main class="flex-grow max-w-5xl mx-auto p-6">

    <div class="bg-yellow-50 shadow-xl rounded-2xl p-6 border border-yellow-200">

        <h2 class="text-2xl font-bold text-yellow-800 mb-4">
            รายวิชาที่เปิดให้ลงทะเบียน
        </h2>

        <div class="overflow-x-auto">

            <table class="w-full border-collapse">

                <thead>
                    <tr class="bg-yellow-200 text-yellow-900">
                        <th class="px-4 py-2 text-left">รหัสวิชา</th>
                        <th class="px-4 py-2 text-left">ชื่อวิชา</th>
                        <th class="px-4 py-2 text-left">อาจารย์ผู้สอน</th>
                        <th class="px-4 py-2 text-center">ลงทะเบียน</th>
                    </tr>
                </thead>

                <tbody>

                <?php foreach($courses as $course){?>

                    <tr class="border-b hover:bg-yellow-100 transition">

                        <td class="px-4 py-2">
                            <?= $course['course_code'] ?>
                        </td>

                        <td class="px-4 py-2">
                            <?= $course['course_name'] ?>
                        </td>

                        <td class="px-4 py-2">
                            <?= $course['instructor'] ?>
                        </td>

                        <td class="px-4 py-2 text-center">

                            <a 
                                href="/addCourses?course_id=<?= $course['course_id'] ?>"
                                onclick="return confirm('คุณต้องการเพิ่มรายวิชา <?= $course['course_name'] ?> ใช่ไหม')"
                                class="bg-yellow-300 text-yellow-900 px-3 py-1 rounded-lg hover:bg-yellow-400 transition text-sm font-medium"
                            >
                                ลงทะเบียน
                            </a>

                        </td>

                    </tr>

                <?php } ?>

                </tbody>

            </table>

        </div>

    </div>

</main>
<?php include 'footer.php' ?>
</body>
</html>