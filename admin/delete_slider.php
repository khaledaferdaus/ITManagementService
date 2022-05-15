<?php
include 'template/header.php'; 

$slider_id = "";

if (isset($_GET['id'])) {
    $slider_id = $_GET['id'];
}

$view_sliders_sql_result = $conn->query("SELECT * FROM slider WHERE id='$slider_id'")->fetch_assoc();

$slider_prev_image = $view_sliders_sql_result['image'];

unlink('uploads/slider/' . $slider_prev_image);

$delete_slider_sql = "DELETE FROM slider WHERE id='$slider_id'";;
$delete_slider_sql_reqult = $conn->query($delete_slider_sql);

if ($delete_slider_sql_reqult == TRUE) {
    echo "<script>alert('slider Record Deleted Successfully !'); window.location.href='view_slider.php';</script>";
} else {
    echo "<script>alert('Sorry! Could Not Delete slider Record !'); window.location.href='view_slider.php';</script>";
}
