<?php
include 'template/header.php'; 

$portfolio_id = "";

if (isset($_GET['id'])) {
    $portfolio_id = $_GET['id'];
}

$view_portfolios_sql_result = $conn->query("SELECT * FROM portfolio WHERE id='$portfolio_id'")->fetch_assoc();

$portfolio_prev_image = $view_portfolios_sql_result['image'];

unlink('uploads/portfolio/' . $portfolio_prev_image);

$delete_portfolio_sql = "DELETE FROM portfolio WHERE id='$portfolio_id'";;
$delete_portfolio_sql_reqult = $conn->query($delete_portfolio_sql);

if ($delete_portfolio_sql_reqult == TRUE) {
    echo "<script>alert('Portfolio Record Deleted Successfully !'); window.location.href='view_portfolio.php';</script>";
} else {
    echo "<script>alert('Sorry! Could Not Delete Portfolio Record !'); window.location.href='view_portfolio.php';</script>";
}
