<?php
$student_id = $_SESSION['student_id'];

$course_id = $_GET['course_id'] ?? null;
addEnrollment($student_id,$course_id);
header('Location: /courses');
exit;