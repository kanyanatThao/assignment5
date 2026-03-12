<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-yellow-100 min-h-screen flex flex-col">

<?php include 'header.php' ?>

<main class="max-w-5xl mx-auto p-6 space-y-6">

    <!-- ข้อมูลนักเรียน -->
    <div class="bg-yellow-50 shadow-xl rounded-2xl p-6 border border-yellow-200">

        <h2 class="text-2xl font-bold text-yellow-800 mb-4">
            <?= $title ?>
        </h2>

        <table class="w-full">

            <tr class="border-b">
                <td class="py-2 font-semibold text-yellow-900">ชื่อ</td>
                <td><?= $student_info['first_name'] ?></td>
            </tr>

            <tr class="border-b">
                <td class="py-2 font-semibold text-yellow-900">นามสกุล</td>
                <td><?= $student_info['last_name'] ?></td>
            </tr>

            <tr class="border-b">
                <td class="py-2 font-semibold text-yellow-900">วันเกิด</td>
                <td><?= $student_info['date_of_birth'] ?></td>
            </tr>

            <tr>
                <td class="py-2 font-semibold text-yellow-900">โทรศัพท์</td>
                <td><?= $student_info['phone_number'] ?></td>
            </tr>

        </table>

    </div>


    <!-- วิชาที่ลงทะเบียน -->
    <div class="bg-yellow-50 shadow-xl rounded-2xl p-6 border border-yellow-200">

        <h2 class="text-xl font-bold text-yellow-800 mb-4">
            วิชาที่ลงทะเบียนเรียน
        </h2>

        <div class="overflow-x-auto">

            <table class="w-full border-collapse">

                <thead>
                    <tr class="bg-yellow-200 text-yellow-900">
                        <th class="px-4 py-2 text-left">รหัสวิชา</th>
                        <th class="px-4 py-2 text-left">ชื่อวิชา</th>
                        <th class="px-4 py-2 text-left">อาจารย์ผู้สอน</th>
                        <th class="px-4 py-2 text-left">วันที่ลงทะเบียน</th>
                        <th class="px-4 py-2 text-center">จัดการ</th>
                    </tr>
                </thead>

                <tbody>

                <?php foreach ($studentCourses as $course_std) { ?>

                    <tr class="border-b hover:bg-yellow-100 transition">

                        <td class="px-4 py-2">
                            <?= $course_std['course_code'] ?>
                        </td>

                        <td class="px-4 py-2">
                            <?= $course_std['course_name'] ?>
                        </td>

                        <td class="px-4 py-2">
                            <?= $course_std['instructor'] ?>
                        </td>

                        <td class="px-4 py-2">
                            <?= $course_std['enrollment_date'] ?>
                        </td>

                        <td class="px-4 py-2 text-center">

                            <a 
                                href="/deleteCourse?course_id=<?= $course_std['course_id'] ?>"
                                onclick="return confirm('คุณต้องการถอนรายวิชา <?= $course_std['course_name'] ?> ใช่ไหม')"
                                class="bg-red-200 text-red-800 px-3 py-1 rounded-lg hover:bg-red-300 transition text-sm font-medium"
                            >
                                ถอนรายวิชา
                            </a>

                        </td>

                    </tr>

                <?php } ?>

                </tbody>

            </table>

        </div>

    </div>

</main>

</body>
</html>