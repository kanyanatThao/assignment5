
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<body>
    
    <?php include 'header.php' ?>
    <?php if(isset($error)) : ?>
        <?php echo $error; ?>
    <?php endif ; ?>
    <form action="" method="POST">

        <div>
            <span>email *</span>
            <input type="email" name="email" placeholder="example@mail.com" required>
        </div>
        <div>
            <span>password *</span>
            <input type="password" name="password" placeholder="••••••••" required>
        </div>
        <button type="submit">เข้าสู่ระบบ</button>
    </form>
</body>
</html>