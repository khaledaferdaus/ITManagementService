<?php
include 'template/header.php'; 

$notice_id = "";

if (isset($_GET['id'])) {
    $notice_id = $_GET['id'];
}

$view_notice_sql_result = $conn->query("SELECT * FROM notice WHERE id='$notice_id'")->fetch_assoc();

$notice_prev_image = $view_notice_sql_result['image'];

unlink('uploads/notice/' . $notice_prev_image);

$delete_notice_sql = "DELETE FROM notice WHERE id='$notice_id'";;
$delete_notice_sql_reqult = $conn->query($delete_notice_sql);

if ($delete_notice_sql_reqult == TRUE) {
    echo "<script>alert('Notice Record Deleted Successfully !'); window.location.href='view_notice.php';</script>";
} else {
    echo "<script>alert('Sorry! Could Not Delete notice Record !'); window.location.href='view_notice.php';</script>";
}
