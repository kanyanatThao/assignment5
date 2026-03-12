<?php
$data = ['title' => "วิชาที่เปิดลงทะเบียนเรียน"];

$courses = getCourses();
$data['courses'] = $courses;
renderView('courses',$data);