<?php
$data = ["title" => "หน้าแรก"];
if (isset($_SESSION['student_id'])) {
    $student_id = $_SESSION['student_id'];
    $data['student'] = getDataStudent($student_id);
}


renderView('home', $data);
