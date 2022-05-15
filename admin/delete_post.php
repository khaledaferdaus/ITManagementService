<?php
include 'template/header.php'; 

$job_post_id = "";

if (isset($_GET['id'])) {
    $job_post_id = $_GET['id'];
}

$view_job_posts_sql_result = $conn->query("SELECT * FROM job_post WHERE id='$job_post_id'")->fetch_assoc();

$delete_job_post_sql = "DELETE FROM job_post WHERE id='$job_post_id'";;
$delete_job_post_sql_reqult = $conn->query($delete_job_post_sql);

if ($delete_job_post_sql_reqult == TRUE) {
    echo "<script>alert('Job Post Record Deleted Successfully !'); window.location.href='view_post.php';</script>";
} else {
    echo "<script>alert('Sorry! Could Not Delete Job Post Record !'); window.location.href='view_post.php';</script>";
}
