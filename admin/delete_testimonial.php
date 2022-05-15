<?php
include 'template/header.php'; 

$testimonial_id = "";

if (isset($_GET['id'])) {
    $testimonial_id = $_GET['id'];
}

$view_testimonial_sql_result = $conn->query("SELECT * FROM testimonial WHERE id='$testimonial_id'")->fetch_assoc();

$testimonial_prev_image = $view_testimonial_sql_result['image'];

unlink('uploads/testimonial/' . $testimonial_prev_image);

$delete_testimonial_sql = "DELETE FROM testimonial WHERE id='$testimonial_id'";
$delete_testimonial_sql_reqult = $conn->query($delete_testimonial_sql);

if ($delete_testimonial_sql_reqult == TRUE) {
    echo "<script>alert('Testimonial Record Deleted Successfully !'); window.location.href='view_testimonial.php';</script>";
} else {
    echo "<script>alert('Sorry! Could Not Delete Testimonial Record !'); window.location.href='view_testimonial.php';</script>";
}
