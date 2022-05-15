<?php
include 'template/header.php'; 

$news_id = "";

if (isset($_GET['id'])) {
    $news_id = $_GET['id'];
}

$view_news_sql_result = $conn->query("SELECT * FROM news WHERE id='$news_id'")->fetch_assoc();

$news_prev_image = $view_news_sql_result['image'];

unlink('uploads/news/' . $news_prev_image);

$delete_news_sql = "DELETE FROM news WHERE id='$news_id'";;
$delete_news_sql_reqult = $conn->query($delete_news_sql);

if ($delete_news_sql_reqult == TRUE) {
    echo "<script>alert('News Record Deleted Successfully !'); window.location.href='view_news.php';</script>";
} else {
    echo "<script>alert('Sorry! Could Not Delete News Record !'); window.location.href='view_news.php';</script>";
}
