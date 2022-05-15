<?php
include 'template/header.php';

$title = "";
$detail = "";
$client_name = "";
$project_start = "";
$project_end = "";
$technology_used = "";
$category = "";
$status = "1";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $detail	 = $_POST["detail"];
    $client_name = $_POST["client_name"];
    $project_start = $_POST["project_start"];
    $project_end = $_POST["project_end"];
    $technology_used = $_POST["technology_used"];
    $category = $_POST["category"];

    $image = $_FILES['image']['name'];
    $target_dir = "uploads/portfolio/";
    $target_file = $target_dir . basename($_FILES['image']['name']);

    // Select File Type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Allowed File Extensions
    $extension_arr = array('jpg', 'jpeg', 'png', 'gif');
    $imageName = $image.rand();

    if (in_array($imageFileType, $extension_arr)) {

        $is_uploaded = move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $imageName);

        if ($is_uploaded) {
            $add_portfolio_sql = "INSERT INTO portfolio (title, detail, image, client_name, project_start, project_end, technology_used, category, status) VALUES ('$title', '$detail', '$imageName', '$client_name', '$project_start', '$project_end', '$technology_used', '$category', '$status')";
            $add_portfolio_sql_result = $conn->query($add_portfolio_sql);

            if ($add_portfolio_sql_result == TRUE) {
                echo "<script>alert('New Portfolio Record Added Successfully !');</script>";
            } else {
                echo "<script>alert('Sorry! Could Not Add New Portfolio Record !');</script>";
            }
        } else {
            echo "<script>alert('Sorry! Portfolio Photo Could Not be Uploaded !');</script>";
        }
    } else {
        echo "<script>alert('Sorry! Invalid extention Detected !');</script>";
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
                        <li class="breadcrumb-item"><a href="#">Portfolio </a></li>
                        <li class="breadcrumb-item active">Add Portfolio</li>                      
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
                            <h3 style="color: #fff;" class="card-title">Add Portfolio</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group" style="color:grey">
                                    <label>Portfolio Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter Portfolio Title" required>
                                </div>
                                <div class="form-group">
                                    <label>Portfolio Details</label>
                                    <textarea class="form-control" rows="3" name="detail" placeholder="Enter portfolio Detail"></textarea>
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Image</label>
                                    <input type="file" class="form-control-file border" name="image" required>
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Client Name</label>
                                    <input type="text" class="form-control" name="client_name" placeholder="Enter Client Name" required>
                                </div>
                                 <div class="form-group" style="color:grey">
                                    <label>Project Start Date</label>
                                    <input type="date" class="form-control" name="project_start" placeholder="Enter Project Start" required>
                                </div>
                                 <div class="form-group" style="color:grey">
                                    <label>Project End Date</label>
                                    <input type="date" class="form-control" name="project_end" placeholder="Enter Project End" required>
                                </div>
                                 <div class="form-group" style="color:grey">
                                    <label>Technology Used</label>
                                    <input type="text" class="form-control" name="technology_used" placeholder="Enter Technology Used" required>
                                </div>
                                 <div class="form-group" style="color:grey">
                                    <label>Category</label>
                                    <input type="text" class="form-control" name="category" placeholder="Enter Category" required>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" name="submit" class="btn btn-secondary">Submit</button>
                                <button type="reset" name="reset" class="btn btn-danger">Reset</button>
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
