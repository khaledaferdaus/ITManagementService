<?php
include 'template/header.php'; 

$emp_id = "";

if (isset($_GET['emp_id'])) {
   echo $emp_id = $_GET['emp_id'];
}
    
$delete_emp_sql = "DELETE FROM employee WHERE id='$emp_id'";;
$delete_emp_sql_reqult = $conn->query($delete_emp_sql);

if ($delete_emp_sql_reqult == TRUE) {
    echo "<script>alert('Employee Record Deleted Successfully !'); window.location.href='view_employee.php';</script>";
} else {
    echo "<script>alert('Sorry! Could Not Delete Employee Record !'); window.location.href='view_employee.php';</script>";
}
