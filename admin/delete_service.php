<?php
include 'template/header.php'; 

$service_id = "";

if (isset($_GET['service_id'])) {
    $service_id = $_GET['service_id'];
}

$view_service_sql_result = $conn->query("SELECT * FROM service WHERE id='$service_id'")->fetch_assoc();

$service_prev_image = $view_service_sql_result['image'];

unlink('uploads/service/' . $service_prev_image);

$delete_service_sql = "DELETE FROM service WHERE id='$service_id'";;
$delete_service_sql_reqult = $conn->query($delete_service_sql);

if ($delete_service_sql_reqult == TRUE) {
    echo "<script>alert('Service Record Deleted Successfully !'); window.location.href='view_services.php';</script>";
} else {
    echo "<script>alert('Sorry! Could Not Delete Service Record !'); window.location.href='view_services.php';</script>";
}