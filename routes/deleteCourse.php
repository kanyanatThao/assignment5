<?php
$student_id = $_SESSION['student_id'];
$course_id = $_GET['course_id'] ?? null;

deleteEnrollment($student_id,$course_id);
header('Location: /student_info');
exit;
