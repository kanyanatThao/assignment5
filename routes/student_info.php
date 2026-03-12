<?php
$data = ['title'=>"ข้อมูลนักเรียน"];
$student_id = $_SESSION['student_id'];

$student_info = getDataStudent($student_id);
$data['student_info'] = $student_info;

$studentCourses = getCoursesStd($student_id);
$data['studentCourses'] = $studentCourses;
renderView('student_info',$data);