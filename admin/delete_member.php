<?php
include 'template/header.php'; 

$member_id = "";

if (isset($_GET['id'])) {
    $member_id = $_GET['id'];
}

$view_members_sql_result = $conn->query("SELECT * FROM team WHERE id='$member_id'")->fetch_assoc();

$member_prev_image = $view_members_sql_result['image'];

unlink('uploads/team/' . $member_prev_image);

$delete_member_sql = "DELETE FROM team WHERE id='$member_id'";;
$delete_member_sql_reqult = $conn->query($delete_member_sql);

if ($delete_member_sql_reqult == TRUE) {
    echo "<script>alert('Member Record Deleted Successfully !'); window.location.href='view_members.php';</script>";
} else {
    echo "<script>alert('Sorry! Could Not Delete Member Record !'); window.location.href='view_members.php';</script>";
}
