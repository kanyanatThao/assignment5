<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>
    <?php include 'header.php' ?>
    <div><?= $title ?></div>
    <table>
        <tr>
            <td>ชื่อ</td>
            <td><?php echo $student_info['first_name'] ?></td>
        </tr>
        <tr>
            <td>นามสกุล</td>
            <td><?php echo $student_info['last_name'] ?></td>
        </tr>
        <tr>
            <td>วันเกิด</td>
            <td><?php echo $student_info['date_of_birth'] ?></td>
        </tr>
        <tr>
            <td>โทรศัพท์</td>
            <td><?php echo $student_info['phone_number'] ?></td>
        </tr>
    </table>
    <div>วิชาที่ลงทะเบียนเรียน</div>
    <table>
        <tr>
            <td>รหัสวิชา</td>
            <td>ชื่อวิชา</td>
            <td>อาจารย์ผู้สอน</td>
            <td>วันที่ลงทะเบียน</td>
            <td></td>
        </tr>
        <?php foreach ($studentCourses as $course_std) { ?>
        

            <tr>
                <td><?php echo $course_std['course_code'] ?></td>
                <td><?php echo $course_std['course_name'] ?></td>
                <td><?php echo $course_std['instructor'] ?></td>
                <td><?php echo $course_std['enrollment_date'] ?></td>
                <td><a href="/deleteCourse?course_id=<?= $course_std['course_id'] ?>" onclick="return confirm('คุณต้องการถอนรายวิชา <?= $course_std['course_name'] ?> ใช่ไหม')">ถอนรายวิชา</a></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>