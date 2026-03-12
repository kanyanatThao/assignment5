<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<body>
    <?php include 'header.php' ?>
    <table>
        <tr>
            <td>รหัสวิชา</td>
            <td>ชื่อวิชา</td>
            <td>อาจารย์ผู้สอน</td>
            <td></td>
        </tr>
        <?php foreach($courses as $course){?>
                <tr>
                    <td><?php echo $course['course_code'] ?></td>
                    <td><?php echo $course['course_name'] ?></td>
                    <td><?php echo $course['instructor'] ?></td>
                    <td><a href="/addCourses?course_id=<?= $course['course_id'] ?>"onclick="return confirm('คุณต้องการเพิ่มรายวิชา <?= $course['course_name'] ?> ใช่ไหม')">ลงทะเบียน</a></td>
                </tr>
        <?php } ?>
    </table>
</body>
</html>