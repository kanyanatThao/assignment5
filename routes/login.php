<?php
$data = ["title" => "เข้าสู่ระบบ"];
global $conn;

if (isset($_SESSION['student_id'])) {
    header("Location: /");
    exit;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = getStudentByEmail($email);

    if($user){
        if(password_verify($password,$user['password'])){
            $_SESSION['student_id'] = $user['student_id'];
            header("Location: /");
            exit;
        } else{
            $data["error"] = "รหัสผ่านไม่ถูกต้อง";
        }
    } else{
        $data["error"] = "ตรวจไม่อีเมลนี้ในระบบ";
    }
}
renderView('login', $data);