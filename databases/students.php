<?php
function getStudentByEmail($email)
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM students WHERE email = ?");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}
function getDataStudent($student_id){
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM students WHERE student_id = ?");
    $stmt->bind_param("i",$student_id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}
function getCoursesStd($student_id){
    global $conn;
    $sql = "SELECT c.course_code, c.course_name, c.instructor, e.enrollment_date, c.course_id 
            FROM enrollment e
            JOIN courses c ON e.course_id = c.course_id
            WHERE e.student_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i",$student_id);
    $stmt->execute();
    return $stmt->get_result();
}
function deleteEnrollment($student_id,$course_id){
    global $conn;
    $sql = "DELETE FROM enrollment WHERE student_id = ? AND course_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii",$student_id,$course_id);
    return $stmt->execute();

}