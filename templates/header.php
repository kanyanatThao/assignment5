<header>
    <title><?= $title; ?></title>
</header>
<nav>
    <span>ระบบจัดการรายวิชา</span>
    <a href="/">หน้าแรก</a>
    <?php if(!isset($_SESSION['student_id'])){?>
    <a href="/login">เข้าสู่ระบบ</a>
    <?php }else{ ?>
    <a href='/student_info'>ข้อมูลนักเรียน</a>
    <a href='/courses'>รายวิชา</a>
    <a href="/logout">ออกจากระบบ</a>
    <?php } ?>
</nav>