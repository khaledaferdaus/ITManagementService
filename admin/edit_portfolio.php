<?php
include 'template/header.php';

$portfolio_id = "";
$title = "";
$detail = "";
$client_name = "";
$project_start = "";
$project_end = "";
$technology_used = "";
$category = "";
$status = "";

if (isset($_GET['id'])) {
    $portfolio_id = $_GET['id'];
}

$view_portfolio_sql = "SELECT * FROM portfolio WHERE id='$portfolio_id'";
$view_portfolio_sql_result = $conn->query($view_portfolio_sql)->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $detail	 = $_POST["detail"];
    $client_name = $_POST["client_name"];
    $project_start = $_POST["project_start"];
    $project_end = $_POST["project_end"];
    $technology_used = $_POST["technology_used"];
    $category = $_POST["category"];
    $status = $_POST["status"];
    
    $portfolio_prev_image = $view_portfolio_sql_result['image'];

    $image = $_FILES['image']['name'];
    $target_dir = "uploads/portfolio/";
    $target_file = $target_dir . basename($_FILES['image']['name']);

    // Select File Type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Allowed File Extensions
    $extension_arr = array('jpg', 'jpeg', 'png', 'gif');
    
    if($image == "") {
        $update_portfolio_sql = "UPDATE portfolio SET title='$title', detail='$detail', client_name='$client_name', project_start='$project_start', project_end='$project_end', technology_used='$technology_used', category='$category', status='$status' WHERE id='$portfolio_id'";
        $update_portfolio_sql_result = $conn->query($update_portfolio_sql);

        if ($update_portfolio_sql_result == TRUE) {
            echo "<script>alert('New Portfolio Record Updated Successfully !'); window.location.href='view_portfolio.php';</script>";
        } else {
            echo "<script>alert('Sorry! Could Not Update New Portfolio Record !'); window.location.href='view_portfolio.php';</script>";
        }
    } else {
        if (in_array($imageFileType, $extension_arr)) {
        
            unlink('uploads/portfolio/' . $portfolio_prev_image);

            $is_uploaded = move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $image);

            if ($is_uploaded) {
                $update_portfolio_sql = "UPDATE portfolio SET title='$title', detail='$detail', client_name='$client_name', project_start='$project_start', project_end='$project_end', technology_used='$technology_used', category='$category', status='$status' WHERE id='$portfolio_id'";
                $update_portfolio_sql_result = $conn->query($update_portfolio_sql);

                if ($update_portfolio_sql_result == TRUE) {
                    echo "<script>alert('New Portfolio Record Updated Successfully !'); window.location.href='view_portfolio.php';</script>";
                } else {
                    echo "<script>alert('Sorry! Could Not Update New Portfolio Record !'); window.location.href='view_portfolio.php';</script>";
                }
            } else {
                echo "<script>alert('Sorry! Portfolio Photo Could Not be Uploaded !');</script>";
            }
        } else {
            echo "<script>alert('Sorry! Invalid extention Detected !');</script>";
        }
    }
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Portfolio</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Portfolio</a></li>
                        <li class="breadcrumb-item active">Edit Portfolio</li>                      
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Content Row -->
            <div class="row">
                <div class="col-md-9">
                    <!-- general form elements -->
                    <div class="card card-dark">

                        <div class="card-header" style="background-color:gray">
                            <h3 style="color: #fff;" class="card-title">Edit Portfolio</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group" style="color:grey">
                                    <label>Portfolio Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter portfolio Name" value="<?php echo $view_portfolio_sql_result['title'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Portfolio Details</label>
                                    <textarea class="form-control" rows="3" name="detail" placeholder="Enter portfolio Details"><?php echo $view_portfolio_sql_result['detail'] ?></textarea>
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Image</label><br/>
                                    <img style="width: 150px; height: auto; margin: 10px;" src="uploads/portfolio/<?php echo $view_portfolio_sql_result['image']; ?>" alt="No Image Preview" />
                                    <input type="file" class="form-control-file border" name="image">
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Client Name</label>
                                    <input type="text" class="form-control" name="client_name" placeholder="Enter Client Name" value="<?php echo $view_portfolio_sql_result['client_name'] ?>">
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Project Start Date</label>
                                    <input type="date" class="form-control" name="project_start" placeholder="Enter Project Start Date" value="<?php echo $view_portfolio_sql_result['project_start'] ?>">
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Project End Date</label>
                                    <input type="date" class="form-control" name="project_end" placeholder="Enter Project End Date" value="<?php echo $view_portfolio_sql_result['project_end'] ?>">
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Technology Used</label>
                                    <input type="text" class="form-control" name="technology_used" placeholder="Enter Technology" value="<?php echo $view_portfolio_sql_result['technology_used'] ?>">
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Category</label>
                                    <input type="text" class="form-control" name="category" placeholder="Enter Category" value="<?php echo $view_portfolio_sql_result['category'] ?>">
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Employee Status</label>
                                    <select class="form-control" name="status" required>
                                        <option value="0" <?php if($view_portfolio_sql_result['status'] == '0') { echo 'selected'; } ?>>Inactive</option>
                                        <option value="1" <?php if($view_portfolio_sql_result['status'] == '1') { echo 'selected'; } ?>>Active</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" name="submit" class="btn btn-secondary">Update</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
</div>
<?php
include 'template/footer.php';
?>
