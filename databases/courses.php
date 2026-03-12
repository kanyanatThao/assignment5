<?php
function getCourses() {
    global $conn;
    $stmt = $conn->prepare("SELECT * from courses");
    $stmt->execute();
    return $stmt->get_result();
}

function addEnrollment($student_id,$course_id) {
    global $conn;
    
    $check_sql ="SELECT enrollment_id FROM enrollment WHERE student_id = ? AND course_id = ?";
    $check_stmt = $conn->prepare($check_sql);
    $check_stmt->bind_param("ii",$student_id,$course_id);
    $check_stmt->execute();
    $result = $check_stmt->get_result();

    if($result->num_rows>0){
        return false;
    }

    $sql = "INSERT INTO enrollment (student_id, course_id, enrollment_date) VALUES (?, ?, CURRENT_DATE)";
    $stmt = $conn->prepare($sql);
    $stmt ->bind_param("ii",$student_id,$course_id);
    return $stmt->execute();
}

