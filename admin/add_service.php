<?php
include 'template/header.php';

$title = "";
$details = "";
$broacher = "";
$status = "1";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $details = $_POST["details"];
    $broacher = $_POST["broacher"];

    $image = $_FILES['image']['name'];
    $target_dir = "uploads/service/";
    $target_file = $target_dir . basename($_FILES['image']['name']);

    // Select File Type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Allowed File Extensions
    $extension_arr = array('jpg', 'jpeg', 'png', 'gif');

    if (in_array($imageFileType, $extension_arr)) {

        $is_uploaded = move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $image);

        if ($is_uploaded) {
            $add_service_sql = "INSERT INTO service (title, details, image, broacher, status) VALUES ('$title', '$details', '$image', '$broacher', '$status')";
            $add_service_sql_result = $conn->query($add_service_sql);

            if ($add_service_sql_result == TRUE) {
                echo "<script>alert('New Service Record Added Successfully !');</script>";
            } else {
                echo "<script>alert('Sorry! Could Not Add New Service Record !');</script>";
            }
        } else {
            echo "<script>alert('Sorry! Service Photo Could Not be Uploaded !');</script>";
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
                    <h1 class="m-0">Service</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Service</a></li>
                        <li class="breadcrumb-item active">Add Service</li>                      
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
                            <h3 style="color: #fff;" class="card-title">Add Service</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group" style="color:grey">
                                    <label>Service Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter Service Title" required>
                                </div>
                                <div class="form-group">
                                    <label>Service Detail</label>
                                    <textarea class="form-control" rows="3" name="details" placeholder="Enter Service Detail"></textarea>
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Image</label>
                                    <input type="file" class="form-control-file border" name="image" required>
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Broacher Link</label>
                                    <input type="text" class="form-control" name="broacher" placeholder="Enter Broacher Link" required>
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
